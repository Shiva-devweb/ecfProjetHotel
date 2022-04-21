<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Rvsuit1Controller extends AbstractController
{
    #[Route('/rvsuit1', name: 'app_rvsuit1')]
    public function index(): Response
    {
        return $this->render('rvsuit1/index.html.twig', [
            'controller_name' => 'Rvsuit1Controller',
        ]);
    }
}
