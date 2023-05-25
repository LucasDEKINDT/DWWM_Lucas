<?php
class Pyramide extends Triangle{

    public function __construct($base,$hauteur){
        parent::__construct($base,$hauteur);
}
public function airp(){
$facela=0;
$facela=(1/2)*$this->base*$this->hauteur;
$airetriangle=($this->base*$this->hauteur)/2;
$perip=$facela+$airetriangle;
echo "le volume de la pyramide est : " . $perip . "m²";
}

public function volumep(){
    $volumep=(1/3)*($this->base*$this->hauteur);
    echo "Le volume de la pyramide est : ". $volumep . " m³";
}
}