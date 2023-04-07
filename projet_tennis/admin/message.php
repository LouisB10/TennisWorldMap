<?php 
 include('../admin/connect.php');
 $isOnMessagePage = true;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TennisWorldMap - Messagerie</title>
    <link rel="icon" type="image/x-icon" href="../image/logo-remove.webp">
    <link rel="stylesheet" href=../css/style.css?v=<?=date("H:i:s")?>">
    <link rel="stylesheet" href="../css/navfooter.css?v=<?=date("H:i:s")?>">
    <link rel="stylesheet" href="../css/message.css?v=<?=date("H:i:s")?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,900&display=swap" rel="stylesheet">
    
</head>
<body>
<script src="../js/classe.js"></script>
<?php
 $isOnPage1 = false;
 $isOnPage2 =  false;
 $isOnPage3 = false; 
 $isOnPage4 =  false;
 include '../includes/header.php'; ?>
  <section>
    <div class="page-titre">
      <p class="titre">MESSAGERIE</p>
    </div>
    
    <div class="messagerie-div">

      <div class="boites-vertdiv">
          <a class="boite-choix active" href="?type_message=1">
              <p>Boîte de reception</p>
              <img  src="../image/icon-receptionnoir.png" alt="">
          </a>
          <a class="boite-choix" href="?type_message=2">
              <p>Messages archivés</p>
              <img  src="../image/icon-archivenoir.png" alt="">
          </a>
            <a class="boite-choix" href="?type_message=3">
              <p>Messages supprimés</p>
              <img  src="../image/icon-msgsup.png" alt="">
            </a>
      </div>
      <?php 
    $DB_NAME = "tennisworldmap";
    $DB_USER = "root";
    $DB_PASS = "";
    // Connexion à la base de données
    $bdd = new PDO('mysql:host=localhost;dbname=' . $DB_NAME, $DB_USER, $DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

     // Récupération de la valeur de type_message dans l'URL
  $type_message = isset($_GET['type_message']) ? $_GET['type_message'] : 1;

  // Construction de la requête SQL en fonction du type de message sélectionné
  if ($type_message == 1) {
    $sql = "SELECT * FROM messages WHERE type_message = 1";
  } else if ($type_message == 2) {
    $sql = "SELECT * FROM messages WHERE type_message = 2";
  } else if ($type_message == 3) {
    $sql = "SELECT * FROM messages WHERE type_message = 3";
  }


    // Récupération des messages depuis la base de données en fonction du type sélectionné
    $select = "SELECT * FROM messages WHERE type_message = $type_message ORDER BY date_envoi DESC";
    $req = $bdd->query($select);
    $messages = $req->fetchAll();

    // Affichage des messages
    foreach ($messages as $message) {
        echo '<div class="flex-msg-choix">
                  <div class="messagerie-message">
                      <div class="message-top">
                          <div class="top-info">
                            <img src="../image/icon-user.png" alt="">
                            <p>' . $message['nom'] . '-' . $message['prenom'] . '</p>
                          </div>
                          <div class="top-info">
                            <img src="../image/icon-email.png" alt="">
                            <p>' . $message['email'] . '</p>
                          </div>
                          <div class="top-info">
                            <img src="../image/icon-calendrier.png" alt="">
                            <p>' . date('d/m/Y', strtotime($message['date_envoi'])) . '</p>
                          </div> 
                        </div>
                      <div class="message-bottom">
                        <p>' . $message['message'] . '</p>
                      </div>
                  </div>
                  <div class="messagerie-choix">
                    <div class="choix-div">
                        <div class="choix-icon">
                          <img src="../image/icon-archive.png" alt="">
                        </div>
                        <div class="choix-texte">
                          <p>ARCHIVER</p>
                        </div>
                    </div>
                    <div class="choix-div">
                        <div class="choix-icon">
                          <img src="../image/icon-repondre.png" alt="">
                        </div>
                        <div class="choix-texte">
                          <p>REPONDRE</p>
                        </div>
                    </div>  
                    <div class="choix-div">
                        <div class="choix-icon">
                          <img src="../image/icon-supprimer.png" alt="">
                        </div>
                        <div class="choix-texte">
                          <p>SUPPRIMER</p>
                        </div>
                    </div>
                  </div>
              </div>';
    }
?>


      </div>
    </section>
  <?php include '../includes/footer.php'; ?>
</body>
</html>


