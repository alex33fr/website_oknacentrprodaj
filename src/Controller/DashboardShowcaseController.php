<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DashboardShowcaseController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard_showcase")
     */
    public function index()
    {
        return $this->render('dashboard_showcase/index.html.twig', [
            'controller_name' => 'DashboardShowcaseController',
        ]);
    }

    /**
     * @Route("/dashboard/create", name="create_product")
     */

    public function create()
    {
        $product = new Product();

        $form = $this->createFormBuilder($product)
                    ->add('title')
                    ->add('model')
                    ->add('color')
                    ->add('image')
                    ->add('descOne')
                    ->add('descTwo')
                    ->getForm();

        return $this->render('dashboard_showcase/create.html.twig', [
            'controller_name' => 'Создать товар',
            'form' => $form->createView()
        ]);
    }
}
