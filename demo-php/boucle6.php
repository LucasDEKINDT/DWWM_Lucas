<?php
$n = readline("Entrez un nombre");
echo "La table de multiplication de ce nombre est:";
for ($i = 1; $i <= 10;$i++){
   echo $n . "x" . $i."=". $n*$i ."\n";
}