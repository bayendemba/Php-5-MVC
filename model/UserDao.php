<?php
/**
 * Created by PhpStorm.
 * User: PAMODY
 * Date: 30/03/2016
 * Time: 09:59
 */
 require_once 'DBao.php';
 require_once '../mapping/User.php';
class UserDao extends DBao{
	public function __construct(){

	}

	public function insererUser(User $us){
		$sql ="insert into user
				values('','".$us->getNom()."',
				'".$us->getPrenom()."',
				'".$us->getLogin()."',
				'".$us->getPassword()."')";
		return $this->executeMAJ($sql);
	}

}
	/*$user =new User(1,'Diop','Cheikh','user','user');
	$udao= new UserDao();
	$udao->insererUser($user);*/

?>