<?php
$sexe = readline("Homme ou Femme ? :");
$age = readline("Entrez votre age :");
if($sexe == "homme" and $age > 20){
    echo "Imposable";
}
elseif($sexe == "femme" and $age > 18 and $age < 35){
    echo "imposable";
}
else {
    echo "non imposable";
}