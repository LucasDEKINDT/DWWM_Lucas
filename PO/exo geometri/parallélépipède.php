<?php
class Para extends Rectangle{
 
    private $hauteur;
    
    public function __construct($longueur,$largeur,$hauteur){
        parent::__construct($longueur,$largeur);
        $this->hauteur= $hauteur;
}
public function getHauteur() {
    return $this->hauteur;
}


public function setLongueur($hauteur){
    $this->hauteur = $hauteur;
    
}

public function airepara(){
    $airepara=2*(($this->longueur*$this->largeur)+($this->longueur*$this->hauteur)+($this->largeur*$this->hauteur));
    echo "l'aire du parallélépipède est : ". $airepara . " m²";
}
    
public function volumepara(){
    $volumepara= $this->longueur * $this->largeur * $this->hauteur ;
    echo "le volume du parallélépipède est : ". $volumepara. " m³";

}

}