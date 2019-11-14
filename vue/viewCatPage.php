<?php
  $title = 'Acceuil';
  include 'header.php';
 ?>
    <body>
            <h1>Catégorie <?php echo $jeux[0]->getCategorie(); ?></h1>
            <form action="../controleur/ctrlcategoriepage.php" method="get">
                <select name="cat">
                    <option value="1">Aventure</option>
                    <option value="2">Compilation</option>
                    <option value="3">Course</option>
                    <option value="4">FPS</option>
                    <option value="5">Gestion</option>
                    <option value="6">MMORPG</option>
                    <option value="7">Nouveau genres</option>
                    <option value="8">Plateforme</option>
                    <option value="9">RPG</option>
                    <option value="10">Simulation</option>
                    <option value="11">Sport</option>
                </select>
                <input type="submit">
            </form>

            <?php    
            echo "<table>";
            echo "<tr>";
            foreach ($jeux as $value) {
                ?><article class=""><?php
                echo "<td>";
                echo "<table>";
                echo "<tr>";
                echo "<td>".$value->getLibelle()."</td>";
                echo "<tr>";
                echo "<td><a href=\"../controleur/ctrlgamedescriptionpage.php?jeu=".$value->getRef()."\"><img src=\"../data/images/".$value->getImage()."\" width=\"300\" height=\"200\"></a></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Quantité :".$value->getQuantite()."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Prix : ".$value->getPrix()."€</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Description : ".$value->getDescription()."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td><a href=\"../controleur/ctrlapresachat.php?jeu=".$value->getRef()."\"><p>Ajouter au panier  : ".$value->getPrix()."€</p></a></td>";
                echo "</tr>";
                echo "</table>";
                echo "</td>";
                echo "</article>";
            }
            echo "</tr>";
            echo "</table>";
            echo "<hr>";?>
            <?php
                include 'footer.php';
           ?>
    </body>
</html>
