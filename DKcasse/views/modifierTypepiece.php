<?php 
ob_start(); 
?>


<form method="POST" action="<?= URL ?>typepiece/mv" enctype="multipart/form-data">
    <div class="form-group">
        <label for="Referencepiece">referencepiece : </label>
        <input type="text" class="form-control" id="Referencepiece" name="Referencepiece" value="<?= $typepiece->getReferencepiece() ?>">
    </div>
    <div class="form-group">
        <label for="IdCategorie">idCategorie : </label>
        <input type="number" class="form-control" id="IdCategorie" name="IdCategorie" value="<?= $typepiece->getIdCategorie() ?>">
    </div>
    <input type="hidden" name="identifiant" value="<?= $typepiece->getIdtypepiece(); ?>">
    <button type="submit" class="btn btn-primary">Valider</button>
</form>

<?php
$content = ob_get_clean();
require './views/template.php';
?>