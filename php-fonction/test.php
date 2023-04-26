<?php

$nombre =7;

for( $i=0; $i<=(2*$nombre); $i++ ){

    
    for( $j=0; $j<=$nombre; $j++ ){

        
        if($i>=$nombre-($j-1) && $i<=$nombre+($j-1)){
            echo "* ";
        }
    }
    echo "\n";
}


?>