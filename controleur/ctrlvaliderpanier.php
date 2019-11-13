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
if (isset($_GET['prix']) && isset($_GET['pseudo'])) {
    $view->assign('pseudo',$_GET['pseudo']);
    $view->assign('prix',$_GET['prix']);
    $jeux = $dao->getPanier($_GET['pseudo']);
    $view->assign('jeux',$jeux);
    $view->display("viewvalidation.php");
} else {
    $view->assign('pseudo',$_GET['pseudo']);
    $jeux = $dao->getPanier($_GET['pseudo']);
    $view->assign('jeux',$jeux);
    $view->display("viewPanier.php");
}



?>
