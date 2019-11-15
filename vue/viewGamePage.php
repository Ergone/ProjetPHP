<?php
  $title = 'Acceuil';
  include 'header.php';
 ?>
    <body>
            <h1>Jeux</h1>
            <br><br><br>
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
            <a href="?ref=<?=$prev?>"><button>Prec</button></a>
            <a href="?ref=<?=$suiv?>"><button>Suiv</button></a>
            <?php
                include 'footer.php';
           ?>
    </body>
</html>
