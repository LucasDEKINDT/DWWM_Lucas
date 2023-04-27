<?php

echo "                 ********************                   \n";
echo "                 CALCUL SUR LE CERCLE                   \n";
echo "                 ********************                   \n \n";                 
$circonference=0;
$surface=0;
$rayon=readline("Quel est le rayon du cercle : ");
$circonference=2*3.14*$rayon;
$surface=3.14*($rayon*$rayon);
echo "Sa circonférence est de : ".$circonference ."\n";
echo "Sa surface est          : ".number_format($surface, 2, ',', ' ') . "\n". "\n";  //cette fonction permet d'arrondir a 2 chiffres aprés la virgule ;
$choix=readline("Voulez-vous faire un autre calcul (O/N) : ");
while($choix=="O"){
    if($choix="O"){
    $circonference=0;
    $surface=0;
    echo "\n";
    $rayon=readline(" Quel est le rayon du cercle : ");
    $circonference=2*3.14*$rayon;
    $surface=3.14*($rayon*$rayon);
    echo "Sa circonférence est de : ".$circonference ."\n";
    echo "Sa surface est          : ".number_format($surface, 2, ',', ' ') . "\n" . "\n"; 
    $choix=readline("Voulez-vous faire un autre calcul (O/N) : ");
    echo "\n";
}
    
    
}
    echo "Au revoir et à bientôt";
    exit; // pour quitter la boucle si le choix =N;

