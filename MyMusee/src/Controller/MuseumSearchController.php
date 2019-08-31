<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Museums;
class MuseumSearchController extends AbstractController
{
    /**
     * @Route("/museum/search", name="museum_search")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Museums::class);
        $museums = $repo->findAll();

        return $this->render('museum_search/index.html.twig', [
            'controller_name' => 'MuseumSearchController',
            'current_menu' => 'properties_museumSearch',
            'museums'=> $museums
        ]);
    }

    /**
     * @Route("/museum/{id}", name="museum_show")
     */
    public function show($id)
    {
        $repo = $this->getDoctrine()->getRepository(Museums::class);

        $museums = $repo->find($id);
         
        return $this->render('museum_search/show.html.twig', [
            'museum' => $museums
        ]);
    }
}
