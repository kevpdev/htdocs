<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
         <link rel="stylesheet" href="css/style.css" />
        <title>La pizzéria "La Florentina" - Ajout d'un client</title>
    </head>
    <body>
        <header>
            <h1>Gestion des clients</h1>
     <a href="ListerClient.php">&lt;&lt; Retour à la liste</a>
  
        </nav>  
            <h2>Création d'un client</h2>
        </header>        
             
        <section>
            <aside>
              
            </aside>                
            <article>
                <form action="script/ajouter_client.php" method="POST">
                    <table width=150 >
    
                <tr>
                    <td><label for="">Nom</label></td>
                    <td><input type="text" name="nom"  placeholder="nom"/></td>
                </tr>
                 <tr>
                    <td><label for="">Prenom</label></td>
                    <td><input type="text" name="prenom"  placeholder="prenom"/></td>
                </tr>
                 <tr>
                    <td><label for="">Email</label></td>
                    <td><input type="email" name="email"  placeholder="email"/></td>
                </tr>
                 <tr>
                    <td><label for="">Adresse</label></td>
                    <td><input type="text" name="adresse"  placeholder="adresse"/></td>
                </tr>
                 <tr>
                    <td><label for="">Ville</label></td>
                    <td><input type="text" name="ville" placeholder="ville"/></td>
                </tr>
                 <tr>
                    <td><label for="">Code Postal</label></td>
                    <td><input type="number" name="code_postal"  min="10000" max="99999"/></td>
                </tr>
                  <tr>  
                    <td></td>               
                    <td ><input type="submit" value="Ajouter"/></td>
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