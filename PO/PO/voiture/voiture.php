<?php

class Voiture{

    private $marque;
    private $modele;
    public $annee;
    public $couleur;
    public $vitesseactuelle =0;

    public function __construct($marque,$modele,$annee,$couleur,$vitesseactuelle){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->couleur = $couleur;
       $this->vitesseactuelle = $vitesseactuelle;

    }

    public function setMarque($marque){
        $this->marque = $marque;
    }
    public function setModele($modele){
        $this->modele = $modele;
    }
    public function setAnnee($annee){
        $this->annee = $annee;
    }
    public function setCouleur($couleur){
        $this->couleur = $couleur;
    }
    public function setVitesseactuelle($vitesseactuelle){
        $this->vitesseactuelle = $vitesseactuelle;
    }

    public function getMarque(){return $this->marque;}
    public function getModele(){return $this->modele;}
    public function getAnnee(){return $this->annee;}
    public function getCouleur(){return $this->couleur;}
    public function getVitesseactuelle(){return $this->vitesseactuelle;}

    public function affichage(){
        echo $this->marque . ' - ' . $this->modele .'(' .$this->annee . ')'. ' - ' . $this->couleur . ' - '.'Vitesse :' . $this->vitesseactuelle . 'km/h';
    }

    public function accelerer($vitesse){

         $vitesse = $vitesse + $this->vitesseactuelle;
         echo $vitesse . 'km/h';

    }
}