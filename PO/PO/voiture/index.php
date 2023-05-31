<?php
require_once "voiture.php";

$voiture1 = new Voiture("peugeot","206",2008,"rouge",10);
$voiture2 = new Voiture("renaud","clio",2012,"gris",0);


echo "<div>";
$voiture1->affichage();
echo "</div>";


echo "<div>";
$voiture1->accelerer(50);
echo "</div>";
