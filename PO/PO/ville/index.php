<?php
require_once "ville.php";

$ville1 = new Ville("Dunkerque",59);
$ville2 = new Ville("Calais",62);
$ville3 = new Ville("Argeles-sur-mer",66);
$ville4 = new Ville("Lyon",69);

$ville1->affichage();
$ville2->affichage();
$ville3->affichage();
$ville4->affichage();



$personne = new personne("DEKINDT","Lucas"," 40ruejesaispasquoi");

if(isset($_POST['adresse'])){
    $personne->setAdresse($_POST['adresse']);
}
echo $personne->getpersonne();


echo "<form method='POST'>
        <label for='adresse'>Adresse :</label>
        <input type='text' name='adresse' value='" . $personne->getAdresse() ."'><br>
        <button type='submit'>Modifier l'adresse</button>

        </form>";
unset($personne);

