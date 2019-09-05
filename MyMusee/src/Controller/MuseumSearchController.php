<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\TwigBundle\Controller\ExceptionController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Knp\Component\Pager\PaginatorInterface;


use App\Entity\Museums;
use App\Repository\MuseumsRepository;
use App\Entity\Comment;
use App\Form\CommentType;
use App\Form\MuseumsType;



class MuseumSearchController extends AbstractController
{
    /**
     * @Route("/museum/search", name="museum_search")
     */
    public function index(MuseumsRepository $repo, PaginatorInterface $paginator, Request $request)
    {
        //$museums = $repo->findAll();
        $museums = $paginator->paginate(
            $repo->findAll(),
            $request->query->getInt('page', 1), 12
        );

        return $this->render('museum_search/index.html.twig', [
            'controller_name' => 'MuseumSearchController',
            'current_menu' => 'properties_museumSearch',
            'museums'=> $museums
        ]);
    }

    /**
     * @Route("/admin/museum/new", name="museum_create")
     * 
    **/
    public function museumCreate(Museums $museum = null, Request $request, ObjectManager $manager)
    {
        if(!$museum) {
            $museum = new Museums();
        }

        $form = $this->createForm(MuseumsType::class, $museum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $manager->persist($museum);
            $manager->flush();
            $this->addFlash('success', 'Vous avez bien créé le musée');

            return $this->redirectToRoute('museum_show', ['id' => $museum->getId()
            ]);
        }
        
        return $this->render('museum_search/create.html.twig', [
            'current_menu' => 'properties_museumCreate',
            'formMuseum' => $form->createView(),
            'editMode' => $museum->getId() !== null
        ]);
    }

    /**
     * @Route("/admin/museum/{id}/edit", name="museum_edit", methods="GET|POST")
     * 
    **/
    public function museumEdit(Museums $museum = null, Request $request, ObjectManager $manager)
    {

        $form = $this->createForm(MuseumsType::class, $museum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $manager->persist($museum);
            $manager->flush();
            $this->addFlash('success', 'Vous avez bien modifié les informations du musée');

            return $this->redirectToRoute('museum_show', ['id' => $museum->getId()
            ]);
        }
        
        return $this->render('museum_search/create.html.twig', [
            'current_menu' => 'properties_museumCreate',
            'formMuseum' => $form->createView(),
            'editMode' => $museum->getId() !== null
        ]);
    }

    /**
     * @Route("/admin/museum/{id}/delete", name="museum_delete", methods="DELETE")
     **/
    public function museumDelete(Museums $museum, Request $request)
    {
        if ($this->isCsrfTokenValid('delete'. $museum->getId(), $request->get('_token'))) {
            $em=$this->getDoctrine()->getManager();
            $em->remove($museum);
            $em->flush();
            $this->addFlash('success', 'Vous avez bien supprimé le musée');

        }
        return $this->redirectToRoute('museum_search');
    }

    /**
     * @Route("/museum/{id}", name="museum_show")
     **/
    public function show(Museums $museums, Request $request, ObjectManager $manager)
    {        
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setCreatedAt(new \Datetime())
                    ->setMuseumId($museums)
                    ->setReport(1);

            $manager->persist($comment);
            $manager->flush();

            return $this->redirectToRoute('museum_show', ['id' => $museums->getId()
            ]);
        }

        return $this->render('museum_search/show.html.twig', [
            'museum' => $museums,
            'formComment' => $form->createView(),
        ]);
    }
}