<?php
  $title = 'Votre compte';
  include 'header.php';
 ?>

  <body>
    <h1>Votre compte</h1>
    <br>
    <?php
    echo "Pseudo : ".$utilisateur[0]->getPseudo();
    echo "<br>";
    echo "Adresse mail : ".$utilisateur[0]->getMail();?><br><?php

    // if ($utilisateur[0]->getLocalisation()) {
    //     echo $utilisateur[0]->getLocalisation();?><br><?php
    // }
     ?>
  </body>

  <?php
    include 'footer.php';
   ?>

</html>
