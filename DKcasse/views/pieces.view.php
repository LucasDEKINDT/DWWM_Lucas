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
        <th>Stock</th>
        <th>Piece</th>
        <th>Prix</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php 
    for($i=0; $i < count($piece);$i++) : 
    ?>
    <tr>
    <td class="align-middle"><a href="<?= URL ?>pieces/l/<?= $piece[$i]->getIdpiece(); ?>"><?= $piece[$i]->getStock(); ?></a></td>
        <td class="align-middle"><a href="<?= URL ?>pieces/l/<?= $piece[$i]->getIdpiece(); ?>"><?= $piece[$i]->getNompiece(); ?></a></td>
        <td class="align-middle"><?= $piece[$i]->getPrix(); ?></td>
        <td class="align-middle"><a href="<?= URL ?>pieces/m/<?= $piece[$i]->getIdpiece(); ?>" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle">
            <form method="POST" action="<?= URL ?>pieces/s/<?= $piece[$i]->getIdpiece(); ?>" onSubmit="return confirm('Voulez-vous vraiment supprimer la piece ?');">
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
        </td>
    </tr>
    <?php endfor; ?>
</table>
<a href="<?= URL ?>pieces/a" class="btn btn-success d-block">Ajouter</a>

<?php
$content = ob_get_clean();
$titre = "Les pieces de la casse";
require "template.php";
?>