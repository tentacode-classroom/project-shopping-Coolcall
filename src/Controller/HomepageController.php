<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $product = [
            [
                'id' => '1',
                'name' => 'bouchon plastique',
            ],
            [
                'id' => '2',
                'name' => 'bouchon capsule',
            ],
            [
                'id' => '3',
                'name' => 'bouchon liege',
            ],
        ];
        return $this->render('homepage\homepage.html.twig', [
            'product' => $product,
        ]);
    }
}
