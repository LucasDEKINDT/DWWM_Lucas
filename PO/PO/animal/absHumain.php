<?php
require_once "ideplacement.php";
abstract class Humain{

    protected $nom;

    public function __construct($nom){
        $this->nom = $nom;
    }

	
	public function getNom() {
		return $this->nom;
	}
	
	
	public function setNom($nom){
		$this->nom = $nom;
		
	}

}