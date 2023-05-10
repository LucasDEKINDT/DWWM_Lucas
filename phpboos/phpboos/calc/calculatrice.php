<?php ob_start() ?>
<?php require "function.php";   ?>
<div class="d-flex justify-content-center">
    <div class="bg-dark text-light w-50 d-flex justify-content-center p-5">
    <form class="container mt-5 perso" action="calcul.php" method="POST">
    <label foor="nom">Chiffre1 :</label>
    <input type="number" class="form-control" placeholder="Entre un chiffre " id="chiffre1" name="Chiffre1" >
    <div class="form-group">
    <select name="try" id="try"class="my-3">    
  <option value="addition">+</option>  
  <option value="soustraction">-</option>  
  <option value="multiplication">*</option>  
  <option value="division">/</option>  
    
</select> 
    <div class="form-group">
    <label foor="nom">Chiffre2 :</label>
    <input type="number" class="form-control" placeholder="Entre un chiffre " id="chiffre2" name="Chiffre2" >
    <div class="form-group">
  
    


    
</div>
    
    <input class="mt-4" type="submit" value="Calculer">
    
</form>
</div>
</div>









<?php
$content = ob_get_clean();
require "template.php";

