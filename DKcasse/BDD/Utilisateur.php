<?php

class Utilisateur{

    private $Idutilisateur;

    private bool $Admin=true ;

    private $Nomutilisateur;

    private $Prenomutilisateur;

    private $Emailutilisateur;

    private $Motdepasse;

public function __construct($Idutilisateur,$Admin,$Nomutilisateur,$Prenomutilisateur,$Emailutilisateur,$Motdepasse){
    $this->Idutilisateur = $Idutilisateur;
    $this->Admin = $Admin;
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


	public function getAdmin(): bool {
		return $this->Admin;
	}
	

	public function setAdmin(bool $Admin){
		$this->Admin = $Admin;
		
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
}