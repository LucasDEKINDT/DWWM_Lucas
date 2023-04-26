<?php
   $tableau = [];
   for($i=0 ;$i<=10;$i++) {
      $tableau[] = rand(0, 50);
      $i++;	  
      echo $tableau[$i];
   }
  
   if(in_array(42, $tableau))
      echo 'Le nombre 42 est bien dans le tableau.';
   else
      echo 'Le tableau ne contient pas la valeur 42.'; 
   
?>