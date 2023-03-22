<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page de classement ATP">
    <title>TennisWorldMap</title>
    <link rel="icon" type="image/x-icon" href="image/favicon.png">
    <link rel="stylesheet" href="style.css?v=<?=date("H:i:s")?>">
    <link rel="stylesheet" href="navfooter.css?v=<?=date("H:i:s")?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
<header>
   <nav class="menu-navigation">
  <div class="menu-decoration-left">
    <img src="image/decovert.webp" alt="Décoration verte" class="decoration-verte deco-reverse" />
    <img src="image/decojaune.webp" alt="Décoration jaune" class="decoration-jaune" />
  </div>
  <div class="nav-links-left"> 
    <ul>
      <li>
        <a href="index.php" class="nav-link">Carte</a>
      </li>
      <li>
        <a href="classement.php" class="nav-link" id="page-actuelle">Classement <br>ATP</a>
      </li>
    </ul>
  </div>
  <div class="menu-logo">
    <a href="index.php" class="logoo"  aria-label="Carte">
      <img src="image/logo.webp" alt="Logo" class="logo" />
    </a>
  </div>
  <div class="nav-links-right">
    <ul>
      <li>
        <a href="calendrier.php" class="nav-link">Calendrier<br>des tournois</a>
      </li>
      <li>
        <a href="contact.php" class="nav-link">Contact</a>
      </li>
    </ul>
  </div>
  <div class="menu-decoration-right">
    <img src="image/decojaune.webp" alt="Décoration jaune"  class="decoration-jaune deco-reverse" />
    <img src="image/decovert.webp" alt="Décoration verte" class="decoration-verte" />
  </div>
  </nav>
  </header>
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
 <footer class="footer">
  <div class="logo-bottom">
    <a href="index.php" aria-label="Revenir à la page d'accueil"><img alt="" src="image/logo.webp" class="logo-btm"></a>
  </div>
</footer>
<script src="script.js"></script>
</body>
</html>



<?php
//    try {
//     $conn = new PDO("mysql:host=localhost;dbname=atp_rankings", "root", "");
//     $conn->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected to the database successfully!";
// }
// catch (PDOException $e) {
//     die("Error connecting to database: " . $e->getMessage());
// }
?> 