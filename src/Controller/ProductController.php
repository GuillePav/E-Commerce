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

    /**
     * @Route("/product/{category}", name="productsByCategory")
     */
    public function editProductsByCategory($category)
    {
        $product = $this->getDoctrine()
            ->getManager()
            ->getRepository(Product ::class);
        $productByCatList = $product ->findByCategory($category);

        if (!$product) {
            throw $this->createNotFoundException('Unable to find products.');
        }

        return $this->render('product/category.html.twig',
            ['productByCatList' => $productByCatList]
            );


    }

    /**
     * @Route("/product/{id}", name="editProduct")
     */
    public function editProduct($id)
    {
        $product = $this->getDoctrine()
            ->getManager()
            ->getRepository(Product ::class);
        $productEdit = $product ->find($id);

        if (!$product) {
            throw $this->createNotFoundException('Unable to find products.');
        }

        return $this->render('product/product.html.twig',
            ['productEdit' => $productEdit]
        );


    }
}

