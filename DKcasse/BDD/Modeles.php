<?php

class Modele{
    
    private $idmodele;

    private $nommodele;

    private $annee;

    // public function __construct($idmodele,$nommodele,$annee){
    //     $this->idmodele = $idmodele;
    //     $this->nommodele = $nommodele;
    //     $this->annee = $annee;
    // }

	
	public function getIdmodele() {
		return $this->idmodele;
	}
	
	
	public function setIdmodele($idmodele){
		$this->idmodele = $idmodele;
		
	}

	
	public function getNommodele() {
		return $this->nommodele;
	}
	
	
	public function setNommodele($nommodele){
		$this->nommodele = $nommodele;
		
	}
    public function getAnnee() {
		return $this->annee;
	}
	
	
	public function setAnnee($annee){
		$this->annee = $annee;
		
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
	public function affichagemodele(){
		echo " l'id du modele est : ".$this->idmodele. " le nom du modele est : ".$this->nommodele. " l'année du modele est : ".$this->annee;
	}
    
}