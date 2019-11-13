<?php
  $title = 'Acceuil';
  include 'header.php';
 ?>
 <body>
     <h1>Votre Panier</h1>
     <?php
        if ($jeux!=null) {
            foreach ( $jeux as $value) {
                echo $value->getLibelle();
                echo "<br>";
                ?><img src="../data/images/<?php echo $value->getImage(); ?>" width="300" height="200"><?php
                echo "<br>";
                echo "Prix : ";
                echo $value->getPrix();
                echo "<br><br><br>";
            }
            echo "<hr>";
        } else {
            echo "Votre panier ne contient aucun articles";
        }
      ?>


      <?php $prix =0;
            if ($jeux!=null) {
          foreach ($jeux as $value) {
              $prix+=$value->getPrix();
          }
            echo "Prix Total : ".$prix."€";
            ?><a href="../controleur/ctrlviderpanier.php?pseudo=<?php echo $pseudo;?>"><p>Vider votre panier</p></a><?php
            ?><a href="../controleur/ctrlvaliderpanier.php?pseudo=<?php echo $pseudo;?>&prix=<?php if ($prix==0) {echo "0";}else {echo $prix;}?>"><p>Valider Votre Commande</p></a><?php
      }
      ?>

     <?php
     include 'footer.php';
    ?>

 </body>
</html>
