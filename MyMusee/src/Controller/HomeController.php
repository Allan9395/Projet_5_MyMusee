<?php

namespace App\Controller;

use Symfony\Bundle\TwigBundle\Controller\ExceptionController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Persistence\ObjectManager;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\MuseumsRepository;
use App\Entity\MuseumSearch;
use App\Entity\Museums;


class HomeController extends AbstractController
{
     
    /**
     * @Route("/museum/region/{region}", name="museum_region")
     */
    public function regionsList($region, MuseumsRepository $repo)
    {
        if ($region == 'Auvergne-Rhône-Alpes') {
            $museums = $repo->findBy(
                ['Region' => 'Auvergne-Rhône-Alpes']
            );
            
            return $this->render('region/Auvergne_Rhone_Alpes.html.twig',[
                'museum'=> $museums,
            ]);
        }
        if ($region == 'Bourgogne-Franche-Comté') {
            $museums = $repo->findBy(
                ['Region' => 'Bourgogne-Franche-Comté']
            );
            
            return $this->render('region/Bourgogne_Franche_Comte.html.twig',[
                'museum'=> $museums,
            ]);
        }
        if ($region == 'Bretagne') {
            $museums = $repo->findBy(
                ['Region' => 'Bretagne']
            );
            
            return $this->render('region/Bretagne.html.twig',[
                'museum'=> $museums,
            ]);
        }
        if ($region == 'Centre-Val de Loire') {
            $museums = $repo->findBy(
                ['Region' => 'Centre-Val de Loire']
            );
            
            return $this->render('region/Centre_Val_de_Loire.html.twig',[
                'museum'=> $museums,
            ]);
        }
        if ($region == 'Corse') {
            $museums = $repo->findBy(
                ['Region' => 'Corse']
            );
            
            return $this->render('region/Corse.html.twig',[
                'museum'=> $museums,
            ]);
        }
        if ($region == 'Grand Est') {
            $museums = $repo->findBy(
                ['Region' => 'Grand Est']
            );
            
            return $this->render('region/Grand_Est.html.twig',[
                'museum'=> $museums,
            ]);
        }
        if ($region == 'Hauts-de-France') {
            $museums = $repo->findBy(
                ['Region' => 'Hauts-de-France']
            );
            
            return $this->render('region/Hauts_de_France.html.twig',[
                'museum'=> $museums,
            ]);
        }
        if ($region == 'Île-de-France') {
            $museums = $repo->findBy(
                ['Region' => 'Île-de-France']
            );
            
            return $this->render('region/Ile_de_France.html.twig',[
                'museum'=> $museums,
            ]);
        }
        if ($region == 'Normandie') {
            $museums = $repo->findBy(
                ['Region' => 'Normandie']
            );
            
            return $this->render('region/Normandie.html.twig',[
                'museum'=> $museums,
            ]);
        }
        if ($region == 'Nouvelle-Aquitaine') {
            $museums = $repo->findBy(
                ['Region' => 'Nouvelle-Aquitaine']
            );
            
            return $this->render('region/Nouvelle_Aquitaine.html.twig',[
                'museum'=> $museums,
            ]);
        }
        if ($region == 'Occitanie') {
            $museums = $repo->findBy(
                ['Region' => 'Occitanie']
            );
            
            return $this->render('region/Occitanie.html.twig',[
                'museum'=> $museums,
            ]);
        }
        if ($region == 'Pays-de-la-Loire') {
            $museums = $repo->findBy(
                ['Region' => 'Pays-de-la-Loire']
            );
            
            return $this->render('region/Pays_de_la_Loire.html.twig',[
                'museum'=> $museums,
            ]);
        }
        if ($region == 'Provence-Alpes-Côte d\'Azur') {
            $museums = $repo->findBy(
                ['Region' => 'Provence-Alpes-Côte d\'Azur']
            );
            
            return $this->render('region/Provence_Alpes_Côte_d\'Azur.html.twig',[
                'museum'=> $museums,
            ]);
        }

    }
    public function shufflepageAction()
{ 

    function shuffle_assoc($array)
    {
        // Initialize
            $shuffled_array = array();

        // Get array's keys and shuffle them.
            $shuffled_keys = array_keys($array);
            shuffle($shuffled_keys);

        // Create same array, but in shuffled order.
            foreach ( $shuffled_keys AS $shuffled_key ) 
            {
                $shuffled_array[  $shuffled_key  ] = $array[  $shuffled_key  ];
            } 
        // Return
            return $shuffled_array;
    }

    $images = $this->get('doctrine')->getRepository('GabrielUploadBundle:Image')->findAll();
    $simages = shuffle_assoc($images); //randomize
    //ladybug_dump($simages);
    //$this->get('ladybug')->log($simages);
    return $this->render('GabrielLayoutBundle:Worldpage:shuffle.html.twig',array('images'=>$simages));
}
    /**
     * @Route("/", name="home")
     */
    public function index(MuseumsRepository $repo)
    {
        $id  = random_int(1,1213);
        $id1 = random_int(1,1213);
        $id2 = random_int(1,1213);
        $id3 = random_int(1,1213);
        $id4 = random_int(1,1213);
        $id5 = random_int(1,1213);
        $id6 = random_int(1,1213);
        $id7 = random_int(1,1213);
        $id8 = random_int(1,1213);
        $id9 = random_int(1,1213);
        $id10 = random_int(1,1213);
        $id11 = random_int(1,1213);

        $museums = $repo->find($id);
        $museums1 = $repo->find($id1);
        $museums2 = $repo->find($id2);
        $museums3 = $repo->find($id3);
        $museums4 = $repo->find($id4);
        $museums5 = $repo->find($id5);
        $museums6 = $repo->find($id6);
        $museums7 = $repo->find($id7);
        $museums8 = $repo->find($id8);
        $museums9 = $repo->find($id9);
        $museums10 = $repo->find($id10);
        $museums11 = $repo->find($id11);
        


        return $this->render('home/index.html.twig', [
            'current_menu' => 'properties',
            'museum'=> $museums,
            'museum1'=> $museums1,
            'museum2'=> $museums2,
            'museum3'=> $museums3,
            'museum4'=> $museums4,
            'museum5'=> $museums5,
            'museum6'=> $museums6,
            'museum7'=> $museums7,
            'museum8'=> $museums8,
            'museum9'=> $museums9,
            'museum10'=> $museums10,
            'museum11'=> $museums11
        ]);
    }
}