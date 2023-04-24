<?php
$somme=0;
$nb=readline("entrez le nombre de valeurs :");
$notes=[];
 for($i=0;$i<$nb;$i++){ 
    $saisie = readline("nombre : ");
    $notes[$i] = $saisie;
    $somme=$somme+ $notes[$i];
}
echo "Que voulez-vous faire ?\n";
echo "1. Calculer la somme\n";
echo "2. Trouver le max\n";
echo "3. Trouver le min\n";
echo "Votre choix : ";
$choix = readline("votre choix");
    switch($choix){
        case 1:
            echo "calculer la somme".$somme;
            break;
            case 2:
                $maximum=max($notes);
                echo "calculer le max ".$maximum;
                
                break;
                case 3:
                    $minimum=min($notes);
                    echo "calculer le min ".$minimum;
                    break;
                    default;
                    echo "merci";
                    break;

    }