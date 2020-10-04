<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="mainpage")
     */
    public function index() { 


        return $this->render('portfolio/portfolio.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }


}
