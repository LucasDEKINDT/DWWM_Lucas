<?php

require_once "employe.php";
require_once "cadre.php";

$employe1 = new Employe("Neymar", "Jean", "1850389546458", 1500.56, "soudeur");
$employe2 = new Employe("Jeremy", "Simon", "179028955812", 1700.47, "assistant mécanicien");
$employe3 = new Employe("Deray", "Odile", "285097154678", 1900.14, "magasinière");

$employe1->toString();
$employe1->effectueSonJob();
echo "<br>";

$employe2->toString();
$employe2->effectueSonJob();
echo "<br>";

$employe3->toString();
$employe3->effectueSonJob();
echo "<br>";

$cadre = new Cadre("Deloin", "Alain", "1840259453666", 2100.23, "chef maintenance");
$cadre->listeEmploye[] = $employe1;
$cadre->listeEmploye[] = $employe3;

$cadre->augmenteUnSalarie($employe1, 10);
$cadre->augmenteUnSalarie($employe3, 20);

$cadre->manage();


?>