<?php 
ob_start(); 
?>

<div class="row">
    
    <div class="col-6">
        <p>nom: <?= $piece->getNompiece(); ?></p>
        <p>prix: <?= $piece->getPrix(); ?></p>
        <p>stock: <?= $piece->getStock(); ?></p>
        <p>IdTypePiece: <?= $piece->getIdTypePiece(); ?></p>
    </div>
</div>

<?php
$content = ob_get_clean();
$nompiece = $piece->getMompiece();
require "template.php";
?>