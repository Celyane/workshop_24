<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\User;
use App\Form\CreateFormPostType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CreatePostController extends AbstractController
{
    #[Route('/create/post', name: 'app_create_post')]
    public function index(Request $request, EntityManagerInterface $entityManager, Security $security): Response
    {
        $post = new Post();
        $form = $this->createForm(CreateFormPostType::class, $post);
        $form->handleRequest($request);

        $user = $security->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour créer un post.');
        }
        if ($form->isSubmitted() && $form->isValid()) {
            $post->setIdUser($user);
            $entityManager->persist($post);
            $entityManager->flush();

            return $this->redirectToRoute('app_home_page');
        }

        return $this->render('create_post/index.html.twig', [
            'createFormPost' => $form->createView(),
        ]);
    }
}