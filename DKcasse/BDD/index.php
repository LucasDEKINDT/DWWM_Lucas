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

/********************************************/
/*****          REQUETE SIMPLE          *****/
/********************************************/


// $typepiece1 = new Typepiece(1,'mecanique rond',1);

// $typepiece1->affichagetypepiece();

// echo "<br> <br>";

// $modele1 = new Modele(1,"clio",2009);

// $modele1->affichagemodele();

// echo "<br> <br>";

// $marque1 = new Marque(1,'renault',1);

// $marque1->affichagemarque();

// echo "<br> <br>";

// $correspondre1 = new Correspondre(1,1);

// $correspondre1->affichagecorres();

// echo "<br> <br>";

// $utilisateur1 = new Utilisateur(1,true,'dekindt','lucas','lucas.dekindt@ahoo.fr','azertyuiop789');

/********************************************/
/*****          REQUETE SIMPLE          *****/
/********************************************/


// $utilisateur1->affichageutilisateur();

