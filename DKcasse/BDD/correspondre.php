<?php

class Correspondre{

    private $IdPieces;

    private $IdModele;

    public function __construct($IdPieces,$IdModele){
        $this->IdPieces = $IdPieces;
        $this->IdModele = $IdModele;
    }

	
	public function getIdPieces() {
		return $this->IdPieces;
	}
	
	
	public function setIdPieces($IdPieces){
		$this->IdPieces = $IdPieces;
		
	}

	
	public function getIdModele() {
		return $this->IdModele;
	}
	
	
	public function setIdModele($IdModele){
		$this->IdModele = $IdModele;
		
	}
}