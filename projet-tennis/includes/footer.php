<footer class="footer">
  <div class="footer-left">
    <div class="footer-left-logo">
      <img src="../image/logo.webp" alt="logo tennisworldmap footer">
    </div>
    <div class="footer-left-copyright">
      
      <img src="../image/icon-peace.webp" alt="icone peace">
      <p>© 2023 TENNISWORLDMAP</p>
      <p>PAR LOUIS BOUSQUET</p>
    </div>
  </div>
  <div class="footer-center">
    <img src="../image/icon-github.webp" alt="icone github">
  </div>
  <div class="footer-right">
    <div class="footer-right-user">
      <img class="icon-user" src="../image/icon-user.webp" alt="icone utilisateur">
      <?php
      if (isset($_SESSION['admin'])) {
        echo '<form action="../admin/deconnect.php" method="post">
              <button class="btn-s" type="submit">
               <img class="icon-status"src="../image/icon-connect.webp" alt="Admin Connecté, cliquer pour se déconnecter">
              </button>
            </form>';
      } else {
        echo '
          <img class="icon-status" src="../image/icon-deconnect.webp" alt="Admin déconnecté, cliquer pour se connecter">  ';
      }
      ?>
    </div>
      <?php
      if (isset($_SESSION['admin'])) {
          echo '<div class="footer-right-mailbox">';
        if (isset($isOnMessagePage) && $isOnMessagePage === true) {
          echo '<a href="../pages/contact.php"><img src="../image/icon-messagerie.webp" alt="accéder à la messagerie"></a>';
        } else {
          echo '<a href="../admin/message.php"><img src="../image/icon-close-messagerie.webp" alt="quitter la messagerie"></a>';
        };
        echo '</div>';
      }
      ?>
  </div>
</footer> 