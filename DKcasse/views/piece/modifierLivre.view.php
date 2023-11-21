<?php 
ob_start(); 
?>




<form method="POST" action="<?= URL ?>pieces/mv" enctype="multipart/form-data">
    <div class="form-group">
        <label for="NomPiece">Nom : </label>
        <input type="text" class="form-control" id="NomPiece" name="NomPiece" value="<?= $piece->getNompiece() ?>">
    </div>
    <div class="form-group">
        <label for="Prix">Prix : </label>
        <input type="number" class="form-control" id="Prix" name="Prix" value="<?= $piece->getPrix() ?>">
    </div>
    <div class="form-group">
        <label for="Stock">Stock : </label>
        <input type="number" class="form-control" id="Stock" name="Stock" value="<?= $piece->getStock() ?>">
    </div>
    <div class="form-group">
        <label for="IdTypePiece">IdTypePiece : </label>
        <input type="number" class="form-control" id="IdTypePiece" name="IdTypePiece" value="<?= $piece->getIdTypePiece() ?>">
    </div>
    
    <input type="hidden" name="identifiant" value="<?= $piece->getIdpiece(); ?>">
    <button type="submit" class="btn btn-primary">Valider</button>
</form>

<?php
$content = ob_get_clean();
require './views/template.php';
?>