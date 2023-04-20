<?php
$t1=[5,50,23,11];
$t2=[10,1,4,3];
$t3=[];
$somme=0;
for($i=0;$i<4;$i++){
    $t3[$i]=$t1[$i]*$t2[$i];
    $somme=$somme+$t3[$i];
}
echo $somme . "\n";