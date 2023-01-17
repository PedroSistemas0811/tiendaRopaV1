<?php

   $usuario = "callcenter_user@farmazon.com";
   $clave = "callcenter";

$url = 'https://api.farmazon.mx/v2/user/loginV2';
$data = '{"email":"'.$usuario.'","password":"'.$clave.'"}';
$header = array("Content-Type: application/json");
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

   echo $response = curl_exec($ch);
   echo $err = curl_error($ch);
   curl_close($ch);
   if ($err) {
      $return['logged'] = false;
      $return['msg'] = "Usuario o Contraseña Incorrectos!1";
     return $err;
   } else {
      $jsonD = (Array)json_decode($response, true);                           
      if(isset($jsonD["result"])){         
         $token1 = $jsonD["result"];
         $token =$token1["token"]; 
         $usuario=$token1["user"];
         $usuariof=$usuario["email"];
         $return['logged'] = true;
         $return['url'] = "inicio.php"; 
         $_SESSION["id"] = $token;
         $_SESSION["name"] = $usuariof;      
     
      }  else{
         $token="NoFOUND";
         $return['logged'] = false;

         $return['msg'] = "Usuario o Contraseña Incorrectos!2";
      }       
   }
echo json_encode($return);
?>

