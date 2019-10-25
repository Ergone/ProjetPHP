<?php
    // Un article en vente
    class Jeu {
        private $ref;       // Référence unique
        private $libelle;   // Nom de l'article
        private $categorie; // identifiant de catégorie
        private $prix;
        private $support;    // le prix
        private $image;     // Nom du fichier image
        private $quantite;
        private $description;
        // Getters
        function getRef() : int {
          return $this->ref;
        }
        function getLibelle() : string {
          return $this->libelle;
        }
        function getCategorie() : int {
          return $this->categorie;
        }
        function getPrix() : float {
          return $this->prix;
        }
        function getImage() : string {
          return $this->image;
        }
        function getPanier() : array {
          return $this->panier;
        }
        function getSupport() : string {
          return $this->support;
        }
        function getQuantite() : int {
          return $this->quantite;
        }
        function getDescription() : string {
          return $this->description;
        }
    }
 ?>
