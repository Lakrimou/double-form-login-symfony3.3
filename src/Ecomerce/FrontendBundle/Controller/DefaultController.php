<?php

namespace Ecomerce\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EcomerceFrontendBundle:Default:index.html.twig');
    }
}
