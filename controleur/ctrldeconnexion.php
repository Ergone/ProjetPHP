<?php
// Partie principale

// Inclusion du framework
include_once("../framework/classe.vue.php");

// Inclusion du modèle
include_once("../model/classe.DAO.php");

// Creation de l'unique objet DAO
session_start();
unset($_SESSION["session"]);
$dao = new DAO();
$view = new View();

$view->display("viewHomePage.php");
?>
