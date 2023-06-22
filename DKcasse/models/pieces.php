<?php

class Piece{
    private $idpiece;

    private $nompiece;

    private $prix;

    private $stock;

	private $idTypePiece;

	public function __construct($idpiece,$nompiece,$prix,$stock,$idTypePiece){
		$this->idpiece = $idpiece;
		$this->nompiece = $nompiece;
		$this->prix = $prix;
		$this->stock = $stock;
		$this->idTypePiece = $idTypePiece; 
	}

	
	public function getIdpiece() {
		return $this->idpiece;
	}
	
	public function setIdpiece($idpiece){
		$this->idpiece = $idpiece;
	}

	
	public function getNompiece() {
		return $this->nompiece;
	}
	
	
	public function setNompiece($nompiece){
		$this->nompiece = $nompiece;
		
	}


	public function getPrix() {
		return $this->prix;
	}
	
	
	public function setPrix($prix){
		$this->prix = $prix;
		
	}

	
	public function getStock() {
		return $this->stock;
	}
	
	
	public function setStock($stock){
		$this->stock = $stock;
		
	}
	

	
	public function getIdTypePiece() {
		return $this->idTypePiece;
	}
	
	
	public function setIdTypePiece($idTypePiece){
		$this->idTypePiece = $idTypePiece;
		
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
