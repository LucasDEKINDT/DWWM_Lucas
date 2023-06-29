<?php 
ob_start(); 
?>
<form method="POST" action="<?= URL ?>categorie/av" enctype="multipart/form-data">
    <div class="form-group">
        <label for="NomCategorie">Categorie : </label>
        <input type="text" class="form-control" id="NomCategorie" name="NomCategorie">
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
</form>
<?php
$content = ob_get_clean();
$nompiece = "Ajout d'une Categorie";
require "views/template.php";
?>