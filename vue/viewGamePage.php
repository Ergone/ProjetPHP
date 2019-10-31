<?php
  $title = 'Acceuil';
  include 'header.php';
 ?>
    <body>
            <h1>Jeux</h1>
            <a href="?ref=<?=$prev?>">Prec</a>
            <a href="?ref=<?=$suiv?>">Suiv</a>
            <!-- <aside class="filtres">
        <form action="index.html" method="post"> -->
          <!-- <fieldset>
            <legend>Filtres</legend>
            <fieldset>
              <legend>Prix</legend>
              <label for="prixminimal">De</label>
              <input type="number" name="prixmin" id="prixminimal" placeholder="0" >
              <label for="prixmaximal">à</label>
              <input type="number" name="prixmax" id="prixmaximal" placeholder="+∞" >
            </fieldset>

            <fieldset>
              <legend>Genre</legend>
              <input type="checkbox" name="type[]" id="type1" value="mmo">
              <label for="type1">MMO</label><br>
              <input type="checkbox" name="type[]" id="type2" value="platformer">
              <label for="type2">Platformer</label><br>
              <input type="checkbox" name="type[]" id="type3" value="pointclick">
              <label for="type3">Point & Click</label><br>
              <input type="checkbox" name="type[]" id="type4" value="arcade">
              <label for="type4">Arcade</label><br>
              <input type="checkbox" name="type[]" id="type5" value="rts">
              <label for="type5">RTS</label><br>
              <input type="checkbox" name="type[]" id="type6" value="course">
              <label for="type6">Course</label><br>
              <input type="checkbox" name="type[]" id="type7" value="aventure">
              <label for="type7">Aventure</label><br>
              <input type="checkbox" name="type[]" id="type8" value="action">
              <label for="type8">Action</label><br>
              <input type="checkbox" name="type[]" id="type9" value="combat">
              <label for="type9">Combat</label><br>
              <input type="checkbox" name="type[]" id="type10" value="horreur">
              <label for="type10">Horreur</label><br>
              <input type="checkbox" name="type[]" id="type11" value="inde">
              <label for="type11">Indé</label><br>
              <input type="checkbox" name="type[]" id="type12" value="rpg">
              <label for="type12">RPG</label><br>
              <input type="checkbox" name="type[]" id="type13" value="simulation">
              <label for="type5">Simulation</label><br>
              <input type="checkbox" name="type[]" id="type14" value="sport">
              <label for="type5">Sport</label><br>
              <input type="checkbox" name="type[]" id="type15" value="strategie">
              <label for="type15">Stratégie</label><br>
              <input type="checkbox" name="type[]" id="type16" value="actionshooter">
              <label for="type16">Action shooter</label>
            </fieldset>

            <fieldset>
              <legend>Région de disponnibilité</legend>
              <input type="radio" name="region" value="monde" >
              <label for=""></label>Monde<br>
              <input type="radio" name="region" id="europe" value="europe" >
              <label for="europe"></label>Europe<br>
              <input type="radio" name="region" id="na" value="ameriquenord" >
              <label for="na"></label>Amérique du Nord<br>
              <input type="radio" name="region" id="latam" value="ameriquelatine" >
              <label for="latam"></label>Amérique Latine<br>
              <input type="radio" name="region" id="russie" value="russie" >
              <label for="russie"></label>Communauté des États indépendants / Russie<br>
            </fieldset>

            <fieldset>
                <legend>Support</legend>
                <input type="checkbox" name="appareil[]" id="pc" value="pc">
                <label for="pc"></label>PC<br>
                <input type="checkbox" name="appareil[]" id="ps4" value="ps4" >
                <label for="PS4"></label>PS4<br>
                <input type="checkbox" name="appareil[]" id="xbox" value="xboxone" >
                <label for="xbox"></label>Xbox One<br>
                <input type="checkbox" name="appareil[]" id="switch" value="switch" >
                <label for="switch"></label>Nintendo Switch<br>
              </fieldset>

          </fieldset>
        </form>
      </aside> -->
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
                }?>
                <a href="?ref=<?=$prev?>">Prec</a>
                <a href="?ref=<?=$suiv?>">Suiv</a>
            <?php
            include 'footer.php';
           ?>

    </body>
</html>
