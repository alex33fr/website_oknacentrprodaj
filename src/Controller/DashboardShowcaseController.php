<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardShowcaseController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard_showcase")
     */
    public function index()
    {
        return $this->render('dashboard_showcase/index.html.twig', [
            'template_name' => 'DashboardShowcaseController',
        ]);
    }

    /**
     * @Route("/dashboard/create", name="create_product")
     * @Route("/dashboard/{id}/edit", name="edit_product")
     * @param Product $product
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     * @throws Exception
     */

    public function form(Product $product = null, Request $request, EntityManagerInterface $manager)
    {
        if(!$product){
            $product = new Product();
        }

        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            if(!$product->getId()){
                $product->setCreatedAt(new \DateTime());
            }
            $manager->persist($product);
            $manager->flush();

            return $this->redirectToRoute('show_product', ['id' => $product->getId()]);
        }

        return $this->render('dashboard_showcase/productcrud.html.twig', [
            'template_name' => 'Создать товар',
            'form' => $form->createView(),
            'editMode' => $product->getId() !== null
        ]);
    }
}
