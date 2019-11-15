  <?php
    $title = 'Acceuil';
    include 'header.php';
   ?>

    <body>
      <h1>Acceuil</h1>
      <?php
      if (isset($_SESSION["session"])) {
          echo "Bienvenue sur H2O ".$_SESSION["session"];
      } else {
          echo "Bienvenue sur H2O";
      }

       ?>
    </body>

    <?php
      include 'footer.php';
     ?>
  </html>
