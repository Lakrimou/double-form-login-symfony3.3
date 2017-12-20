<?php

namespace Ecomerce\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EcomerceBackendBundle:Default:index.html.twig');
    }
}
