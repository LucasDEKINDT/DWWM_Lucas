<?php
$chomage = array(" Autriche" =>4.9, " Allemagne"=>9.3, " Danemark"=>4.8, " Espagne"=>9.4," France"=>9.7);
foreach ($chomage as $pays => $valeur){
    echo "chomage du pays".$pays. ":".$valeur. "%". "\n";
}
foreach ($chomage as $pays => $valeur){
    if($valeur<5){
        echo " Pays avec moins de 5% de chômage 
        
        
        :" . $pays ."\n";
    }
}
foreach ($chomage as $pays => $valeur){
    $minimum=min($chomage);
    if($valeur==$minimum){
        echo " Le pays ayant le taux de chômage le plus faible est :". $pays ."\n";
    }
}


    // $minimum=min($chomage);
    //                 echo " Le pays ayant le taux de chômage le plus faible est : ".$minimum;

