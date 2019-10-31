  <?php
    $title = 'Acceuil';
    include 'header.php';
   ?>

    <body>
      <h1>Acceuil</h1>
      <?php
      if (isset($_SESSION["session"])) {
          echo $_SESSION["session"];
      } else {
          echo "bizarre";
      }

       ?>
    </body>

    <?php
      include 'footer.php';
     ?>
  </html>
