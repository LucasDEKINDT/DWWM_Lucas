<?php 
ob_start(); 
?>

<div class="row">
    
    <div class="col-6">
        <p>Idutilisateur: <?= $utilisateur->getIdutilisateur(); ?></p>
        <p>Grade: <?= $utilisateur->getGrade(); ?></p>
        <p>Nomutilisateur: <?= $utilisateur->getNomutilisateur(); ?></p>
        <p>Prenomutilisateur: <?= $utilisateur->getPrenomutilisateur(); ?></p>
        <p>Emailutilisateur: <?= $utilisateur->getEmailutilisateur(); ?></p>
        <p>Motdepasse: <?= $utilisateur->getMotdepasse(); ?></p>
    </div>
</div>

<?php
$content = ob_get_clean();
$Nomutilisateur = $utilisateur->getNomutilisateur();
require "views/template.php";
?>
