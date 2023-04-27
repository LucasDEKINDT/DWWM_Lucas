<?php
echo "         ******* Table de Multiplication ******* \n \n";

$n=readline( "Entrer le nombre pour lequel vous voulez la table de multiplication : ");
echo "\n";
for ($i = 1; $i <= 10;$i++){
    echo $n . "x" . $i."=". $n*$i ."\n";
 }
 echo "\n";
 $choix=readline("Voulez-vous continuer ? ");
 echo "\n";
 $n=readline( "Entrer le nombre pour lequel vous voulez la table de multiplication : ");
 echo "\n";
 //creation de boucle
while($choix=="o"){
    
    
    for ($i = 1; $i <= 10;$i++){
        echo $n . "x" . $i."=". $n*$i ."\n";
        
     }
     
     $choix=readline("Voulez-vous continuer ? ");
     echo "\n";
     $n=readline( "Entrer le nombre pour lequel vous voulez la table de multiplication : ");
     echo "\n";

}



