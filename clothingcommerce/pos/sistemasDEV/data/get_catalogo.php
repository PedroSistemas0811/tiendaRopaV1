<?php 
require_once('../class/Catalogos.php');
if(isset($_POST['claveArticulo'])){
	$claveArticulo = $_POST['claveArticulo'];
	$itemDetails = $item->all_Catalogos2($claveArticulo); 
	if($itemDetails > 0){
		$return['id_prod'] = $itemDetails['id_prod'];
		$return['clave_prod'] = $itemDetails['clave_prod'];
		$return['descripcion'] = $itemDetails['descripcion'];
		$return['modelo'] = $itemDetails['modelo'];
		$return['marca'] = $itemDetails['marca'];
		$return['talla'] = $itemDetails['talla'];
		$return['color'] = $itemDetails['color'];
		$return['precio'] = $itemDetails['precio'];
		$return['encontrado'] = true;
	}else{
	   $return['encontrado'] = false; 
	}
	echo json_encode($return);	
	
}//end isset

$item->Disconnect();