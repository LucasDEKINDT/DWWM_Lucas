<?php
ob_start();
?>
<form method="POST" action="<?= URL ?>utilisateurs/av" enctype="multipart/form-data">
    <div class="form-group">
        <label for="Idutilisateur">Id utilisateur : </label>
        <input type="text" class="form-control" id="Idutilisateur" name="Idutilisateur">
    </div>
    <div class="form-group">
        <label for="Grade">Grade : </label>
        <input type="checkbox" class="form-control" id="Grade" name="Grade">
    </div>
    <div class="form-group">
        <label for="Nomutilisateur">Nom utilisateur : </label>
        <input type="text" class="form-control" id="Nomutilisateur" name="Nomutilisateur">
    </div>
    <div class="form-group">
        <label for="Prenomutilisateur">Prénom utilisateur : </label>
        <input type="text" class="form-control" id="Prenomutilisateur" name="Prenomutilisateur">
    </div>
    <div class="form-group">
        <label for="Emailutilisateur">Email utilisateur : </label>
        <input type="email" class="form-control" id="Emailutilisateur" name="Emailutilisateur">
    </div>
    <div class="form-group">
        <label for="Motdepasse">Mot de passe : </label>
        <input type="password" class="form-control" id="Motdepasse" name="Motdepasse">
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
</form>
<?php
$content = ob_get_clean();
$titre = "Ajout d'un utilisateur";
require "views/template.php";
?>
