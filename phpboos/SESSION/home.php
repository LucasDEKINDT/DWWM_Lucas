<?php ob_start() ?>
<?php session_start() ?>
<h1 class="text-center">Session <img src="./image/session.png" alt="romain" height="50px"></h1>
<div class=" col-3  ">
<div class="d-flex flex-column">
<a href="home.php"type="button" class="btn btn-secondary w-50 h-50 ms-5 me-3 px-5">Home </a>
<div class="btn-group-vertical w-50 ms-5 me-3">
<a href="Débogage.php" type="button" class="btn btn-light">Débogage</a>
<a href="Conca.php" type="button" class="btn btn-light">Concaténation</a>
<a href="Boucle.php"  type="button" class="btn btn-light">Boucle</a>
<a href="Fonction.php" type="button" class="btn btn-light">Fonction</a>
<a href="delete.php" type="button" class="btn btn-light">Supprimer</a>
</div>
<div class="d-flex justify-content-center">
</div>
</div>
</div>

   
    </div>
    


    

<?php
$content = ob_get_clean();
require "template.php";
?>