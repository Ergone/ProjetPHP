<?php
    // Un article en vente
    class Panier {
        private $articles;
        private $utilisateur;
        
        // Getters
        function getarticles() : array {
          return $this->articles;
        }

        function getUtilisateur() : string {
          return $this->utilisateur;
        }

    }



 ?>
