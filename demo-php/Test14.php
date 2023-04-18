<?php
$heure = readline("quelle heure est-il ? ");
$minute = readline("minute :");
$seconde = readline("seconde :");
$seconde = $seconde + 1;
if($seconde = 60) {
    $temps = 0;
    $minute = $minute + 1;

}
if($minute = 60){
    $minute = 0;
    $heure = $heure + 1;
}
if($heure = 24){
    $heure = 0;
}

echo "Dans une seconde, il sera " . $heure . "heure(s)" . $minute . "minute(s)" . $seconde . "seconde(s)" ;