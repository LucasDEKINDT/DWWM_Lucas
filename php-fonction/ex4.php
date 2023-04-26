<?php
require "function.php";

echo "Pensez à un personnage : Melle Rose, le professeur Violet, le Colonel Moutarde,
Le Révérend Olive et Mme Leblanc." . "\n";
$nom = array("M"=> "Moutarde" , "R"=> "Rose" , "V" => "Violet" , "O" => "Olive" , "L" => "Leblanc");

$moustache=readline("Votre personnage a-t-il des moustaches ?");
switch($moustache){
    case("true"):
    echo "Réponse : Le personnage auquel vous pensez est Moutarde ";
    exit;
    break;

case("false"):
    
    
    break;
}

$lunette=readline( "Votre personnage porte-t-il des lunettes ? ");
switch($lunette){
    case("false"):
    echo "Réponse : Le personnage auquel vous pensez est Rose ";
    exit;
    break;


    case("true"):
    
    break;
}
$chapeau=readline("Votre personnage porte-t-il un chapeau ?");
switch($chapeau){
    case("true"):
    echo "Réponse : Le personnage auquel vous pensez est Violet ";
    exit;
    break;

 case("false"):
    
    break;
}
$homme=readline("Est-ce que votre personnage est un homme ?");
switch($homme){
    case("true"):
    echo "Réponse : Le personnage auquel vous pensez est Olive ";
    exit;
    break;

 case("false"):
    echo "Réponse : Le personnage auquel vous pensez est Leblanc ";
    break;
 }