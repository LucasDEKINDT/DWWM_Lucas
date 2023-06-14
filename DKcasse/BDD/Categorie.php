<?php

class Categorie{
    
    private $IdCategorie;

    private $NomCategorie;

    public function __construct($IdCategorie,$NomCategorie){
        $this->IdCategorie = $IdCategorie;
        $this->NomCategorie = $NomCategorie;
    }

	
	public function getIdCategorie() {
		return $this->IdCategorie;
	}
	
	
	public function setIdCategorie($IdCategorie){
		$this->IdCategorie = $IdCategorie;
		
	}

	
	public function getNomCategorie() {
		return $this->NomCategorie;
	}
	
	
	public function setNomCategorie($NomCategorie){
		$this->NomCategorie = $NomCategorie;
		
	}
}