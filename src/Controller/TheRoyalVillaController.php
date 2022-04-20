<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TheRoyalVillaController extends AbstractController
{
    #[Route('home/TheRoyalVilla', name: 'TheRoyalVilla')]
    public function index(): Response
    {
        return $this->render('TheRoyalVilla/index.html.twig', [
            'controller_name' => 'TheRoyalVillaController',
        ]);
    }
}
