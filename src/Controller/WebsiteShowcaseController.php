<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WebsiteShowcaseController extends AbstractController
{
    /**
     * @Route("/", name="website_showcase")
     */
    public function index()
    {
        return $this->render('website_showcase/index.html.twig', [
            'controller_name' => 'Главная',
        ]);
    }

    /**
     * @Route("/product", name="show_product")
     */
    public function product()
    {
        return $this->render('website_showcase/product.html.twig', [
            'controller_name' => 'Товары',
        ]);
    }
}
