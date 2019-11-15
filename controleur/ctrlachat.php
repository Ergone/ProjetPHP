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
if (isset($_GET['pseudo']) && isset($_POST['lieu']) && isset($_POST['num1']) && isset($_POST['num2'])) {
    if (isset($_SESSION['session'])) {
        $utilisateur = $dao->getUtilisateur($_GET['pseudo']);
        if($utilisateur[0]->getLocalisation()==''){
            $a = $dao->setLocalisation($_POST['lieu'],$utilisateur[0]->getPseudo());
        }
    }
    $jeux = $dao->getPanier($_GET['pseudo']);
    foreach ($jeux as $value) {
        $a = $dao->Vendu($value->getRef());
    }
    $a = $dao->ViderPanier($_GET['pseudo']);
    $view->display("viewachat.php");
} else {
    $vizw->display("viewHomePage.php");
}



?>
