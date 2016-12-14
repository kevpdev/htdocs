<?php
  // Connection au serveur
  $cnx = mysqli_connect( "localhost:3306", "root", "" ) ;
 
  // Sélection de la base de données:
  $db  = mysqli_select_db( "pizzeria2" ) ;
 
  // Récupération des valeurs des champs
  $nom     = strtoupper($_POST["nom"]);
  $prenom = $_POST["prenom"];
  $ville = strtoupper($_POST["ville"]);
   $email = $_POST["email"];
    $adresse = $_POST["adresse"];
        $codePostal = $_POST["code_postal"];
 
  // Affichage des résultats
  if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['ville']) && !empty($_POST['email']))
  { 
  	// Création de la requête SQL:
  	$sql = "INSERT  INTO client (nom, prenom, ville, adresse, email, code_postal)
            VALUES ('$nom', '$prenom', '$ville', '$adresse', '$email', '$codePostal') " ;
 
  	// Exécution de la requête SQL
  	mysqli_query("SET NAMES 'utf8'");
  	$requete = mysqli_query($sql, $cnx) or die( mysql_error() ) ;
    echo("L'insertion a été correctement effectuée") ;
  }
  else
  {
    echo("L'insertion à échouée") ;
  }
?>
<br />
<a href="javascript:window.history.back();">Retour</a>