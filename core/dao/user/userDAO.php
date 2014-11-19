<?php
require_once('core/dao/conection.php');
require_once('core/helpers/helper.php');

class userDAO {
	var $conection;
	var $mysqli;
	var $helper;
	
	function __construct() {
		$this->conection = new Conection();
		$this->helper = new helper();
		$this->mysqli = $this->conection->conect();
	}

	public function checkMail($mail){
		$response = false;
		$sql = "SELECT email
				FROM  zenshikai
				WHERE email = '$mail'  
				LIMIT 1";
		$u = $this->mysqli->query($sql);
		if($u){
			if($u->num_rows > 0){
				$response = true;
			}
		}
		
		return $response;
	}
}

?>