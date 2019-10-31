<?php
  $title = 'Votre compte';
  include 'header.php';
 ?>

  <body>
    <h1>Votre compte</h1>
    <br>
    <?php
    echo $utilisateur[0]->getMail();?><br><?php
    echo $utilisateur[0]->getLocalisation();?><br><?php
     ?>
  </body>

  <?php
    include 'footer.php';
   ?>

</html>
