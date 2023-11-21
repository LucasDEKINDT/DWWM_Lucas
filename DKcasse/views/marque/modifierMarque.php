<?php 
ob_start(); 
?>


<form method="POST" action="<?= URL ?>marques/mv" enctype="multipart/form-data">
    <div class="form-group">
        <label for="NomMarque">Marque : </label>
        <input type="text" class="form-control" id="NomMarque" name="NomMarque" value="<?= $marque->getNomMarque() ?>">
    </div>
    <div class="form-group">
        <label for="IdModele">IdModele : </label>
        <input type="number" class="form-control" id="IdModele" name="IdModele" value="<?= $marque->getIdModele() ?>">
    </div>
    <input type="hidden" name="identifiant" value="<?= $marque->getIdMarque(); ?>">
    <button type="submit" class="btn btn-primary">Valider</button>
</form>

<?php
$content = ob_get_clean();
require './views/template.php';
?>