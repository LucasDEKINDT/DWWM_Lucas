<?php
require_once "ville.php";

$ville1 = new Ville("Dunkerque",59);
$ville2 = new Ville("Calais",62);
$ville3 = new Ville("Argeles-sur-mer",66);
$ville4 = new Ville("Lyon",69);

$ville1->affichage();
$ville2->affichage();
$ville3->affichage();
$ville3->affichage();



$personne = new personne("DEKINDT","Lucas"," 40ruejesaispasquoi");
echo $personne->getpersonne();

$personne->setadresse("50ruejesaisquoi");

unset($personne);
