<?php

class Livre{

    private $titre;
    private $auteur;
    private $annee;

    public function __construct($titre,$auteur,$annee){
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->annee = $annee;
       
    }



    //Les setters permettent de faire des modifications
    public function setTitre($titre){
        $this->titre = $titre;
    }

    public function setAuteur($auteur){
        $this->auteur = $auteur;
    }

    public function setAnnee($annee){
        $this->annee = $annee;
    }
    //Les getter permettent de modifier les attributs private et protected
    public function getTitre(){return $this->titre;}
    public function getAuteur(){return $this->auteur;}
    public function getAnnee(){return $this->annee;}







        //Affichage
        public function affichage(){
            echo $this->titre. ' - ' . $this->auteur. ' - ' . $this->annee;
        }

}

 ?>