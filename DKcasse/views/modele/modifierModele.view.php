<?php 
ob_start(); 
?>


<form method="POST" action="<?= URL ?>modeles/mv" enctype="multipart/form-data">
    <div class="form-group">
        <label for="NomModele">Nom : </label>
        <input type="text" class="form-control" id="NomModele" name="NomModele" value="<?= $modele->getNommodele() ?>">
    </div>
    <div class="form-group">
        <label for="Annee">Annee : </label>
        <input type="number" class="form-control" id="Annee" name="Annee" value="<?= $modele->getAnnee() ?>">
    </div>
    <input type="hidden" name="identifiant" value="<?= $modele->getIdmodele(); ?>">
    <button type="submit" class="btn btn-primary">Valider</button>
</form>

<?php
$content = ob_get_clean();
require './views/template.php';
?>