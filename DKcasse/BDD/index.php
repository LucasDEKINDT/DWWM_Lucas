<?php
require_once "connexion.php";
require_once "pieces.php";
require_once "Modeles.php";
require_once "Categorie.php";
require_once "TypePiece.php";
require_once "correspondre.php";
require_once "marques.php";
require_once "Utilisateur.php";





// $categorie1 = new Categorie(1 , 'Mecanique');

// $categorie1->affichagecategorie();

// echo "<br> <br>";
/********************************************************/
/********************* REQUETE SIMPLE *******************/
/********************************************************/
$requete = $db->query("SELECT * FROM pieces "); // $requete est un objet de type PDO_Statement
while ($donnees = $requete->fetch(PDO::FETCH_ASSOC)) // le while permet de boucler sur les enregistrements
// il s'arrete quand fetch renvoi false
{
    var_dump($donnees);
    $piece[] = new Piece($donnees);
}
var_dump($piece);




// $typepiece1 = new Typepiece(1,'mecanique rond',1);
$requete = $db->query("SELECT * FROM typepiece "); // $requete est un objet de type PDO_Statement
while ($donnees = $requete->fetch(PDO::FETCH_ASSOC)) // le while permet de boucler sur les enregistrements
// il s'arrete quand fetch renvoi false
{
    var_dump($donnees);
    $typepiece[] = new Typepiece($donnees);
}
var_dump($typepiece);
// $typepiece1->affichagetypepiece();

// echo "<br> <br>";

// $modele1 = new Modele(1,"clio",2009);
$requete = $db->query("SELECT * FROM modeles "); // $requete est un objet de type PDO_Statement
while ($donnees = $requete->fetch(PDO::FETCH_ASSOC)) // le while permet de boucler sur les enregistrements
// il s'arrete quand fetch renvoi false
{
    var_dump($donnees);
    $modele[] = new Modele($donnees);
}
var_dump($modele);
// $modele1->affichagemodele();

// echo "<br> <br>";

// $marque1 = new Marque(1,'renault',1);
$requete = $db->query("SELECT * FROM marques"); // $requete est un objet de type PDO_Statement
while ($donnees = $requete->fetch(PDO::FETCH_ASSOC)) // le while permet de boucler sur les enregistrements
// il s'arrete quand fetch renvoi false
{
    var_dump($donnees);
    $marque[] = new Marque($donnees);
}
var_dump($marque);
// $marque1->affichagemarque();

// echo "<br> <br>";

// $correspondre1 = new Correspondre(1,1);
$requete = $db->query("SELECT * FROM correspondre "); // $requete est un objet de type PDO_Statement
while ($donnees = $requete->fetch(PDO::FETCH_ASSOC)) // le while permet de boucler sur les enregistrements
// il s'arrete quand fetch renvoi false
{
    var_dump($donnees);
    $correspondre[] = new Correspondre($donnees);
}
var_dump($correspondre);
// $correspondre1->affichagecorres();

// echo "<br> <br>";

// $utilisateur1 = new Utilisateur(1,true,'dekindt','lucas','lucas.dekindt@ahoo.fr','azertyuiop789');

$requete = $db->query("SELECT * FROM utilisateur "); // $requete est un objet de type PDO_Statement
while ($donnees = $requete->fetch(PDO::FETCH_ASSOC)) // le while permet de boucler sur les enregistrements
// il s'arrete quand fetch renvoi false
{
    var_dump($donnees);
    $utilisateur[] = new Utilisateur($donnees);
}
var_dump($utilisateur);


// $utilisateur1->affichageutilisateur();

