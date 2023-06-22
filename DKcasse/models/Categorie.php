<?php

class Categorie{
    
    private $IdCategorie;

    private $NomCategorie;

    public function __construct($IdCategorie,$NomCategorie){
        $this->IdCategorie = $IdCategorie;
        $this->NomCategorie = $NomCategorie;
    }

	
	public function getIdCategorie() {
		return $this->IdCategorie;
	}
	
	
	public function setIdCategorie($IdCategorie){
		$this->IdCategorie = $IdCategorie;
		
	}

	
	public function getNomCategorie() {
		return $this->NomCategorie;
	}
	
	
	public function setNomCategorie($NomCategorie){
		$this->NomCategorie = $NomCategorie;
		
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
	public function affichagecategorie(){
		echo "l'id de la categorie est : ".$this->IdCategorie." son nom est : " .$this->NomCategorie;
	}
}