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
        
        <th>Reference</th>
        <th>idCategorie</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php 
    for($i=0; $i < count($typepiece);$i++) : 
    ?>
    <tr>
    <td class="align-middle"><a href="<?= URL ?>typepiece/l/<?= $typepiece[$i]->getIdtypepiece(); ?>"><?= $typepiece[$i]->getIdCategorie(); ?></a></td>
        <td class="align-middle"><a href="<?= URL ?>typepiece/l/<?= $typepiece[$i]->getIdtypepiece(); ?>"><?= $typepiece[$i]->getReferencepiece(); ?></a></td>
        
        <td class="align-middle"><a href="<?= URL ?>typepiece/m/<?= $typepiece[$i]->getIdtypepiece(); ?>" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle">
            <form method="POST" action="<?= URL ?>typepiece/s/<?= $typepiece[$i]->getIdtypepiece(); ?>" onSubmit="return confirm('Voulez-vous vraiment supprimer le type de  piece ?');">
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
        </td>
    </tr>
    <?php endfor; ?>
</table>
<a href="<?= URL ?>typepiece/a" class="btn btn-success d-block">Ajouter</a>

<?php
$content = ob_get_clean();
$titre = "Les type piece de la casse";
require "template.php";
?>