<?php
$pg=0;
$nb=readline("entrez le nombre de valeurs :");
$notes=[];
for($i=0;$i<$nb;$i++){
    $notes[$i] = readline("entrez un nombre :");
    if($i==1 || $notes[$i]>$notes[$pg]){
        $pg=$i;
    }
    
}
echo "le nombre le plus grand etait :" . $notes[$pg] ."\n" ;
echo "le nombre est dans la case  :" .$pg ."\n" ;
