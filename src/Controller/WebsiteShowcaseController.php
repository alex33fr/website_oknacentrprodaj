<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WebsiteShowcaseController extends AbstractController
{
    /**
     * @Route("/", name="website_showcase")
     * @param ProductRepository $productRepository
     * @return Response
     */
    public function index(ProductRepository $productRepository)
    {
        $products = $productRepository->findAll();
        return $this->render('website_showcase/index.html.twig', [
            'controller_name' => 'Главная',
            'products' => $products
        ]);
    }

    /**
     * @Route("/product/{id}", name="show_product")
     * @param Product $product
     * @return Response
     */
    public function product(Product $product)
    {
        return $this->render('website_showcase/show_product.html.twig', [
            'controller_name' => 'Товары',
            'product' => $product
        ]);
    }
}
