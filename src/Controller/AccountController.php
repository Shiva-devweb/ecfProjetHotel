<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountController extends AbstractController
{
    #[Route('/account', name: 'app_account')]
    public function index(Request $request) 
    {
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);
        $form -> handleRequest($request);

        if ($form -> isSubmitted() && $form -> isValid()) {
            $user = $form->getData();

            dd($user);
        }
        return $this->render('account/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
