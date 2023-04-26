<?php
$nb1=1;
$nb=readline("Saisir un nombre pair et divisible par 3 : ");
while($nb%2 == 1 || $nb%3 !== 0 ){
    switch($nb){
case($nb%2 == 1 && $nb%3 == 0):
    echo "Le nombre n’est pas pair !" . "\n" . "\n";
    $nb1++;
    echo "**********Essai numéro ".$nb1 . " ***********" . "\n" . "\n";
    $nb=readline("Saisir un nombre pair et divisible par 3 : ");
    break;

case($nb%2 !== 1 && $nb%3 !== 0):
    echo "Le nombre n’est pas divisible par 3 ! \n" . "\n";
    $nb1++;
    echo "**********Essai numéro ".$nb1 . " ***********" . "\n" . "\n";
    $nb=readline("Saisir un nombre pair et divisible par 3 : ");
    break;

case($nb%2 == 1 && $nb%3 !== 0):
    echo "Le nombre n’est pas pair !" . "\n" . "\n";
    echo "Le nombre n’est pas divisible par 3 !" . "\n" . "\n";
    $nb1++;
    echo "**********Essai numéro ".$nb1 . " ***********" . "\n" . "\n";
    $nb=readline("Saisir un nombre pair et divisible par 3 : ");
    break;
    
        


}


}
echo "**********************************" . "\n" . "\n";
        echo "Le nombre est ".$nb . " est divisible par 2 et par 3";
