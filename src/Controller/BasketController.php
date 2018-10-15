<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class BasketController extends AbstractController
{
    /**
     * @Route("/panier", name="basket")
     */
    public function index(SessionInterface $session)
    {
        $basketProducts = $session->get('basket_products', []);
        return $this->render('basket/index.html.twig', [
            'basket_products'=> $basketProducts,
        ]);
    }

    /**
     * @Route("/panier/ajouter/{productId}", name="basket")
     */
    public function add(int $productId, SessionInterface $session)
    {
        $basketProducts = $session->get('basket_products', []);
        if (!in_array($productId, $basketProducts))
        $basketProducts[] = $productId;

        $session->set('basket_products', $basketProducts);


        return $this->redirectToRoute('basket_list');
    }
}
