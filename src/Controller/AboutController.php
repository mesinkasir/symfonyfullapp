<?php

namespace App\Controller;

use App\Entity\About;
use App\Form\About1Type;
use App\Repository\AboutRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/about")
 */
class AboutController extends AbstractController
{
    /**
     * @Route("/", name="about_index", methods={"GET"})
     */
    public function index(AboutRepository $aboutRepository): Response
    {
        return $this->render('about/index.html.twig', [
            'abouts' => $aboutRepository->findAll(),
        ]);
    }


    /**
     * @Route("/{id}", name="about_show", methods={"GET"})
     */
    public function show(About $about): Response
    {
        return $this->render('about/show.html.twig', [
            'about' => $about,
        ]);
    }

 
}
