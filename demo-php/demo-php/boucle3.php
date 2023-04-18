<?php
$saisie = readline("chiffre");
while($saisie <10 || $saisie >20){
    if($saisie <10){
        echo "Plus grand";
        $saisie = readline("chiffre");

    }
    elseif($saisie >20){
        echo "Plus petit";
        $saisie = readline("chiffre");
    }
}