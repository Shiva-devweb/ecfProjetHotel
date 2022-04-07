<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TheRoyalVillaController extends AbstractController
{
    #[Route('/TheRoyalVilla', name: 'ThaRoyalVilla')]
    public function index(): Response
    {
        return $this->render('TheRoyalVilla/index.html.twig', [
            'controller_name' => 'TheRoyalVillaController',
        ]);
    }
}
