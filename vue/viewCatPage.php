<?php
  $title = 'Acceuil';
  include 'header.php';
 ?>
    <body>
            <h1>Catégorie</h1>
                <?php
                foreach ($jeux as $value) {
                    ?><article class=""><?php
                    echo $value->getLibelle();?><br>
                    <?php
                    ?>
                            <a href="../controleur/ctrlgamedescriptionpage.php?jeu=<?php echo $value->getRef()?>"><img src="../data/images/<?php echo $value->getImage() ?>" width="300" height="200"></a><br>
                            <?php echo "Quantité :".$value->getQuantite();?><br>
                            <?php echo "Prix : ".$value->getPrix()."€";?><br>
                            <?php echo $value->getDescription();?><br><br><br>

                    </article>
          <?php
                }
            include 'footer.php';
           ?>
    </body>
</html>
