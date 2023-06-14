<?php

class Pieces{
    private $idpieces;

    private $nompiece;

    private $prix;

    private $stock;

	private $idTypePiece;

public function __construct($idpieces,$nompiece,$prix,$stock,$idTypePiece){
    $this->idpieces = $idpieces;
    $this->nompiece = $nompiece;
    $this->prix = $prix;
    $this->stock = $stock;
	$this->idTypePiece = $idTypePiece;
}



	
	public function getIdpieces() {
		return $this->idpieces;
	}
	
	
	public function setIdpieces($idpieces){
		$this->idpieces = $idpieces;
		
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
}




