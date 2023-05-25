<?php
class Zombie extends Personnage{
    private  $vitesse;
    private $force;
    public function __construct($nom,$classe,$attaque,$pv,$forceDuBien,$vitesse,$force){
		parent::__construct($nom,$classe,$attaque,$pv,$forceDuBien);
		$this->vitesse = $vitesse;
		$this->force = $force;

    }


	public function getVitesse() {
		return $this->vitesse;
	}
	

	public function setVitesse($vitesse){
		$this->vitesse = $vitesse;
	}

	
	public function getForce() {
		return $this->force;
	}
	
	
	public function setForce($force){
		$this->force = $force;
		
	}
    public function __toString(){

        $txt = "";
        $txt .= parent::__toString();
        $txt .= "vitesse : " . $this->vitesse . "<br>";
        $txt .= "force : " . $this->force . "<br>" ;
        return $txt;  
    }
}