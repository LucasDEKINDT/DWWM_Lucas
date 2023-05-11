<?php ob_start() ?>
<?php session_start() ?>
<h1 class="text-center">Session  <img src="./image/session.png" alt="romain" height="50px"></h1>
<div class="d-flex ">
<a href="home.php"type="button" class="btn btn-secondary h-50 ms-5 me-3 px-5">Home </a>
<div class="d-flex justify-content-center">
<div class="alert alert-dismissible alert-success">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
   <a href="#" class="alert-link">Données sauvegardées</a>.
</div>
</div>
</div>

    <div class="container">
    <?php 
        if(isset($_POST['firstname']) && isset($_POST['name'])&& isset($_POST['age'])&& isset($_POST['taille'])&& isset($_POST['optionsRadios'])){

            $nom =$_POST['name'];
            $age =$_POST['age'];
            $prenom =$_POST['firstname'];
            $taille =$_POST['taille'];
            $sexe =$_POST['optionsRadios'];
            switch($sexe){
                case"Homme":
                    $sexe=='Homme';
                    
                    break;
                    case"Femme":
                       $sexe=='Femme';
                        
                        break;}
            //Création des variables de session
            $_SESSION['nom'] = $nom;
            $_SESSION['age'] = $age;
            $_SESSION['firstname'] = $prenom;
            $_SESSION['taille'] = $taille;
            $_SESSION['optionsRadios'] = $sexe;
            

            

            
            
        }

    ?>
    </div>
    


    

<?php
$content = ob_get_clean();
require "template.php";
?>