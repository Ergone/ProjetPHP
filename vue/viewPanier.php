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

      <?php $prix =0;
            if ($jeux!=null) {
          foreach ($jeux as $value) {
              $prix+=$value->getPrix();
          }
           ?><a href="../controleur/ctrlviderpanier.php?pseudo=<?php echo $pseudo;?>"><p>Vider votre panier</p></a><?php
          echo "prix   : ".$prix."€";
            ?><a href="../controleur/ctrlvaliderpanier.php?pseudo=<?php echo $pseudo;?>&prix=<?php if ($prix==0) {echo "0";}else {echo $prix;}?>"><p>Valider Votre Commande</p></a><?php
      }
      ?>
     <?php
     include 'footer.php';
    ?>
 </body>
</html>
