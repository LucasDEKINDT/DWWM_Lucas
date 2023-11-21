<?php 
ob_start(); 
?>
<form method="POST" action="<?= URL ?>pieces/av" enctype="multipart/form-data">
    <div class="form-group">
        <label for="NomPiece">Nom : </label>
        <input type="text" class="form-control" id="NomPiece" name="NomPiece">
    </div>
    <div class="form-group">
        <label for="Prix">prix: </label>
        <input type="number" class="form-control" id="Prix" name="Prix">
    </div>
    <div class="form-group">
        <label for="Stock">stock : </label>
        <input type="number" class="form-control-file" id="Stock" name="Stock">
    </div>
    <div class="form-group">
        <label for="IdTypePiece">idTypePiece : </label>
        <input type="number" class="form-control-file" id="IdTypePiece" name="IdTypePiece">
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
</form>
<?php
$content = ob_get_clean();
$nompiece = "Ajout d'une Piece";
require "views/template.php";
?>