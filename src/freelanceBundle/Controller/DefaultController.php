<?php

namespace freelanceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('freelanceBundle:Default:index.html.twig');
    }
}
