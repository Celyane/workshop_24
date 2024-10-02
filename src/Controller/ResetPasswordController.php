<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ChangePasswordFormType;
use App\Form\ResetPasswordRequestFormType;
use App\Entity\ResetPasswordRequest; 
use Doctrine\ORM\EntityManagerInterface;
// use Psr\Log\LoggerInterface; // On peut le laisser si nécessaire
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\ResetPassword\Controller\ResetPasswordControllerTrait;
use SymfonyCasts\Bundle\ResetPassword\Exception\ResetPasswordExceptionInterface;
use SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelperInterface;

#[Route('/reset-password')]
class ResetPasswordController extends AbstractController
{
    use ResetPasswordControllerTrait;

    public function __construct(
        private ResetPasswordHelperInterface $resetPasswordHelper,
        private EntityManagerInterface $entityManager
        // private LoggerInterface $logger // On peut le laisser si nécessaire
    ) {
    }

    /**
     * Display & process form to request a password reset.
     */
    #[Route('', name: 'app_forgot_password_request')]
    public function request(
        Request $request,
        MailerInterface $mailer,
        TranslatorInterface $translator
    ): Response {
        $form = $this->createForm(ResetPasswordRequestFormType::class);
        $form->handleRequest($request);

        error_log('Formulaire de demande de réinitialisation affiché.');

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var string $email */
            $email = $form->get('email')->getData();
            error_log("Formulaire soumis avec l'email : $email");

            return $this->processSendingPasswordResetEmail($email, $mailer, $translator);
        } elseif ($form->isSubmitted()) {
            error_log('Formulaire soumis mais invalide.');
        } else {
            error_log('Formulaire non soumis.');
        }

        return $this->render('reset_password/request.html.twig', [
            'requestForm' => $form,
        ]);
    }

    /**
     * Confirmation page after a user has requested a password reset.
     */
    #[Route('/check-email', name: 'app_check_email')]
    public function checkEmail(): Response {
        if (null === ($resetToken = $this->getTokenObjectFromSession())) {
            error_log('Aucun jeton trouvé en session, génération d\'un faux jeton.');
            $resetToken = $this->resetPasswordHelper->generateFakeResetToken();
        } else {
            error_log('Jeton de réinitialisation trouvé en session.');
        }

        return $this->render('reset_password/check_email.html.twig', [
            'resetToken' => $resetToken,
        ]);
    }

    /**
     * Validates and processes the reset URL that the user clicked in their email.
     */
    #[Route('/reset/{token}', name: 'app_reset_password')]
    public function reset(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        TranslatorInterface $translator,
        ?string $token = null
    ): Response {
        if ($token) {
            error_log("Jeton reçu dans l'URL : $token");
            $this->storeTokenInSession($token);

            return $this->redirectToRoute('app_reset_password');
        }

        $token = $this->getTokenFromSession();

        if (null === $token) {
            error_log('Aucun jeton de réinitialisation trouvé dans l\'URL ou la session.');
            throw $this->createNotFoundException('Aucun jeton de réinitialisation trouvé dans l\'URL ou la session.');
        }

        try {
            /** @var User $user */
            $user = $this->resetPasswordHelper->validateTokenAndFetchUser($token);
            error_log("Jeton valide, utilisateur récupéré : ID {$user->getId()}, email {$user->getEmail()}");
        } catch (ResetPasswordExceptionInterface $e) {
            error_log('Erreur lors de la validation du jeton : ' . $e->getReason());
            $this->addFlash('reset_password_error', sprintf(
                '%s - %s',
                $translator->trans(ResetPasswordExceptionInterface::MESSAGE_PROBLEM_VALIDATE, [], 'ResetPasswordBundle'),
                $translator->trans($e->getReason(), [], 'ResetPasswordBundle')
            ));

            return $this->redirectToRoute('app_forgot_password_request');
        }

        $form = $this->createForm(ChangePasswordFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            error_log('Formulaire de réinitialisation du mot de passe soumis et valide.');

            $this->resetPasswordHelper->removeResetRequest($token);

            /** @var string $plainPassword */
            $plainPassword = $form->get('plainPassword')->getData();

            $user->setPassword($passwordHasher->hashPassword($user, $plainPassword));
            $this->entityManager->flush();

            $this->cleanSessionAfterReset();

            error_log('Mot de passe réinitialisé avec succès.');

            return $this->redirectToRoute('app_home_page');
        } elseif ($form->isSubmitted()) {
            error_log('Formulaire de réinitialisation du mot de passe soumis mais invalide.');
        } else {
            error_log('Formulaire de réinitialisation du mot de passe non soumis.');
        }

        return $this->render('reset_password/reset.html.twig', [
            'resetForm' => $form,
        ]);
    }

    private function processSendingPasswordResetEmail(
        string $emailFormData,
        MailerInterface $mailer,
        TranslatorInterface $translator
    ): RedirectResponse {
        error_log("Début du processus d'envoi de l'email de réinitialisation pour : $emailFormData");
    
        $user = $this->entityManager->getRepository(User::class)->findOneBy([
            'email' => $emailFormData,
        ]);

        if (!$user) {
            error_log("Aucun utilisateur trouvé pour l'email : $emailFormData");
            return $this->redirectToRoute('app_check_email');
        } else {
            error_log("Utilisateur trouvé pour l'email : {$user->getEmail()}, ID : {$user->getId()}");
        }

        $resetRequestRepository = $this->entityManager->getRepository(ResetPasswordRequest::class);
        $existingRequests = $resetRequestRepository->findBy(['user' => $user]);
    
        foreach ($existingRequests as $existingRequest) {
            $this->entityManager->remove($existingRequest);
        }
        $this->entityManager->flush();
    
        error_log("Ancienne(s) demande(s) de réinitialisation supprimée(s) pour l'utilisateur ID : {$user->getId()}");
    
        try {
            $resetToken = $this->resetPasswordHelper->generateResetToken($user);
            error_log("Nouveau jeton de réinitialisation généré : {$resetToken->getToken()}");
        } catch (ResetPasswordExceptionInterface $e) {
            error_log('Erreur lors de la génération du jeton de réinitialisation : ' . $e->getReason());

            return $this->redirectToRoute('app_check_email');
        }
    
        $email = (new TemplatedEmail())
            ->from('workshop2425.b3g8@gmail.com')
            ->to($user->getEmail())
            ->subject('Votre demande de réinitialisation de mot de passe')
            ->htmlTemplate('reset_password/email.html.twig')
            ->context([
                'resetToken' => $resetToken,
            ]);
    
        try {
            $mailer->send($email);
            error_log("Email de réinitialisation envoyé à : {$user->getEmail()}");
        } catch (\Exception $e) {
            error_log('Erreur lors de l\'envoi de l\'email de réinitialisation : ' . $e->getMessage());
            $this->addFlash('error', 'Erreur lors de l\'envoi de l\'email de réinitialisation.');
            return $this->redirectToRoute('app_forgot_password_request');
        }
        $this->setTokenObjectInSession($resetToken);
    
        return $this->redirectToRoute('app_check_email');
    }
}
