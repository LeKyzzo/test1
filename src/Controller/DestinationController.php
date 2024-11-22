<?php

// src/Controller/DestinationController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DestinationController extends AbstractController
{
    public function show(int $id): Response
    {
        // Données fictives pour les démonstrations
        $destinations = [
            1 => ['name' => 'Paris', 'description' => 'Découvrez les charmes de Paris...', 'activities' => ['Tour Eiffel', 'Louvre'], 'image' => '/images/paris.jpg'],
            2 => ['name' => 'Bali', 'description' => 'Explorez Bali, ses plages...', 'activities' => ['Surf', 'Randonnée'], 'image' => '/images/bali.jpg'],
        ];

        $destination = $destinations[$id] ?? null;

        if (!$destination) {
            throw $this->createNotFoundException('Destination non trouvée');
        }

        return $this->render('destination/show.html.twig', [
            'destination' => $destination,
        ]);
    }
}

