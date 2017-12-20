<?php
/**
 * Created by PhpStorm.
 * User: PAMODY
 * Date: 30/03/2016
 * Time: 09:54
 */
require_once 'Personne.php';
class User extends Personne {
	private $id;
	private $login;
	private $password;

	public function __construct($id=0,$nom="",$prenom="",$login="",$password=""){
		parent::__construct($nom,$prenom);
		$this->id=$id;
		$this->login=$login;
		$this->password=$password;
	}
	public function getId(){
		return $this->id;
	}
	public function getLogin(){
		return $this->login;
	}
	public function getPassword(){
		return $this->password;
	}

	public function setId($id){
		$this->id=$id;
	}
	public function setLogin($login){
		$this->login=$login;
	}
	public function setPassword($password){
		$this->password=$password;
	}
}