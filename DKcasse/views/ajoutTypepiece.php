<?php 
ob_start(); 
?>
<form method="POST" action="<?= URL ?>typepiece/av" enctype="multipart/form-data">
    <div class="form-group">
        <label for="Referencepiece">referencepiece : </label>
        <input type="text" class="form-control" id="Referencepiece" name="Referencepiece">
    </div>
    <div class="form-group">
        <label for="IdCategorie">idCategorie: </label>
        <input type="number" class="form-control" id="IdCategorie" name="IdCategorie">
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
</form>
<?php
$content = ob_get_clean();
$nompiece = "Ajout d'un type de piece";
require "template.php";
?>