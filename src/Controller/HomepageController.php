<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\LamasticotRepository;
use App\Entity\Lamasticot;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $lamasticots = $this->getDoctrine()
       ->getRepository(Lamasticot::class)
       ->findAll();

        return $this->render('homepage\homepage.html.twig', [

            'lamasticots' => $lamasticots,
        ]);
    }
}
