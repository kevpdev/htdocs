<?php
  // Connection au serveur
 $cnx =  new PDO('mysql:host=localhost;dbname=pizzeria2',"root", "");
 
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
 
  	// Exécution de la requête SQL
 $stmt = $cnx->prepare("INSERT INTO client (nom, prenom, ville, adresse, email, code_postal)
            VALUES (?, ?, ?, ?, ?, ?) ");
            $stmt->bindParam(1, $nom);
            $stmt->bindParam(2, $prenom);
            $stmt->bindParam(3, $ville);
            $stmt->bindParam(4, $adresse);
            $stmt->bindParam(5, $email);
            $stmt->bindParam(6, $codePostal);
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
<!--<a href="javascript:window.history.back();">Retour</a>-->
<a href="../ListerClient.php">Retour</a>