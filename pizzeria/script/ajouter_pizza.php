<?php
  // Connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  // Sélection de la base de données:
  $db  = mysql_select_db( "pizzeria2" ) ;
 
  // Récupération des valeurs des champs
  $libelle = $_POST["libelle"];
  $reference = $_POST["reference"];
  $prix = $_POST["prix"];
    $categ_pizza = $_POST["categ_pizza"];
  $url_image = $_FILES['url_image']['name'];
 
  // Affichage des résultats
  if(!empty($_POST['libelle']) && !empty($_POST['reference']) && !empty($_POST['prix']) && !empty($_FILES['url_image']) && !empty($_POST['categ_pizza']))
  { 
  	// Création de la requête SQL:
  	$sql = "INSERT INTO pizza (libelle, reference, prix, url_image, categ_pizza)
            VALUES ('$libelle', '$reference', '$prix', '$url_image', '$categ_pizza') " ;
 
  	// Exécution de la requête SQL:
  	mysql_query("SET NAMES 'utf8'");
  	$requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
    echo("L'insertion a été correctement effectuée") ;
  }
  else
  {
    echo("L'insertion à échouée");
  }
?>
<br />
<a href="../ListerPizza.php">Retour</a>