<?php
$nombre = readline("Entrez un nombre .");
$nb2 = readline("Entrez un deuxieme nombre .");
if(($nombre > 0 and $nb2 > 0 ) or ($nombre < 0 and $nb2 <0)){
    echo "positif";
}
elseif($nombre == 0 || $nb2 == 0){
    echo "nul";
}
else{
    echo "negatif";
}
