<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\LamasticotRepository;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $LamasticotRepository = new LamasticotRepository();
        $Lamasticots = $LamasticotRepository->findAll();

        return $this->render('homepage\homepage.html.twig', [

            'lamasticots' => $Lamasticots
        ]);
    }
}
