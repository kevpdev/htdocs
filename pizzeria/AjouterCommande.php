<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
         <link rel="stylesheet" href="css/style.css" />
        <title>La pizzéria "La Florentina" - Ajout d'une commande</title>
    </head>
    <body>
        <header>
            <h1>Gestion des commandes</h1>
            <h2>Création d'une commande</h2>
        </header>        
        <nav>
            <ul id="navigation">
                <li><a href="Accueil.html">Retour à l'accueil</a></li>
            </ul>
        </nav>        
        <section>
            <aside>
              
            </aside>                
            <article>
                <form action="script/ajouter_commande.php" method="POST" enctype="multipart/form-data">
                    <table width=400>
    
                  <tr>
                    <td><label for="">Client</label></td>
                     <td>  <select name="client_id" >
                      <optgroup>client</optgroup>
                    <!-- Code PHP pour la boucle des lignes -->
<?php

    $cnx = mysql_connect( "localhost:3306", "root", "" ) or die(mysql_error());
    $db  = mysql_select_db( "pizzeria2" );
    $sql = mysql_real_escape_string("SELECT id, nom, prenom FROM client");
    $sql2 = mysql_real_escape_string("SELECT id, nom, prenom FROM livreur");
    mysql_query("SET NAMES 'utf8'");
    $reponse = mysql_query($sql, $cnx) or die( mysql_error() );
    $reponse2 = mysql_query($sql2, $cnx) or die( mysql_error() );
    while ($donnees=mysql_fetch_array($reponse))
    {
      echo'<option value="'.$donnees["id"].'">'.$donnees["nom"].' '.$donnees["prenom"].'</option>';
        }
?>



                </tr>
             <tr>
                    <td><label for="">Livreur</label></td>
                 <td>  <select name="livreur_id" >
                      <optgroup>commande</optgroup>
                      <?php
                        while ($donnees2=mysql_fetch_array($reponse2))
    {
      echo'<option value="'.$donnees2["id"].'">'.$donnees2["nom"].' '.$donnees2["prenom"].'</option>';
        }
                      ?>  
                </tr>
               <tr>
                      <td><td>  
                    <td><input type="submit" value="Ajouter"/></td>
                </tr>
                </table>
                </form>
  			 
			</article>

        </section>        
        <footer>
            <p>Copyright La Florentina - Tous droits réservés<br /><br />
            <a href="#" id="contact">Nous contacter</a></p>
        </footer>        
    </body>
</html>