<!DOCTYPE html>
<html lang="fr">
<?php
require_once 'db_config.php';

// Votre code pour interagir avec la base de données
?>
<head>
  <meta charset="UTF-8">
  <title>Connexion</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="container">
  <div class="login-container">
      <h2>Connexion</h2>
      <?php
      if (isset($_SESSION['error']) && $_SESSION['error'] == "notLoggedIn") {
        echo "<p class='error'> Vous n'etes pas connecté. Connectez-vous pour accéder à cette page. </p>";
        // Effacez le message d'erreur après l'avoir affiché
        unset($_SESSION['error']);
      } elseif (isset($_SESSION['error'])) {
        echo "<p class='error'>" . $_SESSION['error'] . "</p>";
        // Effacez le message d'erreur après l'avoir affiché
        unset($_SESSION['error']);
      } elseif (isset($_SESSION['registered'])) {
        echo "<p class='registered'>" . $_SESSION['registered'] . "</p>";
        // Effacez le message d'erreur après l'avoir affiché
        unset($_SESSION['registered']);
      }
      ?>
      <form action="/components/connexion/login-processing.php" method="post">
        <div class="form-group">
          <input type="text" id="email" name="email" placeholder="Adresse Email" required>
        </div>
        <div class="form-group">
          <input type="password" id="password" name="password" placeholder="Mot de passe" required>
        </div>
        <a href="zz">Mot de passe oublié ?</a>
        <button type="submit" class="buttonloginshalasacassepas" >Connexion</button>
        <button type="button" class="buttonloginshalasacassepas"  onclick="showRegistrationForm();">Pas encore inscrit</button>
        <button type="button" class="buttonloginshalasacassepas"  onclick="location.href='/pages/home/home.php';">ByPass Login</button>
      </form>
    </div>
</div>
</body>
</html>
