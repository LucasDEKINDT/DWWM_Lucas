<?php
session_start();

function initPanier() {
   if (!isset($_SESSION['panier'])) {
      $_SESSION['panier'] = array();
   }
}
function ajouterProduit($libelleProduit, $quantite, $prix) {
   // Vérifie si le produit est déjà dans le panier
   if (isset($_SESSION['panier'][$libelleProduit])) {
      // Met à jour la quantité du produit
      $_SESSION['panier'][$libelleProduit]['quantite'] += $quantite;
   } else {
      // Ajoute le produit au panier
      $_SESSION['panier'][$libelleProduit] = array(
         'quantite' => $quantite,
         'prix' => $prix
      );
   }
}
function supprimerProduit($libelleProduit) {
   if (isset($_SESSION['panier'][$libelleProduit])) {
      unset($_SESSION['panier'][$libelleProduit]);
   }
}
function viderPanier() {
   $_SESSION['panier'] = array();
}
initPanier();
ajouterProduit('roue', 1, 10.99);
foreach ($_SESSION['panier'] as $libelleProduit => $produit) {
   $quantite = $produit['quantite'];
   $prix = $produit['prix'];
   // Affiche les informations du produit
   echo "Produit : $libelleProduit, Quantité : $quantite, Prix : $prix<br>";
}
