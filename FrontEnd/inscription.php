<?php
    // On inclut notre connecteur à la base de données
    include('./connect.php');

    // On entre dans la boucle seulement lors de l’envoi du formulaire
    if (!empty($_POST["form_inscription"])) {
        // On recherche si l'adresse email existe déjà en BDD
        $select = $db->prepare("SELECT admin_id FROM admin_profile WHERE admin_id=:admin_id");
        $select->bindParam(":admin_id", $_POST["form_id"]);
        $select->execute();

        if (empty($select->fetch(PDO::FETCH_COLUMN))) {
            // Si ce n'est pas le cas, on vient l'insérer
            $insert = $db->prepare("INSERT INTO admin_profile(admin_id, admin_password) VALUES(:admin_id, :admin_password)");
            $insert->bindParam(":admin_id", $_POST['form_id']);
            $insert->bindParam(":admin_password", $_POST['form_password']);

            if ($insert->execute()) {
                // Si aucune erreur ne se produit, on propose de se connecter
                die('<p style="color: green;">Inscription réussie.</p><a href="connexion.php">Se connecter.</a>');
            } else {
                die('<p style="color: red;">Inscription échouée.</p><a href="inscription.php">Réessayer.</a>');
            }
        }
    }
?>
