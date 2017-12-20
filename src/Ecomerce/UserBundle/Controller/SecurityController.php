<?php

namespace Ecomerce\UserBundle\Controller;

use FOS\UserBundle\Controller\SecurityController as BaseeController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * {@inheritDoc}
 */
class SecurityController extends BaseeController
{

    public function renderLogin(array $data)
    {

        $requestAttributes = $this->container->get('request_stack')->getCurrentRequest()->attributes;

        if ($requestAttributes->get('_route') == 'admin_login') {
            $template = sprintf('EcomerceUserBundle:Security:login.html.twig');
        } else {
            $template = sprintf('FOSUserBundle:Security:login.html.twig');
        }
        return $this->container->get('templating')->renderResponse($template, $data);
    }
}