<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
         <link rel="stylesheet" href="css/style.css" />
        <title>La pizzéria "La Florentina" - liste des clients</title>
    </head>
    <body>
        <header>
            <h1>La Florentina</h1>
            <h2>Liste des clients</h2>
        </header>        
        <nav>
            <ul id="navigation">
                <li><a href="Accueil.html">Retour à l'accueil</a></li>
                <li><a href="AjouterClient.php">Ajouter un client</a></li>
            </ul>
        </nav>        
        <section>
            <aside>
              
            </aside>                
            <article>
                 <table width=100%>
                <tr>
                    <th align="left">Id</th>
                    <th align="left">NOM</th>
                    <th align="left">Prénom</th>
                      <th align="left">Email</th>
                    <th align="left">Adresse</th>
                    <th align="left">Ville</th>
                   <th align="left">Code Postal</th>
                    
                    </tr>

<!-- Code PHP pour la boucle des lignes -->
<?php

    $cnx = mysql_connect( "localhost:3306", "root", "" ) or die(mysql_error());
    $db  = mysql_select_db( "pizzeria2" );
    $sql = mysql_real_escape_string("SELECT * FROM client");
    mysql_query("SET NAMES 'utf8'");
    $reponse = mysql_query($sql, $cnx) or die( mysql_error() );

    while ($donnees=mysql_fetch_array($reponse))
    {

?>

                <tr>
                                <td align="left"> <?php echo $donnees["id"]; ?></td>
                    <td align="left"> <?php echo $donnees["nom"]; ?></td>
                    <td align="left"> <?php echo $donnees["prenom"]; ?></td>
                      <td align="left"> <?php echo $donnees["email"]; ?></td>
                    <td align="left"> <?php echo $donnees["adresse"]; ?></td>
                    <td align="left"> <?php echo $donnees["ville"]; ?></td>
                   <td align="left"> <?php echo $donnees["code_postal"]; ?></td>
                   <td><a href="" class="action">modifier</a> <a href="" class="action">supprimer</a></td>
                    </tr>
                 
             


<?php

    }

?>
   </table>
			</article>

        </section>        
        <footer>
            <p>Copyright La Florentina - Tous droits réservés<br /><br />
           <a href="#" id="contact">Nous contacter</a></p>
        </footer>        
    </body>
</html>