<?php

class Typepiece{
    
    private $idtypepiece;

    private $referencepiece;

    public function __construct($idtypepiece,$referencepiece){
        $this->idtypepiece = $idtypepiece;
        $this->referencepiece = $referencepiece;
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
}