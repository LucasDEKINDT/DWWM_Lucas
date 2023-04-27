<?php
$tableau = [];
$tableau2 = []; 
$tableau3 = array(); 
//creation de tableau
for($i=0 ;$i<=10;$i++) {
   $tableau[$i] = rand(20, 100);
   $tableau2[$i] = rand(20,100);
   $tableau3[$i]=$tableau[$i]+$tableau2[$i];
   $inverse= array_reverse($tableau3);	
  
   echo "|". $tableau[$i] ."|";
}
echo "\n";
$choix=readline("Choisir 0. Quitter . 1. Trier le tableau en ordre croissant et l’afficher 2. Trier le tableau en ordre décroissant et l’afficher 3. Remplir un troisième tableau en additionnant chaque élément du tableau 1 et 2. 4. Inverser le tableau 3 : ");
while($choix!==0){
switch($choix){
    case(0):
        exit;
        break;
        case(1):
            sort($tableau);
            for($i=0 ;$i<=10;$i++) {	  
                echo "|". $tableau[$i] ."|";
               
            }
            echo "\n";
            echo "\n";
            $choix=readline("Choisir 0. Quitter . 1. Trier le tableau en ordre croissant et l’afficher 2. Trier le tableau en ordre décroissant et l’afficher 3. Remplir un troisième tableau en additionnant chaque élément du tableau 1 et 2. 4. Inverser le tableau 3 : ");
            break;
            case(2):
                rsort($tableau);
                for($i=0 ;$i<=10;$i++) {	  
                    echo "|". $tableau[$i] ."|";
                   
                }
                echo "\n";
                echo "\n";
                $choix=readline("Choisir 0. Quitter . 1. Trier le tableau en ordre croissant et l’afficher 2. Trier le tableau en ordre décroissant et l’afficher 3. Remplir un troisième tableau en additionnant chaque élément du tableau 1 et 2. 4. Inverser le tableau 3 : ");
                break;
                case(3):
                    for($i=0;$i<10;$i++){
                        
                        echo"|". $tableau3[$i] ."|";
                    }
                    echo "\n";
                    echo "\n";
                    $choix=readline("Choisir 0. Quitter . 1. Trier le tableau en ordre croissant et l’afficher 2. Trier le tableau en ordre décroissant et l’afficher 3. Remplir un troisième tableau en additionnant chaque élément du tableau 1 et 2. 4. Inverser le tableau 3 : ");
                    break;
                    case(4):
                        //echo implode permet d'afficher $inverse
                        echo implode( "| ",$inverse  ) ;
                        echo "\n";
                        echo "\n";
                        $choix=readline("Choisir 0. Quitter . 1. Trier le tableau en ordre croissant et l’afficher 2. Trier le tableau en ordre décroissant et l’afficher 3. Remplir un troisième tableau en additionnant chaque élément du tableau 1 et 2. 4. Inverser le tableau 3 : ");
                        return;
                        
                        break;
                    
                        
                        

            
}
}