<?php

$argent=readline("Combien d'euros voulez vous convertire");
$conv=readline("en quelle monnaie (dollars) (dollars canadien) (yen) (peso) (roupie)");
switch($conv){
    case("dollars"):
    $tauxdecharge=1.20 ;
        
        break;
        case("dollars canadien"):
          $tauxdecharge=1.50  ;
            
        break;
        case("yen"):
            $tauxdecharge=130  ;  
            
        break;
        case("peso"):
            $tauxdecharge=24  ; 
            
        break;
        case("roupie"):
            $tauxdecharge=90  ;
            
        break;

}
$somme=$argent*$tauxdecharge;
echo "la somme sera de : " . $somme;