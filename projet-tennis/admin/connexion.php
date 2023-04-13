<?php

    include('../admin/connect.php');

    if(!empty($_POST["form_connexion"])) {
        $select = $db->prepare("SELECT * FROM admin_profile WHERE admin_id=:admin_id AND admin_password=:admin_password;");
        $select->bindParam(":admin_id", $_POST["form_id"]);
        $select->bindParam(":admin_password", $_POST["form_password"]);
        $select->execute();
        // La fonction rowCount() permet de donner le nombre de lignes pour une requête
        if($select->rowCount() === 1) {
            // On affecte les données de notre utilisateur dans notre super globale $_SESSION
            $_SESSION['admin'] = $select->fetch(PDO::FETCH_ASSOC);
            // Le header permet d'effectuer une requête HTTP, la valeur Location permet la redirection vers un autre fichier
            header("Location: ../pages/contact.php");
        } else {
            // La fonction unset permet de vider une variable, ici nous vidons les valeurs pour la clé “admin”
            unset($_SESSION['admin']);
        }
    }
?>
