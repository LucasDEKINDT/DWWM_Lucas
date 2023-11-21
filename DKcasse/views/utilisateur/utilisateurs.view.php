<?php 
ob_start(); 

if(!empty($_SESSION['alert'])) :
?>
<div class="alert alert-<?= $_SESSION['alert']['type'] ?>" role="alert">
    <?= $_SESSION['alert']['msg'] ?>
</div>
<?php 
unset($_SESSION['alert']);
endif; 
?>

<table class="table text-center">
    <tr class="table-dark">
        
        <th>Grade</th>
        <th>Nom utilisateur</th>
        <th>Prénom utilisateur</th>
        <th>Email utilisateur</th>
        <th>Mot de passe</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php 
    for($i=0; $i < count($utilisateur);$i++) : 
    ?>
    <tr>
        <td class="align-middle"><a href="<?= URL ?>utilisateurs/l/<?= $utilisateur[$i]->getIdutilisateur(); ?>"><?= $utilisateur[$i]->getIdutilisateur(); ?></a></td>
        <td class="align-middle"><?= $utilisateur[$i]->getGrade(); ?></td>
        <td class="align-middle"><a href="<?= URL ?>utilisateurs/l/<?= $utilisateur[$i]->getIdutilisateur(); ?>"><?= $utilisateur[$i]->getNomutilisateur(); ?></a></td>
        <td class="align-middle"><?= $utilisateur[$i]->getPrenomutilisateur(); ?></td>
        <td class="align-middle"><?= $utilisateur[$i]->getEmailutilisateur(); ?></td>
        <td class="align-middle"><?= $utilisateur[$i]->getMotdepasse(); ?></td>
        <td class="align-middle"><a href="<?= URL ?>utilisateurs/m/<?= $utilisateur[$i]->getIdutilisateur(); ?>" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle">
            <form method="POST" action="<?= URL ?>utilisateurs/s/<?= $utilisateur[$i]->getIdutilisateur(); ?>" onSubmit="return confirm('Voulez-vous vraiment supprimer l\'utilisateur ?');">
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
        </td>
    </tr>
    <?php endfor; ?>
</table>
<a href="<?= URL ?>utilisateurs/a" class="btn btn-success d-block">Ajouter</a>

<?php
$content = ob_get_clean();
$titre = "Les utilisateurs";
require "views/template.php";
?>
