<?php
require "function.php";


$pht = readline( "Entrez le prix hors taxes :");

$nb = readline("Entrez le nombre d'articles :");

$ttva = readline("Entrez le taux de TVA  :");

pttc($nb,$pht,$ttva);
