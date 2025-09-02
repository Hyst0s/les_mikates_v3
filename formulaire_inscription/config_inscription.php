<?php

include '../bdd/connex_bdd.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$mot_de_passe = $_POST['mot de passe'];
$confirm_mot_de_passe = $POST['confirm_mot_de_passe'];


if ($_POST['password'] !==$confirm_password) {
    echo "les mots de passe ne correspondent pas.";
    exit;
}

$sql = "INSERT INTO utilisateur (nom, prenom, email, pseudo, mot_de_passe)
VALUES ('$nom', '$prenom', '$email', '$pseudo', '$mot_de_passe')";

if ($conn->query($sql) === TRUE) {
    echo "Inscription réussie. Vous pouvez maintenant vous connecter.";
   } else {
    echo "Erreur: lors de l'inscription : " . $conn->error;
   }

   $conn->close();
   ?>
    



