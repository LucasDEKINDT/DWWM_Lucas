<?php
require_once "absAnimal.php";

class Lapin extends Animal implements Ideplacement{

    private bool  $envie =true ;

    public function __construct($color, $nbrpatte,$envie){
        parent::__construct($color,$nbrpatte);
        $this->envie= $envie;
    }
    

	
	public function getEnvie() {
		return $this->envie;
	}
	
	
	public function setEnvie($envie){
		$this->envie = $envie;
		
	}

    public function glapie(){
        echo "Le lapin glapie de peur  ". "<br>";
    }
    public function fuir(){
       echo "le lapin prend le fuite ". "<br>";
    }

    public function getCrier(){
        echo "le lapin cri ". "<br>";
    }
    public function cedeplacer(){
        echo "le lapin ce deplace ". "<br>";
    }

   public function affichagelapin(){
    echo "Le lapin ". $this->color . " à " . $this->nbrpatte . " a été créer ". "<br>" ;
   }
}