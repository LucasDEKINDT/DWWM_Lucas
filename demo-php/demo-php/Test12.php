<?php
$age = readline("Entrez votre age :");
if ($age >= 6 and $age <= 7 ){
    echo "poussin";
}
elseif ($age >= 8 and $age <= 9 ){
    echo "Pupille";
}
elseif ($age >= 10 and $age <= 11) {
    echo "Minime";
}
elseif ( $age >= 12) {
    echo "Cadet";
}