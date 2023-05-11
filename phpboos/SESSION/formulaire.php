
<?php ob_start() ?>
<?php session_start() ?>
<h1 class="text-center">Session  <img src="./image/session.png" alt="romain" height="50px"></h1>
<button type="button" class="btn btn-secondary ms-5 me-3 px-5">Home</button>
<a href="./formulaire2" type="button" class="btn btn-primary">Ajouter des données</a>



<?php
$content = ob_get_clean();
require "template.php";

?>