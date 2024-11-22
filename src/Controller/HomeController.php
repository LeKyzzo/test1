<?php

// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $destinations = [
            [
                'id' => 1,
                'name' => 'Paris',
                'description' => 'La ville lumière, connue pour ses monuments.',
                'image' => '/images/paris.jpg',
            ],
            [
                'id' => 2,
                'name' => 'Bali',
                'description' => 'Un paradis tropical pour les amateurs de plage.',
                'image' => '/images/bali.jpg',
            ],
        ];

        return $this->render('home/index.html.twig', [
            'destinations' => $destinations,
        ]);
    }
}

