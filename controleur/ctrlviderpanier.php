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
if (isset($_GET['pseudo'])) {
    $a=$dao->ViderPanier($_GET['pseudo']);
    $jeux = $dao->getPanier($_SESSION['session']);
    $view->assign('pseudo',$_SESSION['session']);
} else {
    $a=$dao->ViderPanier("user_x");
    $jeux = $dao->getPanier("user_x");
    $view->assign('pseudo','user_x');
}

$view->assign('jeux',$jeux);

$view->display("viewPanier.php");
?>
