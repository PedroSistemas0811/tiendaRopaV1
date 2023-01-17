<?php
require_once('../database/Database.php');
require_once('../interface/iVentas.php');
class Item extends Database implements iItem {

	public function all_Ventas($fechainicial,$fechafinal)
	{
		$sql = "SELECT * FROM ventas where fecha BETWEEN '$fechainicial' and '$fechafinal'";
		return $this->getRows($sql);
	}//end login_user
	

}//en class Ventas

$item = new Item();

/* End of file User.php */
/* Location: .//D/xampp/htdocs/regis/class/User.php */

