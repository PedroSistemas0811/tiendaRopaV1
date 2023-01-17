<?php
require_once('../database/Database.php');
require_once('../interface/iCatalogos.php');
class Item extends Database implements iItem {

	public function all_Catalogos($claveArticulo,$descArticulo)
	{
		$sql = "SELECT * FROM catalogo_prods where descripcion LIKE '%$descArticulo%' or clave_prod LIKE '%$claveArticulo%' ";
		return $this->getRows($sql);
	}//end login_user
	
	public function all_Catalogos1($claveArticulo)
	{
		$sql = "SELECT * FROM catalogo_prods where clave_prod = '$claveArticulo' ";
		return $this->getRows($sql);
	}//end login_user
	
	public function all_Catalogos2($claveArticulo)
	{
		$sql = "SELECT * FROM catalogo_prods where clave_prod = ?";
		return $this->getRow($sql,[$claveArticulo]);
	}//end login_user
	
	
	public function edit_item($id_prod, $clave_prod, $modelo, $marca,$talla,$color,$precio,$descripcion,$activo,$usuario,$des2)
	{
		$sql = "UPDATE catalogo_prods 
				SET clave_prod = ?, modelo= ?,marca= ?,talla= ?,color= ?,precio= ?,descripcion= ?, activo= ?, usuario= ?,  extra= ?
				WHERE id_prod = ?";
		return $this->updateRow($sql, [$clave_prod, $modelo, $marca,$talla,$color,$precio,$descripcion,$activo,$usuario,$des2,$id_prod]);
	}//end edit_item

}//en class Ventas

$item = new Item();

/* End of file User.php */
/* Location: .//D/xampp/htdocs/regis/class/User.php */

