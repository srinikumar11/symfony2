<?php

namespace Acme\ClassifiedsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('AcmeClassifiedsBundle:Default:index.html.twig', array('name' => $name));
    }
}
