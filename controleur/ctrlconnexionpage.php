<?php
// Partie principale

// Inclusion du framework
include_once("../framework/classe.vue.php");

// Inclusion du modèle
include_once("../model/classe.DAO.php");

// Creation de l'unique objet DAO
session_start();
$dao = new DAO();
$view = new View();
$rate = false;
$mauvaismdp = false;
$pseudodejaexistant = false;
$view->assign('rate',$rate);
$view->assign('mauvaismdp',$mauvaismdp);
$view->assign('pseudodejaexistant',$pseudodejaexistant);
$view->display("viewLogin.php");
?>
