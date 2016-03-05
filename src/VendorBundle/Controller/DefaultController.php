<?php

namespace VendorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VendorBundle:Default:index.html.twig');
    }
}
