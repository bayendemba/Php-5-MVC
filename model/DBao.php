<?php
class DBao{
	private $db;
	public function __construct() {

	}
	public function getConnexion(){
		$dns="mysql:host=localhost;dbname=mvc";
		$user="root";
		$password="";
		try{
			$this->db=new PDO($dns,$user,$password); 
		}
		catch(PDOException $ex){
			die($ex->getMessage());
		}
		return $this->db;
	}
	public function executeMAJ($sql){
		$instance = new DBao();
		$conn = $instance->getConnexion();
		return $conn->exec($sql);
	}
	public function executeSelect($sql){
		$instance = new DBao();
		$conn = $instance->getConnexion();
		return $conn->query($sql);
	}
}
?>