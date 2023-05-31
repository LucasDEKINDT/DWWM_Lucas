<?php
require_once "lapin.php";
require_once "chasseur.php";
require_once "absHumain.php";
require_once "absAnimal.php";
$lapin = new Lapin("blanc",4,true);

$chasseur = new Chasseur("Paul","Fusil");

$lapin->affichagelapin();

$chasseur->affichagechasseur();

while($lapin->getEnvie()===true){
    $chasseur->cedeplacer();
    echo "<br>";
    $lapin->glapie();

    $chasseur->chasser();

    $n= rand(1,6);
    if(($n===1)or($n===6)){
        echo  "<br>";
       echo "  Le pauvre petit lapin blanc est malheureusement mort";
       $lapin->getEnvie() ===false;
       return ;
       
    }
    else{
        echo " (tire-louper)  ";
        echo  "<br>";
        $lapin->cedeplacer();
        echo  "<br>";
        $lapin->fuir();
    }
}