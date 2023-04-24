<?php
$heure = readline("quelle heure est-il ? ");
$minute = readline("minute :");
$minute = $minute + 1;
if($minute = 60){
    $minute == 0;
    $heure = $heure + 1;
}
if($heure = 24){
    $heure = 0;
    $minute = 0;
}


echo "Dans une minute, il sera " . $heure . "heure(s)" . $minute ;