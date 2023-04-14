<?php
// Connexion à la base de données
$DB_NAME = "tennisworldmap";
$DB_USER = "root";
$DB_PASS = "";
$bdd = new PDO('mysql:host=localhost;dbname=' . $DB_NAME, $DB_USER, $DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

// Vérification de l'ID du message et de l'action demandée
if (isset($_GET['id']) && is_numeric($_GET['id']) && isset($_GET['action']) && $_GET['action'] === 'supprimer') {
  $messageId = $_GET['id'];
  
  // Mettre à jour le type du message à 2 (supprimé)
  $sql = "UPDATE messages SET type_message = 3 WHERE id = :id";
  $req = $bdd->prepare($sql);
  $req->bindParam(':id', $messageId, PDO::PARAM_INT);
  $req->execute();
}

// Récupération des messages selon leur type depuis la base de données
if (isset($_GET['type_message']) && ($_GET['type_message'] == 1 || $_GET['type_message'] == 2 || $_GET['type_message'] == 3)) {
    $type_message = $_GET['type_message'];
    $sql = "SELECT * FROM messages WHERE type_message = :type_message";
    $req = $bdd->prepare($sql);
    $req->bindParam(':type_message', $type_message, PDO::PARAM_INT);
    $req->execute();
    $messages = $req->fetchAll(PDO::FETCH_ASSOC);
  } else {
    $sql = "SELECT * FROM messages";
    $req = $bdd->query($sql);
    $messages = $req->fetchAll(PDO::FETCH_ASSOC);
  }
// Conversion des résultats en format JSON et envoi de la réponse
header('Content-Type: application/json');
echo json_encode($messages);
?>