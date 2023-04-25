<?php
function pttc($nb,$pht,$ttva){
    $pttc = $nb * $pht * (1 + $ttva);
    echo "Le prix toutes taxes est :" . $pttc;
    return $pttc;
}

function pgcd($a,$b){
     
     
      
    while ($b > 0) {
     
    $r = $a % $b; 
    $a = $b; 
    $b = $r; 
     $pgcd=$a;
    
  }
  
  
  echo " la reponse est : ". $pgcd . "\n";
  
  return $pgcd; }

  function ppcm($a,$b){
    $a1=$a;
    $b1=$b;
    while ($b > 0) {
    


        $r = $a % $b; 
        $a = $b; 
        $b = $r; 
         $pgcd=$a;
        
      }
  $ppcm =($a1*$b1)/$pgcd;
  echo $ppcm;
  return $ppcm;

  }
  function multi($n){
    echo "La table de multiplication de ce nombre est: \n";
    for ($i = 1; $i <= 10;$i++){
        echo $n . "x" . $i."=". $n*$i ."\n";
  }
  
  return $n;
}

function facto($f,$n){
    $f=1;
for($i=2;$i<=$n;$i++){
    $f=$f*$i;
}
echo "La factorielle est :" . $f."\n";
return $f;
}

function somme($somme){
    $somme=0;
$notes=[10,5,6,9,8,10,7,8,9];
for($i=0;$i<9;$i++){ 
    $somme=$somme+ $notes[$i];
}
echo  "la somme est : ". $somme ;
return $somme;

}

function triangle($nb,){

    for( $i=0; $i<=(2*$nb); $i++ ){

    
        for( $j=0; $j<=$nb; $j++ ){
    
            
            if($i>=$nb-($j-1) && $i<=$nb+($j-1)){
                echo "* ";
            }
        }
        echo "\n";
    }
}

function nbal($nb){
    switch($nb){
        case($nb >= 1 and $nb <= 5 ):
           
            echo "Il est compris entre 1 et 5
            ";
            break;
            case ($nb >= 6 and $nb <= 10 ):
            
            echo "Il est compris entre 6 et 10
            ";
            break;
            case ($nb >= 11 and $nb <= 15):
                
                echo "Il est compris entre 11 et 15
                ";
                break;
                case ( $nb >= 16 and $nb <= 20):
                    
                    echo "Il est compris entre 16 et 20
                    ";
}
return $nb;
}
function hello($nb){
    $nb=rand(0 , 20);
    echo " nombre ". $nb . "\n";
    switch($nb){
        case( $nb < 7 ):
           
            echo "Bonjour
            ";
            break;
            case ($nb >= 7 and $nb < 14 ):
            
            echo "Salut
            ";
            break;
            case ($nb >= 14 ):
                
                echo "Hello
                ";
                break;
                
}
return $nb;
}
function quiest($nom){
    echo "Votre personnage a-t-il des moustaches ? ";
    
}