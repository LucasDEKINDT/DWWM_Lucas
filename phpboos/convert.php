
    <?php ob_start() ?>
    <div class="d-flex justify-content-center">
    <div class="bg-dark text-light w-50 d-flex justify-content-center p-5">
    <form class="container mt-5 perso" action="traitement.php" method="POST">
    <label foor="nom">Chiffre :</label>
    <input type="number" class="form-control" placeholder="Entre un chiffre entre 1 et 3999" id="chiffre" name="Chiffre" min="1" max="3999">
    
    <input class="mt-4" type="submit" value="Calculer">
</form>
</div>
</div>
<?php
require "function.php";





?>






<?php
$content = ob_get_clean();
require "template.php";







?>