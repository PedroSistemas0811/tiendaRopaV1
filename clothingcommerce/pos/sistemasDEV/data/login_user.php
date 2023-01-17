<?php 
$return['logged'] = true;
$return['url'] = "inicio.php"; 
session_start();
require_once('../class/User.php');



if(isset($_POST['un'])){
	$un = $_POST['un'];
	$up = $_POST['up'];

	$up = md5($up);
	$result = $user->user_login($un, $up);
	if($result > 0){
		// echo 'succ';
		$return['logged'] = true;
		$return['url'] = "inicio.php";
		$_SESSION['logged_id'] = $result['id_user'];
		$_SESSION['logged_type'] = $result['rol'];
		$_SESSION['logged_username'] = $result['usuario'];
		$_SESSION['logged_name'] = $result['nombres'];
		$_SESSION['uniqid'] = uniqid();
	}else{
		// echo 'fail';
		$return['logged'] = false;
		$return['msg'] = "Valida la información, usuario o contraseña incorrecto!";

	}

	echo json_encode($return);

}//end isset

$user->Disconnect();