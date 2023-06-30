<?php 
ob_start(); 
?>
<form method="POST" action="<?= URL ?>marques/av" enctype="multipart/form-data">
    <div class="form-group">
        <label for="NomMarque">Marque : </label>
        <input type="text" class="form-control" id="NomMarque" name="NomMarque">
    </div>
    <div class="form-group">
        <label for="IdModele">IdModele: </label>
        <input type="number" class="form-control" id="IdModele" name="IdModele">
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
</form>
<?php
$content = ob_get_clean();
$nomtypepiece = "Ajout d'une marque";
require "views/template.php";
?>