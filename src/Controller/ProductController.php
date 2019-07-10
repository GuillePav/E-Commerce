<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="product")
     */
    public function editAllProducts()
    {
        $product = $this->getDoctrine()
            ->getManager()
            ->getRepository(Product ::class);
        $productList = $product->findAll();

        if (!$product) {
            throw $this->createNotFoundException('Unable to find products.');
        }
        return $this->render('product/index.html.twig',
            ['productList' => $productList]);
    }
}

