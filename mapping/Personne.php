<?php
/**
 * Created by PhpStorm.
 * User: PAMODY
 * Date: 30/03/2016
 * Time: 09:54
 */

abstract class Personne {
    private $nom;
    private $prenom;

    public function __construct($nom="",$prenom=""){
    	$this->nom=$nom;
    	$this->prenom=$prenom;
    }
    public function getNom(){
    	return $this->nom;
    }
    public function getPrenom(){
    	return $this->prenom;
    }

    public function setNom($nom)
    {
    	$this->nom=$nom;
    }
    public function setPrenom($prenom)
    {
    	$this->prenom=$prenom;
    }
}

?>