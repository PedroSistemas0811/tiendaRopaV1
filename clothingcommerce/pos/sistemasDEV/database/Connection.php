<?php 
class Connection{

	protected $isConn;
	protected $datab;
	protected $transaction;
	
	public function __construct($username="u840847894_ropauser", $password ="Ropasñ123$", $host="localhost", $dbname="u840847894_commerceropa", $options = []){
		
		$this->isConn = TRUE;
		try{
			$this->datab = new PDO("mysql:host={$host};  dbname={$dbname}; charset=utf8", $username, $password, $options);
			$this->datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->transaction = $this->datab;
			$this->datab->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

		}catch(PDOException $e){
		    echo $e->getMessage();
			throw new Exception($e->getMessage());			
		}

	}
	public function Disconnect(){
		$this->datab = NULL;//close connection in PDO
		$this->isConn = FALSE;
	}//endDisconnectFunction


	


}//endClassDatabase

 //$con = new Connection(); //for debugging only
 //echo '	debug connection'+$con;
 ?>