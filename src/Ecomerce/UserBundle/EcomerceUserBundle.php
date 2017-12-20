<?php

namespace Ecomerce\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class EcomerceUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
