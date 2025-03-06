<?php

session_start();
require_once '../../db_config.php'; // Ajustez le chemin selon votre structure de fichiers

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $loginSuccess = false;

  // Préparez une requête SQL pour vérifier l'email et le mot de passe
  $sql = "SELECT authentification.id, authentification.email, authentification.password, profil_pilote.nom, profil_pilote.prenom, profil_pilote.date_de_naissance, profil_pilote.nationalite, profil_pilote.region, profil_pilote.sponsor, profil_pilote.biographie FROM authentification LEFT JOIN profil_pilote ON authentification.email = profil_pilote.email WHERE authentification.email = ?";

  if ($stmt = mysqli_prepare($link, $sql)) {
      mysqli_stmt_bind_param($stmt, "s", $email);

      // Exécutez la requête
      if (mysqli_stmt_execute($stmt)) {
          mysqli_stmt_store_result($stmt);

          // Vérifiez si l'email existe, si oui, vérifiez le mot de passe
          if (mysqli_stmt_num_rows($stmt) == 1) {
              mysqli_stmt_bind_result($stmt, $id, $fileEmail, $filePasswordHash, $nom, $prenom, $date_de_naissance, $nationalite, $region, $sponsor, $biographie);
              if (mysqli_stmt_fetch($stmt)) {
                  if (password_verify($password, $filePasswordHash)) {
                      // Le mot de passe est correct, alors l'utilisateur est connecté avec succès
                      $loginSuccess = true;

                      // Stocker les informations de l'utilisateur dans la session
                      $_SESSION['loggedin'] = true;
                      $_SESSION['user_id'] = $id +1;
                      $_SESSION['email'] = $fileEmail;
                      $_SESSION['nom'] = $nom;
                      $_SESSION['prenom'] = $prenom;
                      $_SESSION['date_de_naissance'] = $date_de_naissance;
                      $_SESSION['nationalite'] = $nationalite;
                      $_SESSION['region'] = $region;
                      $_SESSION['sponsor'] = $sponsor;
                      $_SESSION['biographie'] = $biographie;
                      // Redirigez vers la page d'accueil ou le tableau de bord de l'utilisateur
                      header("Location: ../../pages/home/home.php");
                      exit;
                  } else {
                      // Le mot de passe n'est pas correct
                      $_SESSION['error'] = "Le mot de passe est incorrect.";
                      header("Location: ../../pages/profil/profil.php");
                  }
              }
          } else {
              // L'email n'existe pas dans la base de données
              $_SESSION['error'] = "L'email n'existe pas dans la base de données";
              header("Location: ../../pages/profil/profil.php");
          }
      } else {
          // La requête n'a pas pu être exécutée
          // Gérer l'erreur comme nécessaire
          header("Location: ../../pages/profil/profil.php");
      }
      mysqli_stmt_close($stmt);
  } else {
      // La préparation de la requête a échoué
      // Gérer l'erreur comme nécessaire
      header("Location: ../../index.php");
  }
}
?>
