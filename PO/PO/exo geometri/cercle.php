<?php

class Diametre{

    protected $rayon;

    const PI = 3.14;

    public function __construct($rayon){
        $this->rayon= $rayon ;
    }

	
	public function getDiametre() {
		return $this->rayon;
	}
	
	
	public function setDiametre($rayon){
		$this->rayon = $rayon;
		
	}
    public function diametre(){
        $diametre=0;
         $diametre=2*$this->rayon;
         echo "le diametre est : ".$diametre." m";
    }

    public function perimetrecercle(){
        $perimetrecercle=0;
        $perimetrecercle= 2*self::PI*$this->rayon;
        echo "le perimetre : ". $perimetrecercle." m";
    }
    public function aireceercle(){
        $aire=0;
         $aire = self::PI * pow($this->rayon,2);
         echo "l'aire est : ".$aire." m²";

    }

}