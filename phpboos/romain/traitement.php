<?php ob_start() ?>
<?php require "function.php";   ?>
<h1 class="text-center">Chiffre Romain  <img src="./image/romain.png" alt="romain" height="50px"></h1>
<div class="d-flex justify-content-center">
    <div class="bg-dark text-light w-50 d-flex justify-content-center p-5">
    <form class="container mt-5 perso" action="traitement.php" method="POST">
    <label foor="nom">Chiffre :</label>
    <input type="number" class="form-control" placeholder="Entre un chiffre entre 1 et 3999" id="chiffre" name="Chiffre" min="1" max="3999">
    <div class="form-group">
  <fieldset disabled="">
    <h6>chiffre romain :</h6>
    
    <div class="bg-white text-dark h-50px rounded-2 py-2 ps-2">
    <?php
$romain="";
$num = $_POST["Chiffre"];

romain($num);
if($num==false){
    echo "Rentrez un chiffre ";
}
else{
    echo " le nombre romain est : ";
echo romain($num);
}


   
    



?>
    </div>
    
</div>
    
    <input class="mt-4" type="submit" value="Calculer">
    
</form>
</div>
</div>









<?php
$content = ob_get_clean();
require "template.php";

