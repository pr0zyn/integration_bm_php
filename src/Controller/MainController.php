<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(): Response
    {
        define('AMOUNT', "1000.00");
        $price = explode('.', AMOUNT);
        $endpoint = new BlueMediaController();
        $url = $endpoint->doEndpoint(AMOUNT);  
        

        return $this->render('main/index.html.twig', [
            'title' => 'Test page Blue Media payment system ',
            'price' => $price[0],
            'endpoint' => $url
            ]);
    }

     /**
     * @Route("/return", name="return")
     */
    public function return()
    {
        // TO DO
        // Logic that will be 

        return $this->render('main/return.html.twig', [
            'title' => ' Thank you for the payment ',
            ]);
    }
}


