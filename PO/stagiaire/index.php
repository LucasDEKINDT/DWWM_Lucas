<?php
require_once "stagiaire.php";

$stagiaire = new stagiaire("roger", array(5,4,6,10,11,5));

$stagiaire->calculermoyenne();

$stagiaire->affichage();