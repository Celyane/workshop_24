<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager,
        MailerInterface $mailer
    ): Response {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = $form->get('plainPassword')->getData();

            $user->setPassword($userPasswordHasher->hashPassword($user, $plainPassword));

            $emailPart = $form->get('email')->getData();
            $fullEmail = $emailPart . '@ecoles-epsi.net';

            if (!str_ends_with($fullEmail, '@ecoles-epsi.net')) {
                $this->addFlash('error', 'L\'adresse e-mail doit se terminer par @ecoles-epsi.net.');
                return $this->redirectToRoute('app_register');
            }

            $user->setEmail($fullEmail);
            $user->setRoles(['ROLE_USER']);

            $entityManager->persist($user);
            $entityManager->flush();

            try {
                $email = (new Email())
                    ->from('workshop2425.b3g8@gmail.com')
                    ->to($fullEmail)
                    ->subject('Votre compte a été créé')
                    ->html('<p>Merci d\'avoir créé un compte sur notre site.</p>')
                    ->text('Merci d\'avoir créé un compte sur notre site.');

                $mailer->send($email);

                $this->addFlash('success', 'Compte créé avec succès. Un email de confirmation vous a été envoyé.');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de l\'envoi de l\'email de confirmation.');
                error_log('Erreur d\'envoi d\'email : ' . $e->getMessage());
            }

            return $this->redirectToRoute('app_home_page');
        }

        return $this->render('registration/index.html.twig', [
            'registrationForm' => $form,
        ]);
    }
}
