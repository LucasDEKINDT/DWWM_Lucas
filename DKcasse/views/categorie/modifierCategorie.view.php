<?php 
ob_start(); 
?>


<form method="POST" action="<?= URL ?>categorie/mv" enctype="multipart/form-data">
    <div class="form-group">
        <label for="NomCategorie">Nom : </label>
        <input type="text" class="form-control" id="NomCategorie" name="NomCategorie" value="<?= $categorie->getNomcategorie() ?>">
    </div>
   
    <input type="hidden" name="identifiant" value="<?= $categorie->getIdcategorie(); ?>">
    <button type="submit" class="btn btn-primary">Valider</button>
</form>

<?php
$content = ob_get_clean();
require './views/template.php';
?>