<?php

    require_once("../model/classe.Utilisateur.php");
    require_once("../model/classe.Jeu.php");
    require_once("../model/classe.Categorie.php");

    // Le Data Access Object
    // Il représente la base de donnée
    class DAO {
        // L'objet local PDO de la base de donnée
        private $db;
        // Le type, le chemin et le nom de la base de donnée
        private $database = 'sqlite:../data/data.db';

        // Constructeur chargé d'ouvrir la BD
        function __construct() {
            try {
              $this->db = new PDO($this->database);
            }
            catch (PDOException $e){
              die("erreur de connexion:".$e->getMessage());
            }

        }

        // Accès à toutes les catégories
        // Retourne une table d'objets de type Categorie
        function getAllCategorie() : array {
            $req = "SELECT * FROM categorie";
            $a = $this->db->query($req);
            // Lance la requête
            $categories = $a->fetchAll(PDO::FETCH_CLASS,"Categorie");

            return $categories;
        }

        function getAllJeu() : array {
            $req = "SELECT * FROM jeu";
            $a = $this->db->query($req);
            // Lance la requête
            $categories = $a->fetchAll(PDO::FETCH_CLASS,"Jeu");

            return $categories;
        }

        function getJeu(int $ref) : array {
            $req = "SELECT *
                    FROM jeu
                    WHERE ref = $ref ";
            $a = $this->db->query($req);
            // Lance la requête
            $articles = $a->fetchAll(PDO::FETCH_CLASS,"Jeu");

            return $articles;
        }

        function getUtilisateur(string $ut) : array {
            $req = "SELECT *
                    FROM utilisateur
                    WHERE pseudo = '$ut' ";
            $a = $this->db->query($req);
            // Lance la requête
            $utilisateur = $a->fetchAll(PDO::FETCH_CLASS,"Utilisateur");

            return $utilisateur;
        }

        function getCategorie(int $id) : array {
            $req = "SELECT *
                    FROM categorie
                    WHERE id = $id ";
            $a = $this->db->query($req);
            // Lance la requête
            $articles = $a->fetchAll(PDO::FETCH_CLASS,"Categorie");

            return $articles;
        }

        function getNJeu(int $ref,int $n) : array {
            $req = "SELECT *
                    FROM jeu
                    WHERE ref>=$ref
                    ORDER BY ref
                    LIMIT $n ";
            $a = $this->db->query($req);
            // Lance la requête
            $articles = $a->fetchAll(PDO::FETCH_CLASS,"Jeu");

            return $articles;
        }

        function prevN(int $ref,int $n): int {
            $req = "SELECT *
                    FROM article
                    WHERE ref<$ref
                    ORDER BY ref DESC
                    LIMIT $n ";
            $a = $this->db->query($req);
            // Lance la requête
            $articles = $a->fetchAll(PDO::FETCH_CLASS,"Article");
            if(sizeof($articles)<=$n){
                return -1;
            } else{
            return $articles[$n-1]->getRef();
            }

        }


        function getlastJeu(): int {
            $req = "SELECT *
                    FROM jeu
                    ORDER BY ref DESC
                    LIMIT 1 ";
            $a = $this->db->query($req);
            // Lance la requête
            $articles = $a->fetchAll(PDO::FETCH_CLASS,"Jeu");

            return $articles[0]->getRef();
        }

        function getCatJeu(int $id): array {
            $req = "SELECT *
                    FROM jeu
                    WHERE categorie IN ( SELECT id
                                        FROM Categorie
                                        WHERE id = $id)";
            $a = $this->db->query($req);
            // Lance la requête
            $jeux = $a->fetchAll(PDO::FETCH_CLASS,"Jeu");

            return $jeux;
        }

        function getNCategorie(int $id,int $n) : array {
            $req = "SELECT *
                    FROM jeu
                    WHERE ref>=$id
                    ORDER BY ref
                    LIMIT $n ";
            $a = $this->db->query($req);
            // Lance la requête
            $articles = $a->fetchAll(PDO::FETCH_CLASS,"Categorie");

            return $articles;
        }

        function getPanier (int $ref) : array {
            $req = "SELECT *
                    FROM jeu
                    WHERE ref IN (SELECT ref
                                  FROM panier
                                  WHERE ref= $ref)";
            $a = $this->db->query($req);
            // Lance la requête
            $articles = $a->fetchAll(PDO::FETCH_CLASS,"Jeu");

            return $articles;
        }
    }
?>
