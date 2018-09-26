<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\LamasticotRepository;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{productId}", name="product_detail")
     */
    public function index(int $productId)
    {
        $lamasticotRepository = new LamasticotRepository();
        $lamasticot = $lamasticotRepository->findOneById($productId);
        return $this->render('product/details.html.twig', [
            'lamasticot' => $lamasticot,
        ]);

    }
}
