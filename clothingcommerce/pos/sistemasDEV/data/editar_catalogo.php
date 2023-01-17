<?php 
require_once('../class/Catalogos.php');
$data = json_decode($_POST['arrArticulo'], true);

if(isset($data)){
    $id_prod = $data["id_prod"];
	$clave_prod = $data["clave_prod"]; 
	$modelo = $data["modelo"];
	$marca = $data["marca"];
	$talla = $data["talla"];
	$color = $data["color"];
	$precio = $data["precio"];
	$descripcion = $data["descripcion"];
	$activo = $data["activo"];
	$usuario = $data["usuario"];
	$des2 = $data["extra"];
	
	$saveEdit = $item->edit_item($id_prod, $clave_prod, $modelo, $marca,$talla,$color,$precio,$descripcion,$activo,$usuario,$des2);
	if($saveEdit){
		$return['valid'] = true;
		$return['msg'] = "¡El registro se modifico correctamente!";
	}else{
	    $return['valid'] = false;
	    $return['msg'] = "¡El registro se se modifico(1)!";
	}
}else{
    $return['valid'] = false;
	    $return['msg'] = "¡El registro se se modifico(0)!";
}
echo json_encode($return);
 ?>
 

<?php 
$item->Disconnect();
 ?>