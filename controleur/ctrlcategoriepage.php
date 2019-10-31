<?php
// Partie principale

// Inclusion du framework
include_once("../framework/classe.vue.php");

// Inclusion du modèle
include_once("../model/classe.DAO.php");

// Creation de l'unique objet DAO
$dao = new DAO();
session_start();
// Pas de catégorie
$categorie = 0;
$view = new View();
$jeux = $dao->getAllJeu();
if(isset($_GET['cat'])){
    $cat = $_GET['cat'];
} else {
    $cat = 1;
}

////////////////////////////////////////////////////////////////////////////
// Construction de la vue
////////////////////////////////////////////////////////////////////////////

$jeux = $dao->getCatJeu($cat);
// Les articles

$view->assign('jeux',$jeux);

$view->display("viewCatPage.php");
?>
