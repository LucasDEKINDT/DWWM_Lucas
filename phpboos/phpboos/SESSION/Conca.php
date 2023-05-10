<?php ob_start() ?>
<?php session_start() ?>
<div class=" col-12 d-flex  ">
<div class="col-3">
<a href="home.php"type="button" class="btn btn-secondary w-50  ms-5 me-3 px-5">Home </a>
<div class="btn-group-vertical w-50 ms-5 me-3">
<a href="Débogage.php" type="button" class="btn btn-light ">Débogage</a>
<a href="Conca.php" type="button" class="btn btn-primary">Concaténation</a>
<a href="Boucle.php"  type="button" class="btn btn-light">Boucle</a>
<a href="Fonction.php" type="button" class="btn btn-light">Fonction</a>
<a href="delete.php" type="button" class="btn btn-light">Supprimer</a>
</div>
</div>
<div class="d-flex flex-column justify-content-center">
    <h1 class="text-center">Concaténation</h1>

<div>
    <h4>===> Construction d'une phrase avec le contenu du tableau</h4>
    <div >
    
    <?php 
    if( $_SESSION['optionsRadios']=='Homme'){
        echo"Mr ".$_SESSION['firstname']."  " .$_SESSION['nom'] . "<br>"." j'ai ".$_SESSION['age']. " ans et je mesure ".$_SESSION['taille']. "m" ;
    }
    else{
        echo"Mme ".$_SESSION['firstname']. "  " .$_SESSION['nom'] . "<br>"." j'ai ".$_SESSION['age']. " ans et je mesure ".$_SESSION['taille']. "m" ;
    }
   
    ?>
    </div>
    <h4>===> Construction d'une phrase après MAJ du tableau</h4>
    <div >
    
    <?php 
    $_SESSION['firstname']=ucfirst($_SESSION['firstname']);
    $_SESSION['nom']=strtoupper($_SESSION['nom']);
    if( $_SESSION['optionsRadios']=='Homme'){
        echo"Mr ".$_SESSION['firstname'] ."  ".$_SESSION['nom'] . "<br>"." j'ai ".$_SESSION['age']. " ans et je mesure ".$_SESSION['taille']. "m" ;
    }
    else{
        echo"Mme ".$_SESSION['firstname'] ."  ".$_SESSION['nom'] . "<br>"." j'ai ".$_SESSION['age']. " ans et je mesure ".$_SESSION['taille']. "m" ;
    }
   
    ?>
    </div>
    <h4>===> Affichage d'une virgule à la place du point pour la taille</h4>
    <div >
    
    <?php 
    $_SESSION['taille']=str_replace('.', ',',$_SESSION['taille']);
    if( $_SESSION['optionsRadios']=='Homme'){
        echo"Mr ".$_SESSION['firstname'] ."  ".$_SESSION['nom'] . "<br>"." j'ai ".$_SESSION['age']. " ans et je mesure ".$_SESSION['taille']. "m" ;
    }
    else{
        echo"Mme ".$_SESSION['firstname'] ."  ".$_SESSION['nom'] . "<br>"." j'ai ".$_SESSION['age']. " ans et je mesure ".$_SESSION['taille']. "m" ;
    }
   
    ?>
    </div>
</div>
</div>

    

<?php session_reset(); ?>
    

<?php
$content = ob_get_clean();
require "template.php";
?>