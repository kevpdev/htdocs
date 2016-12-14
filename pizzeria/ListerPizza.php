<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>La pizzéria "La Florentina" - liste des pizzas</title>
    </head>
    <body>
        <header>
            <h1>La Florentina</h1>
            <h2>Liste des pizzas</h2>
        </header>        
        <nav>
            <ul>
                <li><a href="Accueil.html">Retour à l'accueil</a></li>
                <li><a href="AjouterPizza.php">Ajouter une pizza</a></li>
            </ul>
        </nav>        
        <section>
            <aside>
              
            </aside>                
            <article>
                 <table width=100%>
                <tr>
                   <th align="left">Id.</th>
                              <th align="left">Libelle</th>
                              <th align="left">Référence</th>
                              <th align="left">Prix</th>
                              <th align="left">Photo</th>
                    
                    </tr>

<!-- Code PHP pour la boucle des lignes -->
<?php

    $cnx = mysql_connect( "localhost:3306", "root", "" ) or die(mysql_error());
    $db  = mysql_select_db( "pizzeria2" );
    $sql = mysql_real_escape_string("SELECT * FROM pizza");
    mysql_query("SET NAMES 'utf8'");
    $reponse = mysql_query($sql, $cnx) or die( mysql_error() );

    while ($donnees=mysql_fetch_array($reponse))
    {

?>

                <tr>
                    <td align="left"> <?php echo $donnees["id"]; ?></td>
                    <td align="left"> <?php echo $donnees["libelle"]; ?></td>
                    <td align="left"> <?php echo $donnees["reference"]; ?></td>
                    <td align="left"> <?php echo $donnees["prix"]; ?> €</td>
                    <td align="left"> <?php echo $donnees["categ_pizza"]; ?></td>
                    <td><a href="">modifier</a> <a href="">supprimer</a></td>
                   </tr>


<?php

    }

?>
   </table>
			</article>

        </section>        
        <footer>
            <p>Copyright La Florentina - Tous droits réservés<br /><br />
            <a href="#">Nous contacter</a></p>
        </footer>        
    </body>
</html>