<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../vue/Login">
    <title>Identification</title>
  </head>
  <body>
    <img src="../vue/logo.png" alt="logo" >
    <h1>Identifiez-vous</h1>
    <?php
        if ($rate) {
            echo "Mauvais identifiant ou motdepasse ";
        }
     ?>
    <form class="" action="../controleur/ctrlapresconnexionpage.php" method="post">
      <input type="text" name="pseudo" placeholder="Pseudo" required autofocus><br>
      <input type="password" name="motdepasse" placeholder="Mot de passe" required><br>
      <a  href="../controleur/ctrlhomepage.php"><input class="input1" type="button" value="Annuler"></a><input class="input1" type="submit" value="Continuer"><br>
      <a href="../controleur/ctrlinscriptionpage.php"><input type="button" name="creer" value="Nouveau chez H2O ? Créer votre compte"></a>
    </form>
  </body>

  <footer>
    <p>Copyright (c) 2018 Copyright Holder All Rights Reserved.</p>
  </footer>
