<?php
require_once "ideplacement.php";

abstract class Animal{
    protected $color;

    protected $nbrpatte;

    public function __construct($color,$nbrpatte){
        $this->color= $color;
        $this->nbrpatte= $nbrpatte;

    }
    

	
	public function getColor() {
		return $this->color;
	}
	

	public function setColor($color){
		$this->color = $color;
		
	}


	public function getNbrpatte() {
		return $this->nbrpatte;
	}

	public function setNbrpatte($nbrpatte){
		$this->nbrpatte = $nbrpatte;
		
	}

     abstract public function getCrier();
}