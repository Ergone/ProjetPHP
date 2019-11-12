<?php
// Partie principale

// Inclusion du framework
include_once("../framework/classe.vue.php");

// Inclusion du modèle
include_once("../model/classe.DAO.php");

// Creation de l'unique objet DAO
$dao = new DAO();
$view = new View();
session_start();
$a = $dao->ViderPanier($_SESSION["session"]);
unset($_SESSION["session"]);


$view->display("viewHomePage.php");
?>
