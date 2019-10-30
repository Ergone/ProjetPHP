<?php
// Partie principale

// Inclusion du framework
include_once("../framework/classe.vue.php");

// Inclusion du modèle
include_once("../model/classe.DAO.php");

// Creation de l'unique objet DAO
$dao = new DAO();
$view = new View();
if(isset($_GET['ut'])){
    $ut = $_GET['ut'];
} else {
    $ut = "lennan";
}

$utilisateur = $dao->getUtilisateur($ut);

$view->assign('utilisateur',$utilisateur);

$view->display("viewAccount.php");
?>
