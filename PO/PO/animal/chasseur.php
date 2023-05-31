<?php
require_once "absHumain.php";

class Chasseur extends Humain implements Ideplacement{
    private $arme;


    public function __construct($nom,$arme){
        parent::__construct($nom);
        $this->arme= $arme;
    }

	
	public function getArme() {
		return $this->arme;
	}
	

	public function setArme($arme){
		$this->arme = $arme;
		
	}
  

    public function chasser(){
        echo $this->getNom() ." chasse le lapin";
    }
    public function cedeplacer(){
        echo $this->getNom() ." ce deplace";
    }
    public function affichagechasseur(){
        echo "Le chasseur ". $this->getNom() . " à été crée avec un ". $this->getArme() . "<br>";
    }
}