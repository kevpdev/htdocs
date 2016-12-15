<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
         <link rel="stylesheet" href="css/style.css" />
        <title>La pizzéria "La Florentina" - Ajout d'une pizza</title>
    </head>
    <body>
        <header>
            <h1>Gestion des pizzas</h1>
            <h2>Création d'une pizza</h2>
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
                <form action="script/ajouter_pizza.php" method="POST" enctype="multipart/form-data">
                    <table width=400>
    
                <tr>
                    <td><label for="">Libelle</label></td>
                    <td><input type="text" name="libelle" size="100" placeholder="libelle"/></td>
                </tr>
                 <tr>
                    <td><label for="">Référence</label></td>
                    <td><input type="text" name="reference" size="100" placeholder="reference"/></td>
                </tr>
                 <tr>
                    <td><label for="">Prix</label></td>
                    <td><input type="number" name="prix" step="0.01" size="100" placeholder="prix"/></td>
                </tr>
                 <tr>
                    <td><label for="">Url image</label></td>
                    <td><input type="file" name="url_image" size="100" placeholder="url"/></td>
                </tr>
                 <tr>
                    <td><label for="">Catégorie Pizza</label></td>
                 <td>  <select name="categ_pizza" >
                      <optgroup>Pizza</optgroup>
                      <option value="VIANDE">Viande</option>
                      <option value="SANS_VIANDE">Sans viande</option>
                      <option value="POISSON">Poisson</option></select></td>
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