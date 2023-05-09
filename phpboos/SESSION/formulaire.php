
<?php ob_start() ?>
<?php session_start() ?>
<button type="button" class="btn btn-secondary ms-5 me-3 px-5">Home</button>
<a href="./formulaire2" type="button" class="btn btn-primary">Ajouter des données</a>



<?php
$content = ob_get_clean();
require "template.php";

?>