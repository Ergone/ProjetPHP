<?php

// Classe minimaliste pour normaliser l'usage d'une vue
// Cette classe est inspiré du moteur et compilateur de template Smarty
class View {
  // Paramètres de la vue, dans un tableau associatif
  private $param;

  // Constructeur d'une vue
  function __construct() {
    // Initialise un tableau vide de paramètres
    $this->param = array();
  }

  // Ajoute une variable à la vue
  function assign(string $varName,$value) {
    $this->param[$varName] = $value;
  }

  // Affiche la vue
  function display(string $filename) {

      // Ajoute le chemin relatif vers le fichier de la vue
      $p = "../view/".$filename;

    // Tous les attributs de l'objet sont dupliqués en des variables
    // locales à la fonction display. Cela simplifie l'expression des
    // valeurs de la vue. Il faut simplement utiliser <?= $variable

    // Parcourt toutes les variables de la vue
    foreach ($this->param as $key => $value) {
      // La notation $$ dédigne une variable de le nom est dans une autre variable
      $$key = $value;
    }

    // Inclusion de la vue
    // Comme cette inclusion est dans la portée de la méthode show alors
    // seules les variables locales à show sont visibles.
    include($p);
  }

  // Affiche toutes les valeurs des paramètres de la vue
  function dump() {
    foreach ($this->param as $key => $value) {
      print("<br/><b>$key: </b>\n");
      var_dump($value);
    }
  }
}
?>
