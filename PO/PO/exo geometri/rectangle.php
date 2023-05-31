<?php

class Rectangle{
    protected $longueur;

    protected $largeur;

    public function __construct($longueur,$largeur){
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

	
	public function getLongueur() {
		return $this->longueur;
	}
	
	
	public function setLongueur($longueur){
		$this->longueur = $longueur;
		
	}

	
	public function getLargeur() {
		return $this->largeur;
	}
	
	
	public function setLargeur($largeur){
		$this->largeur = $largeur;
		
	}

    public function affichage(){
        echo "Longueur :".$this->longueur." m";
        echo "<br>";
        echo "Largeur : ".$this->largeur." m";
        echo "<br>";
    }

    public function perimetre(){
        $perimetre=0;
        $perimetre=($this->longueur+$this->largeur)*2;
        echo "le perimetre est : ". $perimetre." m";
    }

    public function airecarre(){
        $aire=0;
        $aire=$this->longueur*$this->largeur;
        echo "l'aire du rectangle est de : ".$aire. "m²";
    }

    public function etrecarre(){
        if($this->longueur==$this->largeur){
           echo "Il s'agit d'un carré";
        }
        else{
            echo "Il s'agit d'un rectangle";
        }
    }
}