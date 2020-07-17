<?php

include('affichage.php');
include('gestion-produit.php');

$nom_produit = "T-shirt femme";
$couleur = "Rouge";
$prix = 15.50;
$disponible = true;
$quantite = 10;

afficher_produit($nom_produit, $couleur, $prix, $disponible);
achat($quantite, 5);
$disponible = update_dispo($quantite);
afficher_produit($nom_produit, $couleur, $prix, $disponible);
achat($quantite, 5);
$disponible = update_dispo($quantite);
afficher_produit($nom_produit, $couleur, $prix, $disponible);
restockage($quantite, 5);
$disponible = update_dispo($quantite);
afficher_produit($nom_produit, $couleur, $prix, $disponible);
?>
