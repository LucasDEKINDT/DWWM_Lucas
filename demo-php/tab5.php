<?php
$sup=0;
$somme=0;
$nb=readline("entrez le nombre de valeurs :");
$notes=[];
for($i=0;$i<$nb;$i++){ 
    $saisie = readline("nombre : ");
    $notes[$i] = $saisie;
    $somme=$somme+ $notes[$i];
    
}
$moyenne=$somme/$nb;
for($i=0;$i<$nb;$i++){
if($notes[$i]>$moyenne){
$sup++;
}}
echo  "le nombre de note au dessus de la moyenne est de : ". $sup ;
