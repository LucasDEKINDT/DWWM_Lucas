<?php

class Modele{
    
    private $idmodele;

    private $nommodele;

    private $annee;

    public function __construct($idmodele,$nommodele,$annee){
        $this->idmodele = $idmodele;
        $this->nommodele = $nommodele;
        $this->annee = $annee;
    }

	
	public function getIdmodele() {
		return $this->idmodele;
	}
	
	
	public function setIdmodele($idmodele){
		$this->idmodele = $idmodele;
		
	}

	
	public function getNommodele() {
		return $this->nommodele;
	}
	
	
	public function setNommodele($nommodele){
		$this->nommodele = $nommodele;
		
	}
    public function getAnnee() {
		return $this->annee;
	}
	
	
	public function setAnnee($annee){
		$this->annee = $annee;
		
	}
    
}