<?php 
function readTable($con){
    
    $con=0;
    foreach ($_SESSION as $keys => $valeur){

        echo " à la ligne n°".$con ." correspond la clé ". $keys . " et contient ".$valeur . "<br>";
        $con++;
    }
    return $con;
}