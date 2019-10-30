<?php
// Partie principale

// Inclusion du framework
include_once("../framework/classe.vue.php");

// Inclusion du modèle
include_once("../model/classe.DAO.php");

// Creation de l'unique objet DAO
$dao = new DAO();

// Pas de catégorie
$categorie = 0;
$view = new View();
$jeux = $dao->getAllJeu();
if(isset($_GET['ref'])){
    $firstRef = $_GET['ref'];
} else {
    $firstRef = $jeux[0]->getRef();
}

////////////////////////////////////////////////////////////////////////////
// Construction de la vue
////////////////////////////////////////////////////////////////////////////
if ($firstRef==1) {
    $prev = 1;
} else {
    $prev = $firstRef-5;
}
if ($firstRef==($dao->getlastJeu()-4)) {
    $suiv= 21;
} else {
    $suiv = $firstRef+5;
}
$jeux = $dao->getNJeu($firstRef,5);
// Les articles
$view->assign('suiv',$suiv);
$view->assign('prev',$prev);
$view->assign('jeux',$jeux);

$view->display("viewGamePage.php");
?>
