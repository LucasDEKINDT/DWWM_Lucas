<?php

require_once 'formation.php';
require_once 'stagiaire.php';
// Création des objets Stagiaire
$stagiaire1 = new Stagiaire("Kevin LIBLANC");
$stagiaire1->ajouterNote(12);
$stagiaire1->ajouterNote(15);

$stagiaire2 = new Stagiaire("Lucas DEKINDT");
$stagiaire2->ajouterNote(14);
$stagiaire2->ajouterNote(16);

$stagiaire3 = new Stagiaire("Valentin QUERSIN");
$stagiaire3->ajouterNote(10);
$stagiaire3->ajouterNote(13);

// Création de l'objet Formation
$formation = new Formation("Formation PHP", 5, array($stagiaire1, $stagiaire2, $stagiaire3));

// Appel des méthodes
$moyenneFormation = $formation->calculerMoyenneFormation();
echo "La moyenne de la formation est : $moyenneFormation<br>";

$indexMax = $formation->getIndexMax();
echo "L'indice du stagiaire ayant la meilleure moyenne est : $indexMax<br>";

$formation->afficherNomMax();
echo "<br>";

$formation->afficherMinMax();
echo "<br>";

$formation->trouverMoyenneParNom("Kevin LIBLANC");
echo "<br>";

$formation->trouverMoyenneParNom("Lucas DEKINDT");
echo "<br>";

$formation->trouverMoyenneParNom("Valentin QUERSIN");
echo "<br>";
?>

