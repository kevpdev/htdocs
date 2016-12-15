<?php
  // Connection au serveur
 $cnx =  new PDO('mysql:host=localhost;dbname=pizzeria2',"root", "");

 
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
  /*	$sql = "INSERT INTO pizza (libelle, reference, prix, url_image, categ_pizza)
            VALUES ('$libelle', '$reference', '$prix', '$url_image', '$categ_pizza') " ;
 */
 $stmt = $cnx->prepare("INSERT INTO pizza (libelle, reference, prix, url_image, categ_pizza)
            VALUES (?, ?, ?, ?, ?) ");
            $stmt->bindParam(1, $libelle);
            $stmt->bindParam(2, $reference);
            $stmt->bindParam(3, $prix);
            $stmt->bindParam(4, $url_image);
            $stmt->bindParam(5, $categ_pizza);
if($stmt->execute()){

    echo("L'insertion a été correctement effectuée") ;
  }
  else
  {
    echo("L'insertion à échouée");
  }
  }
?>
<br />
<a href="../ListerPizza.php">Retour</a>