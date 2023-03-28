<footer class="footer">
  <div class="logo-bottom">
    <a href="../pages/index.php" aria-label="Revenir à la page d'accueil"><img alt="" src="../image/logo.webp" class="logo-btm"></a>
  </div>
  <div class="messagerie-footer">
    
  </div>
  <div class="status-admin">
    <?php if(isset($_SESSION['admin'])) {
      echo '<img class="status-icon" src="../image/admin-connect" alt="">';
    } else {
      
      echo '<img class="status-icon" src="../image/admin-deconnect" alt="">';
    }
    ?>
  </div>
</footer>
