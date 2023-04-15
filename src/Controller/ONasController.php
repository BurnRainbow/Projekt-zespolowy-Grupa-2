<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ONasController extends AbstractController
{
    #[Route('/o-nas', name: 'app_o_nas')]
    public function index(): Response
    {
        return $this->render('o_nas/index.html.twig', [
            'controller_name' => 'ONasController',
        ]);
    }
}
