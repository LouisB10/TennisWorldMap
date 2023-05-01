<header>
  <nav class="nav-bar" role="navigation">
    <div class="decoration-left">
      <img src="../image/decovert.webp" alt="decoration en haut à gauche nav bar" class="deco-fixed" style="transform: scaleY(-1);" />
      <img src="../image/decojaune.webp" alt="decoration en bas à gauche nav bar" class="deco-relative" />
      <img src="../image/decovert-top.webp" alt="decoration en bas à gauche nav bar burger" class="deco-hamburger" id="deco-left">
    </div>
    <div class="links-left">
      <ul>
        <li><a href="../pages/index.php" aria-label="Carte interactive du monde" <?php echo $isOnPage1 ? 'class="page-actuelle"' : '' ?>>Carte</a></li>
        <li><a href="../pages/classement.php" aria-label="Classement ATP" <?php echo $isOnPage2 ? 'class="page-actuelle"' : '' ?>>Classement</br class="br-links"> ATP</a></li>
      </ul>
    </div>
    <div class="div-center">
      <a href="../pages/index.php" class="logo"><img src="../image/logo.webp" alt="logo tennisworldmap"></a>
      <div class="hamburger-btn">
        <button type="button" class="script-hamburger" onclick="displayMenu()" aria-expanded="false" aria-haspopup="true" aria-controls=".hamburger-menu" aria-label="Ouvrir le menu">
          <div class="icon-hamburger"><span></span><span></span><span></span></div>
        </button>
      </div>
    </div>
    <div class="links-right">
      <ul>
        <li><a href="../pages/calendrier.php" aria-label="Calendrier des tournois" <?php echo $isOnPage3 ? 'class="page-actuelle"' : '' ?>>Calendrier</br class="br-links"> tournois</a></li>
        <li><a href="../pages/contact.php" aria-label="Page de contact" <?php echo $isOnPage4 ? 'class="page-actuelle"' : '' ?>>Contact</a></li>
      </ul>
    </div>
    <div class="decoration-right">
      <img src="../image/decojaune.webp" alt="decoration en haut à droite nav bar" class="deco-fixed" style="transform: rotate(180deg);" />
      <img src="../image/decovert.webp" alt="decoration en bas à droite nav bar" class="deco-relative" style="transform: scaleX(-1);" />
      <img src="../image/decojaune-top.webp" alt="decoration en bas à droite nav bar burger" class="deco-hamburger" id="deco-right">
    </div>
  </nav>
  <div class="hamburger-menu" role="barre de navigation pour mobile">
    <div class="menu-top">
      <div class="top-deco-left">
        <img src="../image/decovert-bottom.webp" alt="decoration à gauche du menu burger">
      </div>
      <ul>
        <li><img src="../image/icon-carte.webp" alt="icone carte interactive"><a href="../pages/index.php" aria-label="Carte interactive du monde" <?php echo $isOnPage1 ? 'class="page-actuelle"' : '' ?>>Carte</a></li>
        <li><img src="../image/icon-classement.webp" alt="icone classement ATP"><a href="../pages/classement.php" aria-label="Classement ATP" <?php echo $isOnPage2 ? 'class="page-actuelle"' : '' ?>>Classement ATP</a></li>
        <li><img src="../image/icon-calendrier.webp" alt="icone calendrier des tournois"><a href="../pages/calendrier.php" aria-label="Calendrier des tournois" <?php echo $isOnPage3 ? 'class="page-actuelle"' : '' ?>>Calendrier tournois</a></li>
        <li><img src="../image/icon-contact.webp" alt="icone page de contact"><a href="../pages/contact.php" aria-label="Page de contact" <?php echo $isOnPage4 ? 'class="page-actuelle"' : '' ?>>Contact</a></li>
      </ul>
      <div class="top-deco-right">
        <img src="../image/decojaune-bottom.webp" alt="decoration à droite du menu burger">
      </div>
    </div>
    <div class="menu-deco-bottom">
      <img src="../image/decojaune.webp" alt="decoration en bas du menu burger">
      <img src="../image/decovert.webp" alt="decoration en bas du menu burger">
    </div>
  </div>
</header>
<script>
  function displayMenu() {
    var hamburger = document.querySelector(".icon-hamburger");
    var menu = document.querySelector(".hamburger-menu");

    var decoRelative = document.querySelectorAll(".deco-relative");
    var decoHamburger = document.querySelectorAll(".deco-hamburger");
    decoRelative.forEach(function(item) {
      item.classList.toggle('open');
    });
    decoHamburger.forEach(function(item) {
      item.classList.toggle('open');
    });
    hamburger.classList.toggle('open');
    menu.classList.toggle('open-menu');
  }
</script>