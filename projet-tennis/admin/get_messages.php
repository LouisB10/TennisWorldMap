<?php

// Connexion à la base de données
$DB_NAME = "tennisworldmap";
$DB_USER = "root";
$DB_PASS = "";
$bdd = new PDO('mysql:host=localhost;dbname=' . $DB_NAME, $DB_USER, $DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

// Récupération de la valeur de type_message
$type_message = isset($_GET['type_message']) ? $_GET['type_message'] : 1;

// Construction de la requête SQL en fonction du type de message sélectionné
if ($type_message == 1) {
    $sql = "SELECT * FROM messages WHERE type_message = 1";
} else if ($type_message == 2) {
    $sql = "SELECT * FROM messages WHERE type_message = 2";
} else if ($type_message == 3) {
    $sql = "SELECT * FROM messages WHERE type_message = 3";
}
// Vérification si une demande de suppression a été envoyée
$message_id = isset($_POST['id']) ? $_POST['id'] : null;

if ($message_id !== null) {
  // Suppression du message avec l'id donné
  $query = $bdd->prepare('DELETE FROM messages WHERE id = :id');
  $query->execute(array('id' => $message_id));
}
// Récupération des messages depuis la base de données en fonction du type sélectionné
$req = $bdd->query($sql);
$messages = $req->fetchAll(PDO::FETCH_ASSOC);

// Conversion des résultats en format JSON et envoi de la réponse
header('Content-Type: application/json');
echo json_encode($messages);
?>