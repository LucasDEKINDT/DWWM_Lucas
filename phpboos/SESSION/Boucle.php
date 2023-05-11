<?php ob_start() ?>
<?php session_start() ?>
<h1 class="text-center">Session  <img src="./image/session.png" alt="romain" height="50px"></h1>
<div class=" col-12 d-flex  ">
<div class="col-3">
<a href="home.php"type="button" class="btn btn-secondary w-50  ms-5 me-3 px-5">Home </a>
<div class="btn-group-vertical w-50 ms-5 me-3">
<a href="Débogage.php" type="button" class="btn btn-light ">Débogage</a>
<a href="Conca.php" type="button" class="btn btn-light">Concaténation</a>
<a href="Boucle.php"  type="button" class="btn btn-primary">Boucle</a>
<a href="Fonction.php" type="button" class="btn btn-light">Fonction</a>
<a href="delete.php" type="button" class="btn btn-light">Supprimer</a>
</div>
</div>
<div class="d-flex flex-column justify-content-center">
    <h1 class="text-center">Boucle</h1>

<div>
    <h4>===> Lecture du tableau à l'aide d'une boucle foreach</h4>
    <div >
    <?php 
    $con=0;
    foreach ($_SESSION as $keys => $valeur){

        echo " à la ligne n°".$con ." correspond la clé ". $keys . " et contient ".$valeur . "<br>";
        $con++;
    }
    ?>
   
    </div>
</div>
</div>

    


    

<?php
$content = ob_get_clean();
require "template.php";
?>