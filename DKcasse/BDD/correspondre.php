<?php

class Correspondre{

    private $idpieces;

    private $idmodele;

    public function __construct($idpieces,$idmodele){
        $this->idpieces = $idpieces;
        $this->idmodele = $idmodele;
    }

	
	public function getIdpieces() {
		return $this->idpieces;
	}
	
	
	public function setIdpieces($idpieces){
		$this->idpieces = $idpieces;
		
	}

	
	public function getIdmodele() {
		return $this->idmodele;
	}
	
	
	public function setIdmodele($idmodele){
		$this->idmodele = $idmodele;
		
	}
}