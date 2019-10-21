<?php
    // Un article en vente
    class Utilisateur {
        private $pseudo;
        private $mail;
        private $motdepasse;
        private $panier;
        private $localisation;
        // Getters
        function getPseudo() : string {
          return $this->pseudo;
        }

        function getMail() : string {
          return $this->mail;
        }

        function getCategorie() : string {
          return $this->motdepasse;
        }

        function getPanier() : Panier {
          return $this->panier;
        }

        function getLocalisation() : string {
          return $this->localisation;
        }

    }



 ?>
