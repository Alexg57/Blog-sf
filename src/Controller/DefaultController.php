<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_default')]
    public function index(PostRepository $postRepository): Response
    {
        

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'posts' => $postRepository->findAll()
        ]);
    }

    #[Route('/show/{id}', name: 'app_default_show', methods: ['GET'])]
    public function show(Post $post): Response
    {
        return $this->render('default/show.html.twig', [
            'post' => $post,
        ]);
    }

}
