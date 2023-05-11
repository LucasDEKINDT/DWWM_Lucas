<?php ob_start() ?>
<h1 class="text-center">Regrex  <img src="./image/utilisateur.png" alt="romain" height="50px"></h1>
    <div class="d-flex justify-content-center">
    <div class="bg-dark text-light w-50  d-flex justify-content-center p-5">
    <form class="container mt-5 perso" action="pd2" method="POST">
    <label foor="nom">Nom d'utilisateur :</label>
    <input type="text" class="form-control" placeholder="" id="id" name="Id" >
    <label foor="nom">Mot De Passe :</label>
    <input type="password" class="form-control" placeholder="" id="mdp" name="Mdp" >
    
    <input class="mt-4" type="submit" value="Confirmation">
    <div class="bg-white text-danger h-25 w-75 my-5 ">
<?php
$mail= $_POST["Id"];

$masque = 
"/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4}$/";

    if(preg_match($masque, $mail))  {
      echo "L'adresse email '$mail' est valide. ";
    } else {
        echo "L'adresse email '$mail' est invalide." ;}
echo "<br>";

        $mdp= $_POST["Mdp"];
        $aide= "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";
        
        if(preg_match($aide, $mdp)){
            echo "le mdp est bon" ;
        }
        else {
            echo "mdp invalide" ;
        }
        
?>
</div>
</form>

</div>
</div>



<?php
$content = ob_get_clean();
require "template.php";







?>