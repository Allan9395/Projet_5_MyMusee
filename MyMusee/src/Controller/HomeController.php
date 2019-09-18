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
use App\Entity\Contact;
use App\Form\ContactType;

use App\Notification\ContactNotification;




class HomeController extends AbstractController
{
    
    /**
     * @Route("/contact", name="museum_contact")
     */
    public function contact(Request $request, ObjectManager $manager, ContactNotification $notification)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $notification->notify($contact);

            $this->addFlash('successMail', 'Votre email a bien été envoyé');
            return $this->redirectToRoute('home');
        }

        return $this->render('home/contact.html.twig', [
            'current_menu' => 'properties_contact',
            'formContact'  => $form->createView()
        ]);
    }

    /**
     * @Route("/region/{region}", name="museum_region")
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



    /**
     * @Route("/", name="home")
     */
    public function index(MuseumsRepository $repo)
    {

        $museumsRandom = array_rand($repo->findAll(), 15);
        $museums = $repo->findBy([
            'id' => $museumsRandom
        ]);

        return $this->render('home/index.html.twig', [
            'current_menu' => 'properties',
            'museums'=> $museums,
        ]);
    }
}