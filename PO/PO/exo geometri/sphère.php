<?php

class Sphere extends Diametre{
 
    const PI = 3.14;
    
    public function __construct($rayon){
        parent::__construct($rayon);
    }

    public function airesp(){
        $airesp = (4*self::PI)*(2*$this->rayon);
        echo "L'aire de la sphère est : ". $airesp . " m²";
    }
    public function volumesp(){
        $volumesp = (4/3 * self::PI)*pow($this->rayon,3);
        echo "le volume de la sphère est : ".$volumesp . " m³" ;
    }
}