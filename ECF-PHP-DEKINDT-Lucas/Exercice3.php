<?php
echo "Racine de l'equation du 2nd degré \n";
echo "           Y = ax² + bx + c \n \n";
$a=readline("Quelle est la valeur de a : ");
$b=readline("Quelle est la valeur de b : ");
$c=readline("Quelle est la valeur de c : ");
echo "\n";

$X1=0;
$X2=0;
$delta=($b*$b)-4*($a*$c);
switch($delta){
    case($delta<=0):
        echo "L'équation ne possède pas de racine réelle". "\n";
        echo "Delta = ".$delta;
        break;

        case($delta===0):
            echo "L'équation possède une racine double : ". "\n";
            echo "Delta = ".$delta. "\n";
            $X1=$X2= -($b/(2*$a));
            echo "X1 = X2 = ".$X1;
            break;

            case($delta>=0):
                echo "L'équation possède 2 racines distinctes : ". "\n";
                echo "Delta = ".$delta. "\n";
                echo "L'équation s'annule pour : ". "\n";
               $X1=((-$b+sqrt($delta))/(2*$a));
               $X2=((-$b-sqrt($delta))/(2*$a));
               echo "X1 = ".$X1 . "\n". "X2 = ".$X2;


}
echo "\n";
$choix=readline("Voulez-vous continuer ?");
//creation de boucle
while($choix=="o"){
    $a=readline("Quelle est la valeur de a : ");
$b=readline("Quelle est la valeur de b : ");
$c=readline("Quelle est la valeur de c : ");
echo "\n";

$X1=0;
$X2=0;
$delta=($b*$b)-4*($a*$c);
switch($delta){
    case($delta<=0):
        echo "L'équation ne possède pas de racine réelle". "\n";
        echo "Delta = ".$delta. "\n \n";
        echo "\n";
        $choix=readline("Voulez-vous continuer ?");
        
        break;

        case($delta===0):
            echo "L'équation possède une racine double : ". "\n";
            echo "Delta = ".$delta. "\n";
            $X1=$X2= -($b/(2*$a));
            echo "X1 = X2 = ".$X1. "\n \n";
            echo "\n";
            
            $choix=readline("Voulez-vous continuer ?");
            
            break;

            case($delta>=0):
                echo "L'équation possède 2 racines distinctes : ". "\n";
                echo "Delta = ".$delta. "\n";
                echo "L'équation s'annule pour : ". "\n";
               $X1=((-$b+sqrt($delta))/(2*$a));
               $X2=((-$b-sqrt($delta))/(2*$a));
               echo "X1 = ".$X1 . "\n". "X2 = ".$X2. "\n \n";
               echo "\n";
               $choix=readline("Voulez-vous continuer ?");
               
               break;


}

}
echo "Au revoir et à bientôt";