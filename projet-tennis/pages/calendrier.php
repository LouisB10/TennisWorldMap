<?php 
 include('../admin/connect.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page de calendrier des tournois">
    <title>TennisWorldMap - Calendrier</title>
    <link rel="icon" type="image/x-icon" href="../image/logo-remove.webp">
    <link rel="stylesheet" href="../css/style.css?v=<?=date("H:i:s")?>">
    <link rel="stylesheet" href="../css/calendrier.css?v=<?=date("H:i:s")?>">
    <link rel="stylesheet" href="../css/navfooter.css?v=<?=date("H:i:s")?>">
    <link rel="stylesheet" href="../css/test.css?v=<?=date("H:i:s")?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
<?php 
 $isOnPage1 = false;
 $isOnPage2 =  false;
 $isOnPage3 =  true;
 $isOnPage4 = false;

include '../includes/header.php'; ?>
  <section class="calendrier-section">
    <div class="page-titre">
      <p class="titre" >CALENDRIER</p>
    </div>
    <div class="choisir-mois">
      <div class="calendrier-choice">
        <button class="mois" id="jan">JANVIER</button>
        <button class="mois" id="fev">FEVRIER</button>
        <button class="mois" id="mars" >MARS</button>
        <button class="mois" id="avr">AVRIL</button>
        <button class="mois" id="mai">MAI</button>
        <button class="mois" id="juin">JUIN</button>
        <button class="mois" id="juil">JUILLET</button>
        <button class="mois" id="aout">AOUT</button>
        <button class="mois" id="sep">SEPTEMBRE</button>
        <button class="mois" id="oct">OCTOBRE</button>
        <button class="mois" id="nov">NOVEMBRE</button>
        <button class="mois" id="dec">DECEMBRE</button>
      </div>
    </div>
    <div class="calendrier-box">
      <div class="calendrier-t">
        <div class="calendrier-t-date">
          <p class="calendrier-text">Du ?? janvier au ?? janvier 2023</p>
        </div>
        <div class="calendrier-t-info">

        </div>
      </div>
      <div class="calendrier-button">
        <div class="button-left"> 
          <button class="previous"><i class="btnleft"></i>Mois précédent </button>
        </div>
        <div class="button-mid"> 
          <button class="choice">Choisir le mois<i class="btnmid"></i></button>
        </div>
        <div class="button-right"> 
          <button class="next">Mois suivant <i class="btnright"></i></button>
        </div>
      </div>
    </div>
  </section>
  <?php include '../includes/footer.php'; ?>
</body>
</html>