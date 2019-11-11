<?php
  $title = 'Acceuil';
  include 'header.php';
 ?>
 <body>
     <h1>Votre Panier</h1>
     <?php
        if ($jeux!=null) {
            foreach ( $jeux as $value) {
                ?><img src="../data/images/<?php echo $value->getImage(); ?>" width="300" height="200"><?php
            }
        } else {
            echo "panier vide";
        }
      ?>

      <p>Valider Votre Commande</p>
      <a href="../controleur/ctrlviderpanier.php?pseudo=<?php echo $pseudo;?>"><p>Vider votre panier</p></a>
      <?php if ($jeux!=null) {
          $prix =0;
          foreach ($jeux as $value) {
              $prix+=$value->getPrix();
          }
          echo "prix   : ".$prix."€";
      }
      ?>
     <?php
     include 'footer.php';
    ?>
 </body>
</html>
