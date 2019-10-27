<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <a href="#">Menu</a>
            <h1>Jeux</h1>
            <a href="?ref=<?=$prev?>">Prec</a>
            <a href="?ref=<?=$suiv?>">Suiv</a>
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
