<?php
$a = 3;
$b = 10;
$c = $a + $b;
$b = $a + $b;
$a = $c;
echo $a . "\n";
echo $b . "\n";
echo $c;