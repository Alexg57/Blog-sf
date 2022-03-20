<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserBackEndController extends AbstractController
{
    #[Route('/dashboard', name: 'app_user_back_end')]
    public function index(): Response
    {
        return $this->render('user_back_end/index.html.twig', [
            'controller_name' => 'UserBackEndController',
        ]);
    }
}
