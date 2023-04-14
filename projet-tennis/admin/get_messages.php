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

$message_id = isset($_POST['id']) ? $_POST['id'] : null;
$new_type_message = isset($_POST['type_message']) ? $_POST['type_message'] : null;

if ($message_id !== null && $new_type_message !== null) {
  // Mettre à jour le type_message du message avec l'ID donné
  $query = $bdd->prepare('UPDATE messages SET type_message = :new_type_message WHERE id = :id');
  $query->execute(array('id' => $message_id, 'new_type_message' => $new_type_message));
}
// Récupération des messages depuis la base de données en fonction du type sélectionné
$req = $bdd->query($sql);
$messages = $req->fetchAll(PDO::FETCH_ASSOC);

// Conversion des résultats en format JSON et envoi de la réponse
header('Content-Type: application/json');
echo json_encode($messages);
?>