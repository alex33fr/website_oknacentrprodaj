<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DashboardShowcaseController extends AbstractController
{
    /**
     * @Route("/dashboard/showcase", name="dashboard_showcase")
     */
    public function index()
    {
        return $this->render('dashboard_showcase/index.html.twig', [
            'controller_name' => 'DashboardShowcaseController',
        ]);
    }
}
