<?php 
ob_start(); 
?>

<div class="row">
    
    <div class="col-6">
        <p>referencepiece: <?= $typepiece->getReferencepiece(); ?></p>
        <p>idCategorie: <?= $typepiece->getIdCategorie(); ?></p>
        
    </div>
</div>

<?php
$content = ob_get_clean();
$referencepiece = $typepiece->getReferencepiece();
require "views/template.php";
?>