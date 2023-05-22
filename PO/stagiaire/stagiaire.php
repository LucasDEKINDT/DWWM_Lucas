<?php

class Stagiaire{

    private $nom ;
    private $notes=[];

    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setNotes($notes){
        $this->notes = $notes;
    }
    public function getNom(){return $this->nom;}
    public function getNotes(){return $this->notes;}

    public function __construct($nom,$notes){
        $this->nom = $nom;
        $this->notes = $notes;
    }

public function calculerMoyenne(){
   $total=0;
   foreach($this->notes as $notes){
    $total += $notes;
   }

   return round($total /count($this->notes));
    
}
public function trouverMax(){
    return max($this->notes);
}
public function trouverMin(){
    return min($this->notes);
}
public function affichage(){
    echo "Moyenne :". $this->calculerMoyenne();
    echo "<br>";
    echo "Max :". $this->trouverMax();
    echo "<br>";
    echo "Min :". $this->trouverMin();

}

}