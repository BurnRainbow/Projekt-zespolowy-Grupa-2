<?php

/*
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HistoriagierController extends AbstractController
{
    #[Route('/historiagier', name: 'app_historiagier')]
    public function index(): Response
    {
        return $this->render('historiagier/index.html.twig', [
            'controller_name' => 'HistoriagierController',
        ]);
    }
*/

namespace App\Controller;
Use App\Entity\User;
Use App\Entity\HistoriaGier;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HistoriagierController extends AbstractController
{

    private UrlGeneratorInterface $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    #[Route('/historiagier', name: 'app_historiagier')]
    public function index(UserInterface $usr): Response
    {
        /**
       * @var User $user
       */

        $user = $usr; 
        dump($user->getId());

        $dostepdobazy = $this->getDoctrine()->getRepository(User::class)->findBy(['id' => $user]);
        $dostepdohistrii = $this->getDoctrine()->getRepository(HistoriaGier::class)->findBy(['id' => $user]);
        
        return $this->render('historiagier/index.html.twig', [
            'controller_name' => 'HistoriagierController',
            'bazadanych' => $dostepdobazy,
            'historiagier' => $dostepdohistrii,
        ]);

        
    }
}
