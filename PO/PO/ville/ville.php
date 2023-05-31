<?php

class Ville{

    private $ville ;
    private $departement;

    public function __construct($ville,$departement){
        $this->ville = $ville;
        $this->departement = $departement;
    }
    public function setVille($ville){
        $this->ville = $ville;
    }
    public function setDepartement($departement){
        $this->departement = $departement;
    }
    public function getVille(){return $this->ville;}
    public function getDepartement(){return $this->departement;}

public function affichage(){
    echo "La ville de : ". $this->ville . " Est dans le : ". $this->departement;
    echo "<br>";
}
    
}
class personne
{
private $nom;
private $prénom;
private $adresse;

public function __construct($nom,$prénom,$adresse)
{
$this->nom=$nom;
$this->prénom=$prénom;
$this->adresse=$adresse;
}
public function setAdresse($adresse)
{
$this->adresse=$adresse;
}
public function getAdresse(){return $this->adresse;}
public function __destruct()
{
echo  $this->prénom . $this->nom.' est supprimée de vos contacts';
}

public function getpersonne()
{
$texte=" $this->prénom $this->nom <br /> $this->adresse <br />";
return $texte;
}
//


}
