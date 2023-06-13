<?php

class Categorie{
    
    private $idcategorie;

    private $nomcategorie;

    public function __construct($idcategorie,$nomcategorie){
        $this->idcategorie = $idcategorie;
        $this->nomcategorie = $nomcategorie;
    }

	
	public function getIdcategorie() {
		return $this->idcategorie;
	}
	
	
	public function setIdcategorie($idcategorie){
		$this->idcategorie = $idcategorie;
		
	}

	
	public function getNomcategorie() {
		return $this->nomcategorie;
	}
	
	
	public function setNomcategorie($nomcategorie){
		$this->nomcategorie = $nomcategorie;
		
	}
}