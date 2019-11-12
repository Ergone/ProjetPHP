<?php
// Partie principale

// Inclusion du framework
include_once("../framework/classe.vue.php");

// Inclusion du modèle
include_once("../model/classe.DAO.php");

// Creation de l'unique objet DAO
$dao = new DAO();
$view = new View();
$rate = false;
if(isset($_POST['pseudo']) && isset($_POST['motdepasse'])){
    if ($dao->getUtilisateur($_POST['pseudo'])) {
        $utilisateur = $dao->getUtilisateur($_POST['pseudo']);
        if ($utilisateur[0]->getMotdepasse() == $_POST['motdepasse']) {
            session_start();
            $_SESSION["session"]= $utilisateur[0]->getPseudo();
            $a = $dao->ViderPanier("user_x");
            $view->assign('pseudo',$utilisateur[0]->getPseudo());
            $view->display("viewHomePage.php");
        } else {
            $rate = true;
            $view->assign('rate',$rate);
            $view->display("viewLogin.php");
        }
    } else {
        $rate = true;
        $view->assign('rate',$rate);
        $view->display("viewLogin.php");
    }
} else {
    $rate = true;
    $view->assign('rate',$rate);
    $view->display("viewLogin.php");
}

?>
