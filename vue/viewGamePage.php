<?php
  $title = 'Acceuil';
  include 'header.php';
 ?>
    <body>
            <h1>Jeux</h1>
            <a href="?ref=<?=$prev?>">Prec</a>
            <a href="?ref=<?=$suiv?>">Suiv</a>
            <br><br><br>
                <?php
                foreach ($jeux as $value) {
                    ?><article class=""><?php
                    echo $value->getLibelle();?><br>
                    <?php
                    ?>
                        <a href="../controleur/ctrlgamedescriptionpage.php?jeu=<?php echo $value->getRef()?>"><img src="../data/images/<?php echo $value->getImage() ?>" width="300" height="200"></a><br>
                        <?php echo "Quantité :".$value->getQuantite();?><br>
                        <?php echo "Prix : ".$value->getPrix()."€";?><br>
                        <?php echo "Description : ".$value->getDescription();?><br>
                        <a href="../controleur/ctrlapresachat.php?jeu=<?php echo $value->getRef()?>"><p>Ajouter au panier  : <?php echo $value->getPrix(); ?>€</p></a>
                        <br><br><br>

                    </article>
          <?php
                }?>
                <a href="?ref=<?=$prev?>">Prec</a>
                <a href="?ref=<?=$suiv?>">Suiv</a>
            <?php
            include 'footer.php';
           ?>

    </body>
</html>
