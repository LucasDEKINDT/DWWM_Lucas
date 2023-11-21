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
        
        <th>Marque</th>
        <th>idModele</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php 
    for($i=0; $i < count($marque);$i++) : 
    ?>
    <tr>
    <td class="align-middle"><a href="<?= URL ?>marques/l/<?= $marque[$i]->getIdMarque(); ?>"><?= $marque[$i]->getIdModele(); ?></a></td>
        <td class="align-middle"><a href="<?= URL ?>marques/l/<?= $marque[$i]->getIdMarque(); ?>"><?= $marque[$i]->getNomMarque(); ?></a></td>
        
        <td class="align-middle"><a href="<?= URL ?>marques/m/<?= $marque[$i]->getIdMarque(); ?>" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle">
            <form method="POST" action="<?= URL ?>marques/s/<?= $marque[$i]->getIdMarque(); ?>" onSubmit="return confirm('Voulez-vous vraiment supprimer le type de  piece ?');">
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
        </td>
    </tr>
    <?php endfor; ?>
</table>
<a href="<?= URL ?>marques/a" class="btn btn-success d-block">Ajouter</a>

<?php
$content = ob_get_clean();
$titre = "Les marques de la casse";
require "views/template.php";
?>