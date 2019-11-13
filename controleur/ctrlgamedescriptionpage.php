<?php

include_once("../framework/classe.vue.php");

// Inclusion du modèle
include_once("../model/classe.DAO.php");

// Creation de l'unique objet DAO
$dao = new DAO();
$view = new View();
session_start();

if (isset($_GET['jeu'])) {
    $jeu = $_GET['jeu'];
} else {
    $jeu = 1;
}

$game = $dao->getJeu($jeu);

$view->assign('jeu',$game[0]);

$view->display("viewGamesDescription.php");
 ?>
