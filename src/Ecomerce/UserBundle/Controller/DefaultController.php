<?php

namespace Ecomerce\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EcomerceUserBundle:Default:index.html.twig');
    }
}
