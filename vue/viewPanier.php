<?php
  $title = 'Acceuil';
  include 'header.php';
 ?>
 <body>
     <h1>Votre Panier</h1>
     <?php
        if ($jeux!=null) {
            echo "<table>";
            echo "<tr>";
            foreach ( $jeux as $value) {
            echo "<td>";
            echo "<table>";
            echo "<tr>";
            echo "<td>".$value->getLibelle()."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            ?><img src="../data/images/<?php echo $value->getImage(); ?>" width="300" height="200"><?php
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Prix : ".$value->getPrix()."</td>";
            echo "</tr>";
            echo "</table>";
            echo "</td>";
            }
            echo "</tr>";
            echo "</table>";
            echo "<hr>";
        } else {
            echo "Votre panier ne contient aucun articles";
        }
      ?>
        <br><br><br>

      <?php $prix =0;
            if ($jeux!=null) {
          foreach ($jeux as $value) {
              $prix+=$value->getPrix();
          }
         echo "Prix Total : ".$prix."€";
     ?>
            <a href="../controleur/ctrlviderpanier.php?pseudo=<?= $pseudo ?>"><p>Vider votre panier</p></a>
            <a href="../controleur/ctrlvaliderpanier.php?pseudo=<?=$pseudo?>&prix=<?php if ($prix==0) {echo "0";}else {echo $prix;}?>"><p>Valider Votre Commande</p></a><?php
      }
      ?>

     <?php
     include 'footer.php';
    ?>

 </body>
</html>
