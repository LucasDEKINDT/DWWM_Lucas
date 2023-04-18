<?php
$a = readline("a");
$b = readline("b");
function PGCD($a,$b){
     
     
      
      while ($b > 0) {
       
      $r = $a % $b; 
      $a = $b; 
      $b = $r; 
       
      
    }
    return $a; }

    $pgcd= PGCD($a,$b);
    $ppcm =($a*$b)/$pgcd;
    echo $pgcd;
    echo $ppcm;
?>
