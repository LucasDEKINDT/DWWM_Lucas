<?php ob_start() ?>
    <div class="d-flex justify-content-center">
    <div class="bg-dark text-light w-50 d-flex justify-content-center p-5">
    <form class="container mt-5 perso" action="pd2" method="POST">
    <label foor="nom">Nom d'utilisateur :</label>
    <input type="text" class="form-control" placeholder="e-mail" id="id" name="Id" >
    <label foor="nom">Mot De Passe :</label>
    <input type="password" class="form-control" placeholder="" id="mdp" name="Mdp" >
    
    <input class="mt-4" type="submit" value="Confirmation">
</form>
</div>
</div>



<?php
$content = ob_get_clean();
require "template.php";







?>