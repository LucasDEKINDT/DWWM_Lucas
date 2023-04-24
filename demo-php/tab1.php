<?php
$positif=0;
$negatif=0;
$nb=readline("entrez le nombre de valeurs :");
$notes=[];
 for($i=0;$i<$nb;$i++){ 
    $saisie = readline("nombre : ");
    $notes[$i] = $saisie;
    if($notes[$i]>0){
        $positif++;
    }
    elseif($notes[$i]<0){
        $negatif++;

    }
}
echo "le nombre de valeur positif est : ". $positif . "\,n" ;
echo "le nombre de valeur negatif est : ". $negatif ;