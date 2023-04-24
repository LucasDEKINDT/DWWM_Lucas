<?php



for ($i = 1; $i <= 12; $i++) {
    if($i=6){
        $i--;
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "\n";
}
// $i = 5;
// while($i>0){
//     echo str_repeat("* ", $i--);
//     echo "\n";
// }


?>