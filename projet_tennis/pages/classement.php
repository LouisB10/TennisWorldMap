<?php 
 include('../admin/connect.php');

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page de classement ATP">
    <title>TennisWorldMap - Classement</title>
    <link rel="icon" type="image/x-icon" href="../image/favicon.png">
    <link rel="stylesheet" href="../css/style.css?v=<?=date("H:i:s")?>">
    <link rel="stylesheet" href="../css/navfooter.css?v=<?=date("H:i:s")?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
  <?php 
   $isOnPage1 = false;
   $isOnPage2 =  true;
   $isOnPage3 = false;
   $isOnPage4 = false;
  include '../includes/header.php'; ?>
  <section class="classement-section">
    <div class="page-titre">
      <p class="titre">CLASSEMENT ATP</p>
    </div>
    <div class="choice-div">
      <div class="classement-choice">
        <button id="rang">RANG</button>
        <button id="pays">PAYS</button>
        <button id="joueur">JOUEUR</button>
        <button id="points">POINTS</button>
        <button id="age">ÂGE</button>
        <button id="photos">PHOTOS</button>
        <button id="gains">GAINS EN €</button>
        <button id="taille">TAILLE</button>
        <button id="poids">POIDS</button>
        <button id="style">STYLE</button>
        <button id="reset">RÉINITIALISER</button>
      </div>
    </div>
    <div class="classement-actuel">
      <div class="div-actuel">
        <p id="text-actuel">CLASSEMENT ACTUEL SAISON 2022/2023</p>
      </div>
    </div>
    <div class="tablo">
      <table class="rankingTable">
        <thead>     
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
    <button class="nextPlayer">Afficher les 25 suivants</button>
  </section>
  <?php include '../includes/footer.php'; ?>
<script src="../js/script.js"></script>
</body>
</html>