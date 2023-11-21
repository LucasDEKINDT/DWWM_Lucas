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
        
        <th>Annee</th>
        <th>Modele</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php 
    for($i=0; $i < count($modele);$i++) : 
    ?>
    <tr>
    <td class="align-middle"><a href="<?= URL ?>modeles/l/<?= $modele[$i]->getIdmodele(); ?>"><?= $modele[$i]->getAnnee(); ?></a></td>
        <td class="align-middle"><a href="<?= URL ?>modeles/l/<?= $modele[$i]->getIdmodele(); ?>"><?= $modele[$i]->getNommodele(); ?></a></td>
        
        <td class="align-middle"><a href="<?= URL ?>modeles/m/<?= $modele[$i]->getIdmodele(); ?>" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle">
            <form method="POST" action="<?= URL ?>modeles/s/<?= $modele[$i]->getIdmodele(); ?>" onSubmit="return confirm('Voulez-vous vraiment supprimer le modele ?');">
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
        </td>
    </tr>
    <?php endfor; ?>
</table>
<a href="<?= URL ?>modeles/a" class="btn btn-success d-block">Ajouter</a>

<?php
$content = ob_get_clean();
$titre = "Les modeles de la casse";
require "views/template.php";
?>