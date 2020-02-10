<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WebsiteShowcaseController extends AbstractController
{
    /**
     * @Route("/website/showcase", name="website_showcase")
     */
    public function index()
    {
        return $this->render('website_showcase/index.html.twig', [
            'controller_name' => 'WebsiteShowcaseController',
        ]);
    }
}
