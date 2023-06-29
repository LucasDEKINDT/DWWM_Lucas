<?php 
ob_start(); 
?>

<div class="row">
    
    <div class="col-6">
        <p>Modele: <?= $modele->getNommodele(); ?></p>
        <p>Annee: <?= $modele->getAnnee(); ?></p>
        
    </div>
</div>

<?php
$content = ob_get_clean();
$nommodele = $modele->getMommodele();
require "views/template.php";
?>