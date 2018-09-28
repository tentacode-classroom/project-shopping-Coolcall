<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\LamasticotRepository;
use App\Entity\Lamasticot;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{productId}", name="product_detail")
     */
    public function index(Request $request, $productId)
    {
        $lamasticot = $this->getDoctrine()
       ->getRepository(Lamasticot::class)
       ->find($productId);

       $lamasticot->incrementViewCounter();
       $entityManager = $this->getDoctrine()->getManager();
       $entityManager->persist($lamasticot);
       $entityManager->flush();

        return $this->render('product/details.html.twig', [
            'lamasticot' => $lamasticot,
        ]);

    }
}
