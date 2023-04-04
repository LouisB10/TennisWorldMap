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
          <div class="boite-choix" >
              <p>Boîte de reception</p>
              <img  src="../image/icon-receptionnoir.png" alt="">
          </div>
          <div class="boite-choix">
              <p>Messages archivés</p>
              <img  src="../image/icon-archivenoir.png" alt="">
          </div>
          <div class="boite-choix"> 
              <p>Messages supprimés</p>
              <img  src="../image/icon-msgsup.png" alt="">
          </div>
      </div>
   
    <div class="flex-msg-choix">
      <div class="messagerie-message">
          <div class="message-top">
              <div class="top-info">
                <img src="../image/icon-user.png" alt="">
                <p>Nom-Prenom</p>
              </div>
              <div class="top-info">
                <img src="../image/icon-email.png" alt="">
                <p>adresse@mail.com</p>
              </div>
              <div class="top-info">
                <img src="../image/icon-calendrier.png" alt="">
                <p>??/??/??</p>
              </div> 
            </div>
          <div class="message-bottom">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel porta dui. Vivamus ac est sed turpis ultricies scelerisque. Donec neque tortor, tempor et fermentum a, iaculis at augue. Morbi vehicula sem ut ipsum hendrerit efficitur. Maecenas semper orci nunc, eu porttitor sapien tristique non. Praesent rhoncus facilisis consectetur. Etiam vestibulum fermentum felis in suscipit. Aenean eget finibus urna, ut faucibus massa. Cras porttitor, risus et dictum rhoncus, odio turpis fermentum molestie.</p>
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
            <!-- <div class="choix-div">
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
            </div> -->
        </div>  

      </div>
    </section>
  <?php include '../includes/footer.php'; ?>
</body>
</html>


