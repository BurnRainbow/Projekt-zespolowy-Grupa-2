<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

use App\Entity\User;

class UserController extends AbstractController
{
    #[Route('/logintest', name: 'user_login')]
    public function index(Request $request): Response
    {

        $user = new User(); 
        $form = $this->createFormBuilder($user)
            ->add('username', TextType::class, [
                'label' => 'Nazwa użytkownika: ',
                'required' => true
        ])
            ->add('password', PasswordType::class, [
                'label' => 'Hasło: ',
                'required' => true
        ])
        ->add('save', SubmitType::class, [
            'label' => 'Zaloguj się'
        ])
        ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $notatka = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user); 

            return $this->redirectToRoute('main_game');
        }
        return $this->render('login/index.html.twig', [
            'form' => $form->createView()
        ]);
    }

}
