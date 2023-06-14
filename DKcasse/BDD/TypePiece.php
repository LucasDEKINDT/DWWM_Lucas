<?php

class Typepiece{
    
    private $idtypepiece;

    private $referencepiece;

	private $idCategorie;

    public function __construct($idtypepiece,$referencepiece,$idCategorie){
        $this->idtypepiece = $idtypepiece;
        $this->referencepiece = $referencepiece;
		$this->idCategorie = $idCategorie;
    }

	
	public function getIdtypepiece() {
		return $this->idtypepiece;
	}
	
	
	public function setIdtypepiece($idtypepiece){
		$this->idtypepiece = $idtypepiece;
		
	}

	
	public function getReferencepiece() {
		return $this->referencepiece;
	}
	
	
	public function setReferencepiece($referencepiece){
		$this->referencepiece = $referencepiece;
		
	}

	
	public function getIdCategorie() {
		return $this->idCategorie;
	}
	
	
	public function setIdCategorie($idCategorie){
		$this->idCategorie = $idCategorie;
		
	}
}