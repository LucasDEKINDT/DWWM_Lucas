<?php
$n = readline("Entrez un nombre :");
$f=1;
for($i=2;$i<=$n;$i++){
    $f=$f*$i;
}
echo "La factorielle est :" . $f."\n";