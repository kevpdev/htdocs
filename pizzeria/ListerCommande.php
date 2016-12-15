<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
         <link rel="stylesheet" href="css/style.css" />
        <title>La pizzéria "La Florentina" - liste des commandes</title>
    </head>
    <body>
        <header>
            <h1>La Florentina</h1>
            <h2>Liste des commandes</h2>
        </header>        
        <nav>
            <ul id="navigation">
                <li><a href="Accueil.html">Retour à l'accueil</a></li>
                <li><a href="AjouterCommande.php">Ajouter une commandes</a></li>
            </ul>
        </nav>        
        <section>
            <aside>
              
            </aside>                
            <article>
                 <table width=100%>
                <tr>
                   <th align="left">Id.</th>
                              <th align="left">N° commande</th>
                              <th align="left">Date de commande</th>
                              <th align="left">Statut</th>
                              <th align="left">Client</th>
                                 <th align="left">Livreur</th>
                    
                    </tr>

<!-- Code PHP pour la boucle des lignes -->
<?php

    $cnx = mysql_connect( "localhost:3306", "root", "" ) or die(mysql_error());
    $db  = mysql_select_db( "pizzeria2" );
    $sql = mysql_real_escape_string("SELECT cde.`id`, cde.`date_commande`, cde.`num_commande`, cde.`statut`, c.nom as nomcli, c.prenom as prenomcli, l.nom as nomli, l.prenom AS prenomli FROM `commande` cde INNER JOIN client c ON cde.client_id = c.id INNER JOIN livreur l ON cde.livreur_id = l.id ");
    mysql_query("SET NAMES 'utf8'");
    $reponse = mysql_query($sql, $cnx) or die( mysql_error() );

    while ($donnees=mysql_fetch_array($reponse))
    {

?>

                <tr>
                                <td align="left"> <?php echo $donnees["id"]; ?></td>
                    <td align="left"> <?php echo $donnees["num_commande"]; ?></td>
                    <td align="left"> <?php echo $donnees["date_commande"]; ?></td>
                      <td align="left"> <?php echo $donnees["statut"]; ?></td>
                    <td align="left"> <?php echo ($donnees["nomcli"].' '.$donnees["prenomcli"]);?></td>
                     <td align="left"> <?php echo ($donnees["nomli"].' '.$donnees["prenomli"]);?></td>
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
           <a href="#" id="contact">Nous contacter</a></p>
        </footer>        
    </body>
</html>