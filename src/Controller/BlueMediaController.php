<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Dotenv\Dotenv;

class BlueMediaController extends AbstractController
{
   
    public static function doEndpoint(string $data)
    {

      $price = $data;

      $dotenv = new Dotenv();
      $dotenv->load($_SERVER['PWD'].'/.env.dev.local');

   

      $API_KEY = getenv('API_KEY');
      $serviceID = getenv('SERVICE_ID');
      $hostID = getenv('HOST_ID');        
      
      $orderID = uniqid();
      
      $hash = hash('sha256',"$serviceID".'|'."$orderID".'|'.$price.'|'."$API_KEY");
      
  
      $endpoint = $hostID.'ServiceID='.$serviceID.'&OrderID='.$orderID.'&Amount='.$price.'&Hash='.$hash;

      return $endpoint;
      
     
    } 
}
