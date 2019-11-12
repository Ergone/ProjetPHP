<?php
  $title = 'Acceuil';
  include 'header.php';
 ?>
 <body>
     <h1>Validation de votre panier</h1>
     <?php
        if ($jeux!=null) {
            foreach ( $jeux as $value) {
                ?><img src="../data/images/<?php echo $value->getImage(); ?>" width="150" height="100"><?php
            }
        } else {
            echo "panier vide";
        }
      ?>
      <form class="" action="../controleur/ctrlachat.php?pseudo=<?php echo $pseudo ?>" method="post">
        <input type="text" name="lieu" placeholder="lieu de livraison" required autofocus><br>
        <input type="number" name="num1" maxlength="16" placeholder="numerodecarte" required ><br>
        <input type="number" name="num2" required maxlength="3" placeholder="code securite" required><br>
        <a href="../controleur/ctrlhomepage.php"><input type="button" value="Annuler"></a>
        <input type="submit" value="Submit"><br>
      </form>

      <?php echo $prix ?>
     <?php
     include 'footer.php';
    ?>
 </body>
</html>
