<?php session_start()?>


<?php
if(isset($_POST['name']) && isset($_POST['age'])){

    $nom = $_POST['name'];
    $age = $_POST['age'];

    $_SESSION['nom']=$nom;
    $_SESSION['age']=$age;

    // echo $_SESSION['nom'] ;
    echo "bonjour" ;

}
$nom = $_POST['name'];
    $age = $_POST['age'];
if(isset($_GET['logout'])){
    session_destroy();
    header("location:delete.php");
    exit();
 }
 ?>

 <div>
    <h1>Bienvenue <?php $nom; ?></h1>
 </div>




 <!-- delete.php -->

 <?php
 session_start();
 session_destroy();
 header("location:index.php");
 exit();
 ?>