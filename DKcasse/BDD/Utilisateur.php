<?php

class Utilisateur{

    private $Idutilisateur;

    private bool $Admin=true ;

    private $Nomutilisateur;

    private $Prenomutilisateur;

    private $Emailutilisateur;

    private $Motdepasse;

// public function __construct($Idutilisateur,$Admin,$Nomutilisateur,$Prenomutilisateur,$Emailutilisateur,$Motdepasse){
//     $this->Idutilisateur = $Idutilisateur;
//     $this->Admin = $Admin;
//     $this->Nomutilisateur = $Nomutilisateur;
//     $this->Prenomutilisateur = $Prenomutilisateur;
//     $this->Emailutilisateur = $Emailutilisateur;
//     $this->Motdepasse = $Motdepasse;
// }

	
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
	
	public function affichageutilisateur(){
		
		echo " L'id de l'utilisateur est : ".$this->Idutilisateur. " l'utilisateur est t-il admin ? : ".$this->Admin. " le nom de l'utilisateur est : ".$this->Nomutilisateur. " le prenom de l'utilisateur est : ".$this->Prenomutilisateur. " l'email de l'utilisateur est : ".$this->Emailutilisateur. " son mdp est : ".$this->Motdepasse;
	}
}