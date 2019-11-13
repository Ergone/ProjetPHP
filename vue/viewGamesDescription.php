<?php
  $title = 'Acceuil';
  include 'header.php';
 ?>
    <body>
        <h1><?php echo $jeu->getLibelle() ?></h1>

        <img src="../data/images/<?php echo $jeu->getImage() ?>" width="300" height="200">
        <p><?php echo $jeu->getDescription() ?></p><br>
        <a href="../controleur/ctrlapresachat.php?jeu=<?php echo $jeu->getRef()?>"><p>Ajouter au panier  : <?php echo $jeu->getPrix() ?>€</p></a>
        <?php
        include 'footer.php';
       ?>
    </body>
</html>
