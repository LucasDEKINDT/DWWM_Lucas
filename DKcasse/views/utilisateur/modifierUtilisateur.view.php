<?php 
ob_start(); 
?>


<form method="POST" action="<?= URL ?>utilisateurs/mv" enctype="multipart/form-data">
    <div class="form-group">
        <label for="Idutilisateur">Id utilisateur : </label>
        <input type="text" class="form-control" id="Idutilisateur" name="Idutilisateur" value="<?= $utilisateur->getIdutilisateur() ?>">
    </div>
    <div class="form-group">
        <label for="Grade">Grade : </label>
        <input type="checkbox" class="form-control" id="Grade" name="Grade" <?php if ($utilisateur->getGrade()) echo 'checked'; ?>>
    </div>
    <div class="form-group">
        <label for="Nomutilisateur">Nom utilisateur : </label>
        <input type="text" class="form-control" id="Nomutilisateur" name="Nomutilisateur" value="<?= $utilisateur->getNomutilisateur() ?>">
    </div>
    <div class="form-group">
        <label for="Prenomutilisateur">Prénom utilisateur : </label>
        <input type="text" class="form-control" id="Prenomutilisateur" name="Prenomutilisateur" value="<?= $utilisateur->getPrenomutilisateur() ?>">
    </div>
    <div class="form-group">
        <label for="Emailutilisateur">Email utilisateur : </label>
        <input type="email" class="form-control" id="Emailutilisateur" name="Emailutilisateur" value="<?= $utilisateur->getEmailutilisateur() ?>">
    </div>
    <div class="form-group">
        <label for="Motdepasse">Mot de passe : </label>
        <input type="password" class="form-control" id="Motdepasse" name="Motdepasse" value="<?= $utilisateur->getMotdepasse() ?>">
    </div>
    
    <input type="hidden" name="identifiant" value="<?= $utilisateur->getIdutilisateur(); ?>">
    <button type="submit" class="btn btn-primary">Valider</button>
</form>

<?php
$content = ob_get_clean();
require './views/template.php';
?>
