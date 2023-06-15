<?php

class Correspondre{

    private $IdTypePiece;

    private $IdModele;

    // public function __construct($IdTypePiece,$IdModele){
    //     $this->IdTypePiece = $IdTypePiece;
    //     $this->IdModele = $IdModele;
    // }

	
	public function getIdPieces() {
		return $this->IdTypePiece;
	}
	
	
	public function setIdPieces($IdTypePiece){
		$this->IdTypePiece = $IdTypePiece;
		
	}

	
	public function getIdModele() {
		return $this->IdModele;
	}
	
	
	public function setIdModele($IdModele){
		$this->IdModele = $IdModele;
		
	}
	public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
    }

	public function hydrate($data)
    {
        foreach ($data as $key => $value)
        {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }
	public function affichagecorres(){
		echo " L'id de la piece est : ".$this->IdTypePiece." l'id du modele est : ".$this->IdModele;
	}
}