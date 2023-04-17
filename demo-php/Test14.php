<?php
$heure = readline("quelle heure est-il ? ");
$minute = readline("minute :");
$seconde = readline("seconde :");
$temps = $seconde + 1;
if($seconde = 60) {
    $temps = 0;
    $minute = $minute + 1;

}
if($minute = 60){
    $minute = 0;
    $heure = $heure + 1;
}

echo "Dans une seconde, il sera " . $heure . "heure(s)" . $minute . "minute(s)" . $temps . "seconde(s)" ;