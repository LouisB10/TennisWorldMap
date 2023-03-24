<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messagerie</title>
    <link rel="icon" type="image/x-icon" href="image/favicon.png">
    <link rel="stylesheet" href=style.css ?v=<?=date("H:i:s")?>">
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
        <a href="index.php" class="nav-link" >Carte</a>
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
        <a href="calendrier.php" class="nav-link">Calendrier<br>des tournois</a>
      </li>
      <li>
        <a href="contact.php" class="nav-link" >Contact</a>
      </li>
    </ul>
  </div>
  <div class="menu-decoration-right">
    <img src="image/decojaune.webp" alt="Décoration jaune"  class="decoration-jaune deco-reverse" />
    <img src="image/decovert.webp" alt="Décoration verte" class="decoration-verte" />
  </div>
  </nav>
  </header>
  <section class="messagerie-section">
    <div class="page-titre">
      <p class="titre">MESSAGERIE</p>
    </div>
    <div>
      <button class="btn-connexion">Se déconnecter</button>
    </div>
  </section>
  <footer class="footer" id="lol">
  <div class="logo-bottom">
    <a href="index.php" aria-label="Revenir à la page d'accueil"><img alt="" src="image/logo.webp" class="logo-btm"></a>
  </div>
</footer>
</body>
</html>

<?php
    include('./connect.php');

    if(empty($_SESSION["admin"])) {        
  // Permet de détruire la session PHP courante ainsi que toutes les données rattachées
        session_destroy();
        header("Location: connexion.php");
    }
?>


