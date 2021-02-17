<?php

namespace App\Controller;

use App\Form\FormType;
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
       

        $form = $this->createForm(FormType::class);
        return $this->render('main/index.html.twig', [
            'title' => 'Intergration Blue Media payment system ',
            'price' => PRICE,
            'form' => $form->createView()
        ]);
    }
}
