<?php
include "../session/session-manager.php";
require_once '../../db_config.php'; // Incluez votre fichier de configuration de base de données

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupération des valeurs du formulaire
  $email = $_POST['new-email'];
  $password = $_POST['new-password'];
  $passwordConfirm = $_POST['new-password-confirm'];
  $nom = $_POST['lastname'];
  $prenom = $_POST['firstname'];
  $birthdate = $_POST['birthdate'];
  $nationalite = $_POST['nationality'];
  $region = $_POST['region'] ?? ""; // Utilisez l'opérateur de coalescence nulle de PHP 7+

  // Autres champs non présents dans le formulaire mais existants dans la table
  $sponsor = ""; 
  $reseaux = ""; 
  $biographie = ""; 
  $image_profile = 0;
  $nom_equipe = ""; 
  $date_inscription = date("Y-m-d H:i:s"); 

  // Vérifiez si les mots de passe correspondent
  if ($password !== $passwordConfirm) {
      echo "Les mots de passe ne correspondent pas.";
      exit;
  }

  // Hachage du mot de passe
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  // Préparez une requête SQL pour insérer dans la table profil_pilote
  $sqlProfil = "INSERT INTO profil_pilote (nom, prenom, email, date_de_naissance, nationalite, region) VALUES (?, ?, ?, ?, ?, ?)";

  // Exécutez la première requête
  if ($stmtProfil = mysqli_prepare($link, $sqlProfil)) {
      mysqli_stmt_bind_param($stmtProfil, "ssssss", $nom, $prenom, $email, $birthdate, $nationalite, $region);
      if (mysqli_stmt_execute($stmtProfil)) {
          // Si vous liez par ID, récupérez l'ID inséré
          $profilId = mysqli_insert_id($link);
      } else {
          echo "Erreur lors de l'enregistrement dans profil_pilote: " . mysqli_error($link);
      }
      mysqli_stmt_close($stmtProfil);
  } else {
      echo "Erreur de préparation : " . mysqli_error($link);
  }
    // Préparez une requête SQL pour insérer dans la table d'authentification
  $sqlUser = "INSERT INTO authentification (email, password) VALUES (?, ?)";

  // Exécutez la deuxième requête
  if ($stmtUser = mysqli_prepare($link, $sqlUser)) {
      mysqli_stmt_bind_param($stmtUser, "ss", $email, $hashedPassword);
      if (mysqli_stmt_execute($stmtUser)) {
          // L'utilisateur a été inséré avec succès
          $_SESSION['registered'] = "Vous etes bien inscrit.";
          header("Location: ../../pages/profil/profil.php");
          exit;
      } else {
          echo "Erreur lors de l'enregistrement dans users: " . mysqli_error($link);
      }
      mysqli_stmt_close($stmtUser);
  } else {
      echo "Erreur de préparation : " . mysqli_error($link);
  }
}
?>
