<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProjetsController extends AbstractController
{
    #[Route('/projets', name: 'app_projets')]
    public function index(): Response
    {
        return $this->render('projets/index.html.twig');
    }

    #[Route('/projet/morpion', name: 'app_projet_morpion')]
    public function showMorpion(): Response
    {
        return $this->render('projets/morpion.html.twig');
    }

    #[Route('/projet/kanye', name: 'app_projet_kanye')]
    public function showKanye(): Response
    {
        return $this->render('projets/kanye.html.twig');
    }

    #[Route('/projet/pendu', name: 'app_projet_pendu')]
    public function showPendu(): Response
    {
        return $this->render('projets/pendu.html.twig');
    }

    #[Route('/projet/ecom', name: 'app_projet_ecom')]
    public function showEcom(): Response
    {
        return $this->render('projets/ecom.html.twig');
    }

    #[Route('/projet/reseauSocial', name: 'app_projet_reseauSocial')]
    public function showreseauSocial(): Response
    {
        return $this->render('projets/reseauSocial.html.twig');
    }

}
