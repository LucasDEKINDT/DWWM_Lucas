<?php
require "function.php";

echo "Pensez à un personnage : Melle Rose, le professeur Violet, le Colonel Moutarde,
Le Révérend Olive et Mme Leblanc.";
$nom = array("M"=> "Moutarde" , "R"=> "Rose" , "V" => "Violet" , "O" => "Olive" , "L" => "Leblanc");

$moustache=readline("Votre personnage a-t-il des moustaches ?");
if($moustache==true){
    echo "Réponse : Le personnage auquel vous pensez est Moutarde ";
    
}
else{
    unset($nom["M"]);
}
$lunette=readline( "Votre personnage porte-t-il des lunettes ? ");
if($lunette==false){
    echo "Réponse : Le personnage auquel vous pensez est Rose ";

}
else{
    unset($nom["R"]);
}
$chapeau=readline("Votre personnage porte-t-il un chapeau ?");
 if($chapeau==true){
    echo "Réponse : Le personnage auquel vous pensez est Violet ";

 }
 else{
    unset($nom["V"]);
}
$homme=readline("Est-ce que votre personnage est un homme ?");
if($homme==true){
    echo "Réponse : Le personnage auquel vous pensez est Olive ";

 }
 else{
    echo "Réponse : Le personnage auquel vous pensez est Leblanc ";
 }