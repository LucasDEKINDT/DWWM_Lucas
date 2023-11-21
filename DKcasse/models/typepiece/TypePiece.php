<?php

class Typepiece{
    
    private $idtypepiece;

    private $referencepiece;

	private $idCategorie;

    public function __construct($idtypepiece,$referencepiece,$idCategorie){
        $this->idtypepiece = $idtypepiece;
        $this->referencepiece = $referencepiece;
		$this->idCategorie = $idCategorie;
    }

	
	public function getIdtypepiece() {
		return $this->idtypepiece;
	}
	
	
	public function setIdtypepiece($idtypepiece){
		$this->idtypepiece = $idtypepiece;
		
	}

	
	public function getReferencepiece() {
		return $this->referencepiece;
	}
	
	
	public function setReferencepiece($referencepiece){
		$this->referencepiece = $referencepiece;
		
	}

	
	public function getIdCategorie() {
		return $this->idCategorie;
	}
	
	
	public function setIdCategorie($idCategorie){
		$this->idCategorie = $idCategorie;
		
	}
	// public function __construct(array $options = [])
    // {
    //     if (!empty($options)) // empty : renvoi vrai si le tableau est vide
    //     {
    //         $this->hydrate($options);
    //     }
    // }

	// public function hydrate($data)
    // {
    //     foreach ($data as $key => $value)
    //     {
    //         $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
    //         if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
    //         {
    //             $this->$methode($value);
    //         }
    //     }
    // }
	
}