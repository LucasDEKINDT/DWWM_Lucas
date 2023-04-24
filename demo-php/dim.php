<?php
$pg=0;
$tab=array();

for($i=1;$i<=12;$i++){
for($j=1;$j<=8;$j++){
    $tab[$i][$j] = rand(1 , 100);
    echo  $tab[$i][$j];
   
}
echo "\n";



}
// for($k=1;$k=$i;$k++){
//     if($k==1 || $tab[$k]>$tab[$pg]){
//         $pg=$k;
//     }
// }
// echo " grand i : ".$pg;
// $maximum=max($tab);
//     echo "calculer le max ".$maximum;


