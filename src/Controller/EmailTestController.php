<?php
// src/Controller/TestEmailController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface; // Pour les logs

class EmailTestController extends AbstractController
{
    #[Route('/test-email', name: 'test_email')]
    public function testEmail(MailerInterface $mailer, LoggerInterface $logger): Response
    {
        $email = (new Email())
            ->from('workshop2425.b3g8@gmail.com') // Assurez-vous que cette adresse est vérifiée
            ->to('remi.camino@ecoles-epsi.net') // Remplacez par votre email
            ->subject('Test d\'email')
            ->text('Ceci est un email de test.');

        try {
            $mailer->send($email);
            $logger->info('Email de test envoyé avec succès.');
            return new Response('Email envoyé avec succès.');
        } catch (\Exception $e) {
            $logger->error('Erreur lors de l\'envoi de l\'email de test : ' . $e->getMessage());
            return new Response('Erreur lors de l\'envoi de l\'email : ' . $e->getMessage());
        }
    }
}
