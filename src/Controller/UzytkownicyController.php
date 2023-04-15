<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UzytkownicyController extends AbstractController
{
    #[Route('/uzytkownicy', name: 'app_uzytkownicy')]
    public function index(): Response
    {
        return $this->render('uzytkownicy/index.html.twig', [
            'controller_name' => 'UzytkownicyController',
        ]);
    }
}
