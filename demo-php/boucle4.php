<?php
$saisie = readline("chiffre");
$stop = $saisie+10;
echo "les 10 nombres suivants sont :";
while($saisie < $stop){
    $saisie = $saisie+1;
    echo ($saisie) ."\n";
}