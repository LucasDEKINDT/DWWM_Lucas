<?php

class Utilisateur{

    private $Idutilisateur;

    private bool $Grade=true ;

    private $Nomutilisateur;

    private $Prenomutilisateur;

    private $Emailutilisateur;

    private $Motdepasse;

public function __construct($Idutilisateur,$Grade,$Nomutilisateur,$Prenomutilisateur,$Emailutilisateur,$Motdepasse){
    $this->Idutilisateur = $Idutilisateur;
    $this->Grade = $Grade;
    $this->Nomutilisateur = $Nomutilisateur;
    $this->Prenomutilisateur = $Prenomutilisateur;
    $this->Emailutilisateur = $Emailutilisateur;
    $this->Motdepasse = $Motdepasse;
}

	
	public function getIdutilisateur() {
		return $this->Idutilisateur;
	}
	
	
	public function setIdutilisateur($Idutilisateur){
		$this->Idutilisateur = $Idutilisateur;
		
	}


	public function getGrade(): bool {
		return $this->Grade;
	}
	

	public function setGrade(bool $Grade){
		$this->Grade = $Grade;
		
	}

	
	public function getNomutilisateur() {
		return $this->Nomutilisateur;
	}
	
	
	public function setNomutilisateur($Nomutilisateur){
		$this->Nomutilisateur = $Nomutilisateur;
		
	}

	
	public function getPrenomutilisateur() {
		return $this->Prenomutilisateur;
	}
	
	
	public function setPrenomutilisateur($Prenomutilisateur){
		$this->Prenomutilisateur = $Prenomutilisateur;
		
	}

	
	public function getEmailutilisateur() {
		return $this->Emailutilisateur;
	}
	
	
	public function setEmailutilisateur($Emailutilisateur){
		$this->Emailutilisateur = $Emailutilisateur;
		
	}

	
	public function getMotdepasse() {
		return $this->Motdepasse;
	}
	
	
	public function setMotdepasse($Motdepasse){
		$this->Motdepasse = $Motdepasse;
		
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