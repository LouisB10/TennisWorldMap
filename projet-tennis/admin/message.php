<?php 
 include('../admin/connect.php');
 $isOnMessagePage = true;
 if(!isset($_SESSION['admin'])) { // vérifier si l'utilisateur est connecté
  header('Location: ../pages/contact.php'); // rediriger vers la page de connexion
  exit(); // arrêter l'exécution du script
}
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
          <a class="boite-choix" id="boite-reception" >
              <p>Boîte de reception</p>
              <img  src="../image/icon-receptionnoir.png" alt="boite de reception icone">
          </a>
          <a class="boite-choix" id="boite-archive" >
              <p>Messages archivés</p>
              <img  src="../image/icon-archivenoir.png" alt="boite archive icone">
          </a>
          <a class="boite-choix" id="boite-supprime" >
              <p>Messages supprimés</p>
              <img  src="../image/icon-msgsup.png" alt="boite corbeille icone">
           </a>
      </div>
      <div class="telle"></div>
    </div>
      <?php if(!isset($_SESSION['admin'])) {
              echo '<button class="btn-connexion">Déconnexion</button>';
          } ?>
    </section>
  <?php include '../includes/footer.php'; ?>
  <script src="../js/message.js"></script>
  <!-- <script src="../js/classe.js"></script> -->
</body>
</html>
