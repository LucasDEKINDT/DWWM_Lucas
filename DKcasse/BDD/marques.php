<?php

class Marque{

    private $idmarque;

    private $nommarque;

    public function __construct($idmarque,$nommarque){
        $this->idmarque = $idmarque;
        $this->nommarque = $nommarque;
    }

	
	public function getIdmarque() {
		return $this->idmarque;
	}
	
	
	public function setIdmarque($idmarque){
		$this->idmarque = $idmarque;
		
	}

	
	public function getNommarque() {
		return $this->nommarque;
	}
	
	
	public function setNommarque($nommarque){
		$this->nommarque = $nommarque;
		
	}
}