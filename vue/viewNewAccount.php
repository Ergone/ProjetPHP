  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../vue/NewAccount">
    <title>Création compte</title>
  </head>

  <body>
   <img src="../vue/logo.png" alt="logo" >
    <h1>Créer un compte H2O</h1>
    <?php
        if ($mauvaismdp) {
            echo "les mots de passe ne sont pas identiques.";
        } elseif ($pseudodejaexistant) {
            echo "ce pseudo existe déjà, Veuillez en choisir un autre.";
        } elseif ($rate) {
            echo "requete non valide erreur du serveur.";
        }
     ?>
    <form action="../controleur/ctrlapresinscriptionpage.php" method="post">
      <input type="text" name="pseudo" placeholder="Pseudo" required autofocus><br>
      <input type="email" name="mail" placeholder="Adresse E-mail" required><br>
      <input type="password" name="motdepasse" placeholder="Mot de passe" required><br>
      <input type="password" name="motdepasse2" placeholder="Retaper le mot de passe" required><br>
      <a href="../controleur/ctrlhomepage.php"><input class="input1" type="button" value="Annuler"></a><input class="input1" type="reset" value="Recommencer"><input class="input1" type="submit" value="Continuer"><br>
      <a href="../controleur/ctrlconnexionpage.php"><input type="button" value="Déjà membre ? Identifiez-vous"></a>
    </form>
  </body>

  <footer>
    <p>Copyright (c) 2018 Copyright Holder All Rights Reserved.</p>
  </footer>
