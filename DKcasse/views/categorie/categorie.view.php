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
        
        <th>Modele</th>
        
        <th colspan="2">Actions</th>
    </tr>
    <?php 
    for($i=0; $i < count($categorie);$i++) : 
    ?>
    <tr>
    
        <td class="align-middle"><a href="<?= URL ?>categorie/l/<?= $categorie[$i]->getIdcategorie(); ?>"><?= $categorie[$i]->getNomcategorie(); ?></a></td>
        
        <td class="align-middle"><a href="<?= URL ?>categorie/m/<?= $categorie[$i]->getIdcategorie(); ?>" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle">
            <form method="POST" action="<?= URL ?>categorie/s/<?= $categorie[$i]->getIdcategorie(); ?>" onSubmit="return confirm('Voulez-vous vraiment supprimer le modele ?');">
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
        </td>
    </tr>
    <?php endfor; ?>
</table>
<a href="<?= URL ?>categorie/a" class="btn btn-success d-block">Ajouter</a>

<?php
$content = ob_get_clean();
$titre = "Les categories de la casse";
require "views/template.php";
?>