<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MuseumSearchController extends AbstractController
{
    /**
     * @Route("/museum/search", name="museum_search")
     */
    public function index()
    {
        return $this->render('museum_search/index.html.twig', [
            'controller_name' => 'MuseumSearchController',
            'current_menu' => 'properties_museumSearch'
        ]);
    }
}
