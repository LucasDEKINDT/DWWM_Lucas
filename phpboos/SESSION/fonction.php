<?php ob_start() ?>
<?php session_start() ?>
<div class=" col-12 d-flex  ">
<div class="col-3">
<a href="home.php"type="button" class="btn btn-secondary w-50  ms-5 me-3 px-5">Home </a>
<div class="btn-group-vertical w-50 ms-5 me-3">
<a href="Débogage.php" type="button" class="btn btn-light ">Débogage</a>
<a href="Conca.php" type="button" class="btn btn-light">Concaténation</a>
<a href="Boucle.php"  type="button" class="btn btn-light ">Boucle</a>
<a href="Fonction.php" type="button" class="btn btn-primary">Fonction</a>
<a href="delete.php" type="button" class="btn btn-light">Supprimer</a>
</div>
</div>
<div class="d-flex flex-column justify-content-center">
    <h1 class="text-center">Fonction</h1>

<div>
    <h4>===> j'utilise ma fonction readTable()</h4>
    <div >
    <?php 
    require "function.php";
    $con=0;
    readTable($con);
    
    ?>
   
    </div>
</div>
</div>

    


    

<?php
$content = ob_get_clean();
require "template.php";
?>