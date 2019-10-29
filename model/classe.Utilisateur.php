<?php
    // Un article en vente
    class Utilisateur {
        private $pseudo;
        private $mail;
        private $motdepasse;
        private $jeux;
        private $localisation;
        // Getters
        function getPseudo() : string {
          return $this->pseudo;
        }

        function getMail() : string {
          return $this->mail;
        }

        function getMotdepasse() : string {
          return $this->motdepasse;
        }

        function getJeux() : array {
          return $this->panier;
        }

        function getLocalisation() : string {
          return $this->localisation;
        }

    }



 ?>
