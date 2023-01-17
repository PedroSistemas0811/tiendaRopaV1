<?php 
interface iItem{
	public function all_Catalogos($claveArticulo,$descArticulo);
	public function all_Catalogos1($claveArticulo);
	public function edit_item($id_prod, $clave_prod, $modelo, $marca,$talla,$color,$precio,$descripcion,$activo,$usuario,$des2);
	public function all_Catalogos2($claveArticulo);
}//end iItem