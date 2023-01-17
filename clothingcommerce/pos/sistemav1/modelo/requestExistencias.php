<?php
session_start();
function getExistencias($articulo,$centros,$sexist){
set_time_limit(0);
$authorization = "Bearer ".$_SESSION["id"];

/* API URL ENDPOINT */
$url = 'https://api.farmazon.mx/v2/products/exist-product-for-callcenter';
$data = '{"no_sap":'.$articulo.',"branches":['.$centros.'],"exist":'.$sexist.'}';
$header = array("Authorization:".$authorization,
   "Content-Type: application/json");

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

   $response = curl_exec($ch);
   $err = curl_error($ch);
   curl_close($ch);

   if ($err) { 
      $return['logged'] = false;
      $return['error'] = "Usuario o Contraseña Incorrectos!";
     return $response;
   } else {  
      //echo $response; 
      return $response;
   }

}
 
?>