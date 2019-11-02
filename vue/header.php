
<!DOCTYPE html>
  <html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="../vue/Page.css">
      <?php
        if (isset($_SESSION["session"])) {
            echo "<ul><li><a href=";
            echo "'../controleur/ctrlcomptepage.php'";
            echo ">";
            echo $_SESSION["session"];
            echo "</a></li>";
            echo "<li><a href=";
            echo "'../controleur/ctrldeconnexion.php'";
            echo ">Deconnexion</a></li></ul>";
        } else {
            echo "<ul><li><a href=";
            echo "'../controleur/ctrlconnexionpage.php'";
            echo ">Connexion</a></li>";
            echo "    <li><a href=";
            echo "'../controleur/ctrlinscriptionpage.php'";
            echo ">Inscription</a></li>
            </ul>";
        }
       ?>
      <img src="../vue/logo.png" alt="logo">
      <nav>
        <ul>
          <li><a href="../controleur/ctrlhomepage.php">Acceuil</a></li>
          <li><a href="viewCart.php">Panier</a></li>
          <?php
            if (isset($_SESSION["session"])) {
                echo "<li><a href=";
                echo "'../controleur/ctrlcomptepage.php'";
                echo ">Compte</a></li>";
            } else {
            }
           ?>
          <li><a href="../controleur/ctrlgamepage.php">Jeux</a></li>
          <li><a href="../controleur/ctrlcategoriepage.php?cat=1">Categorietest</a></li>
        </ul>
      </nav>
      <title><?= $title ?></title>
    </head>
