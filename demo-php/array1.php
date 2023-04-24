<?php
$somme=0;
$tabnotes = array("boucher"=>16,"bourdette"=>13,"bourdeau"=>12,"boutte"=>19);
$div=0;
  foreach ($tabnotes as $nom =>$notes ){
    echo " nom de l'eleve : ". $nom . " note : " . $notes . "\n";
    
  }  
  foreach ($tabnotes as $nom =>$notes ){
    $somme=$somme+$notes;
    $div++;

  }
  $moyenne=$somme/$div;
  echo " la moyenne des notes : ".$moyenne;
