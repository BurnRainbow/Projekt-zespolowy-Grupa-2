<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InstrukcjaController extends AbstractController
{
    #[Route('/instrukcja', name: 'app_instrukcja')]
    public function index(): Response
    {
        return $this->render('instrukcja/index.html.twig', [
            'controller_name' => 'InstrukcjaController',
        ]);
    }
}
