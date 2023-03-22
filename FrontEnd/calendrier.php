<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page de calendrier des tournois">
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
        <a href="classement.php" class="nav-link">Classement <br>ATP</a>
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
        <a href="calendrier.php" class="nav-link" id="page-actuelle">Calendrier<br>des tournois</a>
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
 <footer class="footer">
  <div class="logo-bottom">
    <a href="index.php" aria-label="Aller à l'accueil du site"><img alt="" src="image/logo.webp" class="logo-btm"></a>
  </div>
</footer>
</body>
</html>