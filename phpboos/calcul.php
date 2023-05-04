<?php ob_start() ?>
<div class="d-flex justify-content-center">
    <div class="bg-dark text-light w-50 d-flex justify-content-center p-5">
    <form class="container mt-5 perso" action="calcul.php" method="POST">
    <label foor="nom">Chiffre1 :</label>
    <input type="number" class="form-control" placeholder="Entre un chiffre " id="chiffre1" name="Chiffre1" >
    <select name="try" id="try"class="my-3">    
  <option value="addition">+</option>  
  <option value="soustraction">-</option>  
  <option value="multiplication">*</option>  
  <option value="division">/</option>  
    
</select> 
    <div class="form-group">
    <label foor="nom">Chiffre2 :</label>
    <input type="number" class="form-control" placeholder="Entre un chiffre " id="chiffre2" name="Chiffre2" >
    
    
    <input class="mt-4" type="submit" value="Calculer">

    <div class="bg-white text-dark my-3 h-50px rounded-2 py-2 ps-2">
    <?php
$nb1=$_POST["Chiffre1"];
$nb2=$_POST["Chiffre2"];
$somme=0;
$opr=$_POST["try"];
switch($opr){
    case"addition":
        $somme=$nb1+$nb2;
        echo "le resultat est : ".$somme;
        break;
        case"soustraction":
            $somme=$nb1-$nb2;
            echo "le resultat est :".$somme;
            break;
            case"multiplication":
                $somme=$nb1*$nb2;
                echo "le resultat est :".$somme;
                break;
                case"division":
                    
                    $somme=$nb1/$nb2;
                    echo " le resultat est :".$somme;
                    break;
                    
                        default:
                        echo "coucou";


        
}


   
    



?>
    </div>
    
</form>
</div>
</div>









<?php
$content = ob_get_clean();
require "template.php";
