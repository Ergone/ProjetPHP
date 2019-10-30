<?php
    // Un article en vente
    class Categorie {
        private $id;
        private $nom;
        private $image;
        // Getters
        function getId() : int {
          return $this->id;
        }

        function getNom() : string {
          return $this->nom;
        }

        function getImage() : string {
          return $this->image;
        }
    }



 ?>
