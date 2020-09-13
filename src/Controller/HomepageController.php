<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomepageController extends AbstractController
{
    /**
     * @Route("/accueil", name="homepage")
     */
    public function index()
    {
        //  On récupere le manager
        $em = $this->getDoctrine()->getManager();
        //  On recupere le repository grace au manager
        $products =  $em->getRepository(Product::class)->findAll();

        return $this->render('homepage/index.html.twig', array(
            'products' => $products
        ));
    }
}
