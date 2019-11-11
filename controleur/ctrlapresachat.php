<?php

// Partie principale

// Inclusion du framework
include_once("../framework/classe.vue.php");

// Inclusion du modèle
include_once("../model/classe.DAO.php");

// Creation de l'unique objet DAO
$dao = new DAO();
session_start();
$view = new View();
if (isset($_GET['jeu'])) {
    $jeu = $_GET['jeu'];
} else {
    $jeu =1;
}
if (isset($_SESSION['session'])) {
    $a=$dao->AjoutPanier($_SESSION['session'],$jeu);
    $jeux = $dao->getPanier($_SESSION['session']);
    $view->assign('pseudo',$_SESSION['session']);
} else {
    $a=$dao->AjoutPanier("user_x",$jeu);
    $jeux = $dao->getPanier("user_x");
    $view->assign('pseudo','user_x');
}

$view->assign('jeux',$jeux);

$view->display("viewPanier.php");
?>
