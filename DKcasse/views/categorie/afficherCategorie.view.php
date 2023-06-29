<?php 
ob_start(); 
?>

<div class="row">
    
    <div class="col-6">
        <p>Categorie: <?= $categorie->getNomcategorie(); ?></p>
        
        
    </div>
</div>

<?php
$content = ob_get_clean();
$nomcategorie = $categorie->getNomcategorie();
require "views/template.php";
?>