<?php
$tabnotes=array("prenot"=>array(2,10,14),"perthuis"=>array(10,18,12),"boutte"=>array(19,17,13),"bourde"=>array(5,10,8));
foreach($tabnotes as $nom =>$notes){
    echo " nom d'eleve : ". $nom ."\n";
    foreach($notes as $key => $note){
        echo " - : ".$notes[$key]. "\n";
    }

}