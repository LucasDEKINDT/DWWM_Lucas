<?php 
ob_start(); 
?>
<form method="POST" action="<?= URL ?>modeles/av" enctype="multipart/form-data">
    <div class="form-group">
        <label for="NomModele">Modele : </label>
        <input type="text" class="form-control" id="NomModele" name="NomModele">
    </div>
    <div class="form-group">
        <label for="Annee">Annee: </label>
        <input type="number" class="form-control" id="Annee" name="Annee">
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
</form>
<?php
$content = ob_get_clean();
$nommodele = "Ajout d'un Modele";
require "views/template.php";
?>