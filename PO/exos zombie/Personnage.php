<?php

class Personnage{

    public $nom;
    private $classe;
    protected $attaque;
    protected $pv;
    private $forceDuBien;

    protected function __construct($nom, $classe,$attaque,$pv,$forceDuBien){
        $this->nom = $nom;
        $this->classe = $classe;
        $this->attaque = $attaque;
        $this->pv = $pv;
        $this->forceDuBien = $forceDuBien;
        
    }
    private function calculDegat(){
        return $this->pv / 100 * $this->attaque+1;

    }
    protected function afficherDegat(){
        echo "Dégat infligés : " . $this->calculDegat() . " dégats <br>";
    }
    public function __toString(){

        $txt = "Mon nom est : " . $this->nom . "<br>";
        $txt .= "Ma classe est : " . $this->classe . "<br>";
        $txt .= "J'inflige : " . $this->attaque . "<br>";
        $txt .= "J'ai : " . $this->pv . " pv <br>";
        $txt .= ($this->forceDuBien) ? "Je fais partie des forces du bien " : "Je fais partie des forces du mal";
        $txt .= "<br>";
        return $txt;
        
    }
    


}

?>