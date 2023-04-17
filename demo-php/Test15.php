<?php
$nb = readline("Combien de copies");
if($nb <= 10){
    $nb = $nb * 0.10;
}
elseif($nb > 10 and $nb <= 30){
    $nb = (10*0.10)+(($nb-10) * 0.09);
}
elseif($nb > 30){
    $nb = (10*0.10)+(20*0.09)+(($nb-30) *0.08);
}
echo "le prix sera de :" . $nb ;