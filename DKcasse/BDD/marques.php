<?php

class Marque{

    private $IdMarque;

    private $NomMarque;

	private $IdModele;

    public function __construct($IdMarque,$NomMarque,$IdModele){
        $this->IdMarque = $IdMarque;
        $this->NomMarque = $NomMarque;
		$this->IdModele = $IdModele;
    }

	
	public function getIdMarque() {
		return $this->IdMarque;
	}
	
	
	public function setIdMarque($IdMarque){
		$this->IdMarque = $IdMarque;
		
	}

	
	public function getNomMarque() {
		return $this->NomMarque;
	}
	
	
	public function setNomMarque($NomMarque){
		$this->NomMarque = $NomMarque;
		
	}

	
	public function getIdModele() {
		return $this->IdModele;
	}
	
	
	public function setIdModele($IdModele){
		$this->IdModele = $IdModele;
		
	}
}