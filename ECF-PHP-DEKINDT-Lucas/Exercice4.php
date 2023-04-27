<?php
echo"          ******Tableau périodique des éléments chimiques****** \n";

$element = array(" H" =>"Hydrogène", " He"=>"Hélium", " P"=>"Phosphore", " V"=>"Vanadium"," Pb"=>"Plomb", " I"=>"Iode"," Kr"=> "Krypton", " X"=>"Xénon"," Rn"=>"Radon"," Zr"=>"Zirconium");
foreach ($element as $key => $valeur){
    echo $key. " : ".$valeur. "\n";
    echo "\n";
}
echo "****************************"."\n";
echo "Tableau trié : \n";
$element = array(" H" =>"Hydrogène", " He"=>"Hélium", " P"=>"Phosphore", " V"=>"Vanadium"," Pb"=>"Plomb", " I"=>"Iode"," Kr"=> "Krypton", " X"=>"Xénon"," Rn"=>"Radon"," Zr"=>"Zirconium");
asort($element);
foreach ($element as $key => $valeur){
    echo $key. " : ".$valeur. "\n";
}

   
    

