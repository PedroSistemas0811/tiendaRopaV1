<?php
 $return['logged'] = true;
         $return['url'] = "inicio.php"; 
   session_start();
//getTokenFZN("callcenter_userFD@farmazon.com","callcenter");
if (isset($_POST['un'])) {
   
   $usuario = $_POST['un'];
   $clave = $_POST['up'];
$curl = curl_init();
$pruebas="email=".$usuario."&password=".$clave."";
   curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.farmazon.mx/v2/user/loginV2",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => $pruebas,
      CURLOPT_HTTPHEADER => array(
         "cache-control: no-cache",
         "content-type: application/x-www-form-urlencoded"
      ),
   ));

   $response = curl_exec($curl);
   $err = curl_error($curl);
   curl_close($curl);
   if ($err) {
      $return['logged'] = false;
      $return['msg'] = "Usuario o contraseña incorrectos, valida tu información!";
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

         $return['msg'] = "Usuario o contraseña incorrectos, valida tu información!";
      }       
   }
}else{
      $return['logged'] = false;
      $return['msg'] = "Usuario o contraseña incorrectos, valida tu información!";
}
echo json_encode($return);
?>

