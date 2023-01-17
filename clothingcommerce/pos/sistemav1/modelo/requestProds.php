<?php
//getTokenFZN("callcenter_userFD@farmazon.com","callcenter");
session_start();
function getArticulos($sku,$descip,$barcode){

$pruebas="no_sap=".$sku."&descrip=".$descip."&barcode=".$barcode."";
$data = '{"no_sap":"'.$sku.'","descrip":"'.$descip.'","barcode":"'.$barcode.'"}';
$authorization = "Bearer ".$_SESSION["id"];
set_time_limit(0);

$url = 'https://api.farmazon.mx/v2/products/find-product-for-callcenter';
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
      $return['error'] = "Usuario o Contraseña Incorrectos!1";
     return $response;
   } else {   
      return $response;
   }




}
 
?>