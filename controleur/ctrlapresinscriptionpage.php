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
if (isset($_POST['pseudo']) && isset($_POST['mail']) && isset($_POST['motdepasse']) && isset($_POST['motdepasse2']) ) {
    if($_POST['motdepasse'] == $_POST['motdepasse2']){
        if ($dao->getUtilisateur($_POST['pseudo'])==null) {
            $marche = $dao->NouvelUtilisateur($_POST['pseudo'],$_POST['motdepasse'],$_POST['mail']);
            if ($marche==0) {
                $rate = true;
                $view->assign('rate',$rate);
                $view->assign('mauvaismdp',$mauvaismdp);
                $view->assign('pseudodejaexistant',$pseudodejaexistant);
                $view->display("viewNewAccount.php");
            } else {
                $utilisateur = $dao->getUtilisateur($_POST['pseudo']);//
                $_SESSION['session']= $utilisateur[0]->getPseudo();
                $view->display("viewHomePage.php");
            }
        } else {
            $pseudodejaexistant = true;
            $view->assign('rate',$rate);
            $view->assign('mauvaismdp',$mauvaismdp);
            $view->assign('pseudodejaexistant',$pseudodejaexistant);
            $view->display("viewNewAccount.php");
        }

    } else {
        $mauvaismdp = true;
        $view->assign('rate',$rate);
        $view->assign('pseudodejaexistant',$pseudodejaexistant);
        $view->assign('mauvaismdp',$mauvaismdp);
        $view->display("viewNewAccount.php");
    }
} else {
    $rate = true;
    $view->assign('pseudodejaexistant',$pseudodejaexistant);
    $view->assign('rate',$rate);
    $view->assign('mauvaismdp',$mauvaismdp);
    $view->display("viewNewAccount.php");
}

?>
