<?php
  // Connection au serveur
  $cnx =  new PDO('mysql:host=localhost;dbname=pizzeria2',"root", "");;
 
  // Récupération des valeurs des champs
  //$numero_commande = $_POST["numero_commande"];
  //$date_commande = $_POST["date_commande"];
   $numero_commande =date('Ymd').uniqid();
    $date_commande = date('Y-m-d H:i:s');
  $livreur_id = $_POST["livreur_id"];
  $client_id = $_POST["client_id"];
 
  // Affichage des résultats
  if(!empty($_POST['livreur_id']) && !empty($_POST['client_id']))
  { 
  	// Création de la requête SQL:
  	$sql = "INSERT  INTO commande (num_commande, date_commande, livreur_id, client_id)
            VALUES ('$numero_commande', '$date_commande', '$livreur_id', '$client_id') " ;
  	// Exécution de la requête SQL
 $stmt = $cnx->prepare("INSERT INTO commande (num_commande, date_commande, livreur_id, client_id)
            VALUES (?, ?, ?, ?) ");
            $stmt->bindParam(1, $numero_commande);
            $stmt->bindParam(2, $date_commande);
            $stmt->bindParam(3, $livreur_id);
            $stmt->bindParam(4, $client_id);
if($stmt->execute()){

    echo("L'insertion a été correctement effectuée") ;
  }
  else
  {
    echo("L'insertion à échouée");
  }
  }
?>
<br/>
<a href="../ListerCommande.php">Retour</a>