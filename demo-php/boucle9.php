<?php
$pg=0;
$pp=0;
for($i=1;$i<=5;$i++){
    $n = readline("entrez un nombre :");
    if($i==1 || $n>$pg){
        $pg=$n;
    }
    elseif($i==1 || $n<$pg){
        $pp=$n;
    }
}
echo "le nombre le plus grand etait :" . $pg."\n" ;
echo "le nombre le plus petit etait :" . $pp;


