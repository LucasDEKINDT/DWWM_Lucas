<?php


$phrase = readline("Entrez une phrase : ");


$nbVoyelles = 0;


for ($i = 0; $i < strlen($phrase); $i++) {

  
  if (preg_match('/[aeiouyAEIOUY]/', $phrase[$i])) {
   
    $nbVoyelles++;
  }

}


echo "Il y a ".$nbVoyelles." voyelle(s) dans la phrase.";

?>