<?php

class Marque{

    private $IdMarque;

    private $NomMarque;

	private $IdModele;

    // public function __construct($IdMarque,$NomMarque,$IdModele){
    //     $this->IdMarque = $IdMarque;
    //     $this->NomMarque = $NomMarque;
	// 	$this->IdModele = $IdModele;
    // }

	
	public function getIdMarque() {
		return $this->IdMarque;
	}
	
	
	public function setIdMarque($IdMarque){
		$this->IdMarque = $IdMarque;
		
	}

	
	public function getNomMarque() {
		return $this->NomMarque;
	}
	
	
	public function setNomMarque($NomMarque){
		$this->NomMarque = $NomMarque;
		
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
	public function affichagemarque(){
		echo " L'id de la marque est : ".$this->IdMarque. " son nom est : ".$this->NomMarque. "son id modele est : ".$this->IdModele;
	}
}