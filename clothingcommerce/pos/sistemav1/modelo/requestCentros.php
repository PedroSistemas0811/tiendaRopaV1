<?php
session_start();
function getCentros($centro,$nombre,$ciudad){

$data='{"is_active": true}';
if(!$centro==""){
   $data="";
   $data = '{"is_active":true,"clave":"'.strtoupper($centro).'"}';
}
if(!$nombre==""){
   $data="";
   $data = '{"is_active":true,"nombre":"'.strtoupper($nombre).'"}';
  
}
if(!$ciudad==""){
    $data="";
   $data = '{"is_active":true,"direccion.estado":"'.strtoupper($ciudad).'"}';
}
//echo $data;
  set_time_limit(0);
$authorization = "Bearer ".$_SESSION["id"];
/* API URL ENDPOINT */
$url = 'https://api.farmazon.mx/v2/center/getByFilters';
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
      //echo $response; 
      return $response;
   }



}
 
?>