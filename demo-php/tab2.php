<?php
$somme=0;
$notes=[2,1,5,6,8,7,4,5];
for($i=0;$i<count($notes);$i++){
    $somme=$somme+ $notes[$i];
}
echo "la somme est : ". $somme ;