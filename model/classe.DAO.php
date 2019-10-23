<?php

    require_once("../model/Categorie.class.php");
    require_once("../model/Cla.class.php");

    // Le Data Access Object
    // Il représente la base de donnée
    class DAO {
        // L'objet local PDO de la base de donnée
        private $db;
        // Le type, le chemin et le nom de la base de donnée
        private $database = 'sqlite:../data/db/bricomachin.db';

        // Constructeur chargé d'ouvrir la BD
        function __construct() {
            try {
              $this->db = new PDO($this->database);
            }
            catch (PDOException $e){
              die("erreur de connexion:".$e->getMessage());
            }

        }

        //
        // // Accès à toutes les catégories
        // // Retourne une table d'objets de type Categorie
        // function getAllCat() : array {
        //     $req = "SELECT * FROM categorie";
        //     $a = $this->db->query($req);
        //     // Lance la requête
        //     $categories = $a->fetchAll(PDO::FETCH_CLASS,"Categorie");
        //
        //     return $categories;
        // }
        //
        //
        //
        // // Accès aux n premiers articles
        // // Cette méthode retourne un tableau contenant les n permier articles de
        // // la base sous la forme d'objets de la classe Article.
        // function firstN(int $n) : array {
        //     $req = "SELECT *
        //             FROM article
        //             LIMIT $n ";
        //     $a = $this->db->query($req);
        //     // Lance la requête
        //     $articles = $a->fetchAll(PDO::FETCH_CLASS,"Article");
        //
        //     return $articles;
        //
        // }
        //
        // // Acces au n articles à partir de la reférence $ref
        // // Cette méthode retourne un tableau contenant n  articles de
        // // la base sous la forme d'objets de la classe Article.
        // function getN(int $ref,int $n) : array {
        //     $req = "SELECT *
        //             FROM article
        //             WHERE ref>='$ref'
        //             ORDER BY ref
        //             LIMIT $n ";
        //     $a = $this->db->query($req);
        //     // Lance la requête
        //     $articles = $a->fetchAll(PDO::FETCH_CLASS,"Article");
        //
        //     return $articles;
        // }
        //
        // // Acces à la référence qui suit la référence $ref dans l'ordre des références
        // // Retourne -1 si $ref est la dernière référence
        // function next(int $ref) : int {
        //
        //     $a=$this->getN($ref,2);
        //     if(sizeof($a)==2){
        //         $ref2 = $a[1]->getRef();
        //         return $ref2;
        //     } else {
        //         return -1;
        //     }
        // }
        //
        // // Acces aux n articles qui précèdent de $n la référence $ref dans l'ordre des références
        // // Retourne -1 si $ref est la première référence
        // function prevN(int $ref,int $n): int {
        //     $req = "SELECT *
        //             FROM article
        //             WHERE ref<$ref
        //             ORDER BY ref DESC
        //             LIMIT $n ";
        //     $a = $this->db->query($req);
        //     // Lance la requête
        //     $articles = $a->fetchAll(PDO::FETCH_CLASS,"Article");
        //     if(sizeof($articles)<=$n){
        //         return -1;
        //     } else{
        //     return $articles[$n-1]->getRef();
        //     }
        //
        // }
