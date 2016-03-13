<?php

namespace AppBundle\Controller;	


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use NoiseLabs\Bundle\NuSOAPBundle;

class PerusahaanServiceController extends Controller
{
    /**
     * @Route("/perusahaan")
     */
	 public function indexAction()
    {
        $wsdl = "http://www.webservicex.net/geoipservice.asmx?WSDL";
        $client = new \nusoap_client($wsdl,'wsdl');
        $result = $client->call("GetGeoIP",array("IPAddress"=> "202.46.129.20"));
        echo "<pre>";
        print_r($result);
        echo "</pre>";
        $product = $this->getDoctrine()
        ->getRepository('AppBundle:Perusahaan')
        ->find("147");
        echo "<pre>";
        print_r($product);
        echo "</pre>";
        return $product;
        //print_r($product);
    }
}
