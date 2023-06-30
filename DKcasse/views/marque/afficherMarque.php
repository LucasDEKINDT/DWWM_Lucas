<?php 
ob_start(); 
?>

<div class="row">
    
    <div class="col-6">
        <p>Marque: <?= $marque->getNomMarque(); ?></p>
        <p>IdModele: <?= $marque->getIdModele(); ?></p>
        
    </div>
</div>

<?php
$content = ob_get_clean();
$NomMarque = $marque->getNomMarque();
require "views/template.php";
?>