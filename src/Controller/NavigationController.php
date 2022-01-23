<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NavigationController extends AbstractController
{
    #[Route('/navigation', name: 'navigation')]
    public function index(): Response
    {
        return $this->render('navigation/index.html.twig', [
            'nav' => [
                'accueil' => 'Accueil',
                'blog' => 'Blog',
                'article' => 'Article',
                'categories' => 'Catégories'
            ]

        ]);
    }
}
