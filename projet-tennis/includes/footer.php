<footer>
  <div class="footer-left">
  <div class="div-logo">
    <a href="../pages/index.php" aria-label="Revenir à la page d'accueil"><img alt="" src="../image/logo.webp" class="logo-btm"></a>
  </div>
  <div class="div-cp">
    <img src="../image/peace.png" alt="">
    <div>
      <p>© 2023 TENNISWORLDMAP</p>
      <p>PAR LOUIS BOUSQUET</p>
    </div>
  </div>
  </div>
 
  <div class="footer-reseaux">
    <img src="../image/icongithub.png" alt="">
    <img src="../image/twitter.png" alt=""> 
    <img src="../image/instagram.png" alt=""> 
    <img src="../image/facebook.png" alt=""> 
  </div>
  <div class="footer-right">
    
  <div class="footer-status">
    <img  class="admin-icon" src="../image/compte.png" alt="">
    <?php
     if(isset($_SESSION['admin'])) {
      echo '<form action="../admin/deconnect.php" method="post"><button class="btn-s" type="submit"><img class="status-icon" src="../image/admin-connect" alt="Admin Connecté"></button></form>';
    } 
      else {echo '
          <img class="status-icon" src="../image/admin-deconnect" alt="Admin déconnecté">  ';
      }
    ?>
  </div>
  <?php
  if(isset($_SESSION['admin'])) {
      echo '<div class="footer-messagerie">';
      if(isset($isOnMessagePage) && $isOnMessagePage === true) {
          echo '<a href="../pages/contact.php"><img class="btn-messagerie" src="../image/messagerie-active.png" alt=""></a>';
      } else {
        
          echo '<a href="../admin/message.php"><img class="btn-messagerie" src="../image/messagerie.png" alt=""></a>';
      }
      echo '</div>';
  } 
?>

</div>
</footer>
