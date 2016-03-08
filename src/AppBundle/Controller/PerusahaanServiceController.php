<?php

namespace AppBundle\Controller;	


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PerusahaanServiceController extends Controller
{
	 public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
         $server = new \SoapServer('/path/to/hello.wsdl'); 

        $server->setObject($this); 

        $response = new Response(); 

        $response->headers->set('Content-Type', 'text/xml; charset=ISO-8859-1'); 

        ob_start(); 

        $server->handle(); 

        $response->setContent(ob_get_contents()); 

        ob_clean(); 

        return $response; 
    }
}
