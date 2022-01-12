<?php

namespace App\Controller;

use App\Entity\Homepage;
use App\Form\HomepageType;
use App\Repository\HomepageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/homepage")
 */
class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage_index", methods={"GET"})
     */
    public function index(HomepageRepository $homepageRepository): Response
    {
        return $this->render('homepage/index.html.twig', [
            'homepages' => $homepageRepository->findAll(),
        ]);
    }



    /**
     * @Route("/{id}", name="homepage_show", methods={"GET"})
     */
    public function show(Homepage $homepage): Response
    {
        return $this->render('homepage/show.html.twig', [
            'homepage' => $homepage,
        ]);
    }

 
}
