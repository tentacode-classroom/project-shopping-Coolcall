<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{id}", name="product")
     */
    public function index(Request $request, $id = 'default')
    {

        $id = $request->get('id');
        return $this->render('product/product.html.twig', [
            'id' => $id,
        ]);
         return $response;
    }
}
