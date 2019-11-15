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
        <input type="text" name="lieu" placeholder="Adresse de livraison" required autofocus><br>
        <label for="num1">Numéro de la carte</label><br>
        <input type="number" id="num1" name="num1" maxlength="16" placeholder="xxxx-xxxx-xxxx-xxxx" required ><br>
        <label for="num2">Code de Sécurité</label><br>
        <input type="number" id="num2" name="num2" maxlength="3" placeholder="xxx" required><br>
        <label for="num3">Date de validité</label><br>
        <input type="month" id="num3" name="num3" required><br>
        <a href="../controleur/ctrlhomepage.php"><input type="button" value="Annuler"></a>
        <input type="submit" value="Submit"><br>
      </form>
      <br>
      <p>Prix Total: <?=$prix ?></p>
     <?php
     include 'footer.php';
    ?>
 </body>
</html>
