<?php

namespace AppBundle\Controller; 


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use NoiseLabs\Bundle\NuSOAPBundle;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use JMS\SerializerBundle;

class DemoController extends Controller
{   
   
     /**
     * @Route("/getserver")
     */

      public function getServer(){
        /*$wsdl = "http://www.webservicex.net/geoipservice.asmx?WSDL";
        $client = new \nusoap_client($wsdl,'wsdl');
        $result = $client->call("GetGeoIP",array("IPAddress"=> "202.46.129.20"));
        echo "<pre>";
        print_r($result);
        echo "</pre>";*/

        $wsdl = "http://localhost/vendor/web/app_dev.php/webserver?wsdl";
        $client = new \nusoap_client($wsdl, true);
        $err = $client->getError();     
        if ($err) {
          // Display the error
          echo '<h2>Constructor error</h2>' . $err;
          // At this point, you know the call that follows will fail
                //exit();
        }
        echo "hahah";
        //$client->setCredentials("test","test213","basic");
      
        $result = $client->call('getPr');
        $err = $client->getError();     
        if ($err) {
          // Display the error
          echo '<h2>Constructor error</h2>' . $err;
          // At this point, you know the call that follows will fail
                //exit();
        }
        echo '<h2>Request</h2>';
        echo '<pre>' . htmlspecialchars($client->request, ENT_QUOTES) . '</pre>';
        echo '<h2>Response</h2>';
        echo '<pre>' . htmlspecialchars($client->response, ENT_QUOTES) . '</pre>';
        echo '<h2>Debug</h2>';
        echo '<pre>' . htmlspecialchars($client->getDebug(), ENT_QUOTES) . '</pre>';
        echo '<h2>Error</h2>';
        echo '<pre>' . htmlspecialchars($client->getError(), ENT_QUOTES) . '</pre>';
        echo '<h2>Fault</h2>';
        echo '<pre>' . htmlspecialchars($client->fault, ENT_QUOTES) . '</pre>';
        print_r($result);
        
        //return new Response($result);
        die();

      }

}
