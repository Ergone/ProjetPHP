<?php
  $title = 'Acceuil';
  include 'header.php';
 ?>
    <body>
            <h1>Jeux</h1>
                <?php
                foreach ($jeux as $value) {
                    ?><article class=""><?php
                    echo $value->getLibelle();?><br>
                    <?php
                    ?>
                        <img src="../data/images/<?php echo $value->getImage() ?>" width="300" height="200"><br>
                        <?php echo $value->getQuantite();?><br>
                        <?php echo $value->getPrix();?><br>
                        <?php echo $value->getDescription();?><br><br><br>

                    </article>
          <?php
                }
            include 'footer.php';
           ?>
    </body>
</html>
