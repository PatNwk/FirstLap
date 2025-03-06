<!DOCTYPE html>
<html lang="fr">
<?php
require_once 'db_config.php';

// Votre code pour interagir avec la base de données
?>
<head>
  <meta charset="UTF-8">
  <title>Inscription</title>
  <link rel="stylesheet" href="register.css">
</head>
<body>
<div class="container">
    <!-- Formulaire d'inscription initialement caché -->
    <div class="login-container">
      <h2>Sponsor</h2>
      <div class="form-section">
        <button type="button" id="pilote-bouton2" class="tab" onclick="showPiloteForm();">Pilote</button>
        <button type="button" id="sponsor-bouton2" class="tab" onclick="showSponsorForm();">Sponsor</button>
      </div>

      <form action="/components/connexion/register-processing.php" method="post">
        
        <div class="form-group">
          <label for="firstname">Prénom :</label>
          <input type="text" id="firstname" name="firstname" required>
        </div>
        <div class="form-group">
          <label for="lastname">Nom :</label>
          <input type="text" id="lastname" name="lastname" required>
        </div>
        <div class="form-group">
          <label for="new-email">Adresse mail :</label>
          <input type="text" id="new-email" name="new-email" required>
        </div>
        <div class="form-group">
          <label for="new-password">Mot de passe :</label>
          <input type="password" id="new-password" name="new-password" required>
        </div>
        <div class="form-group">
          <label for="new-password-confirm">Confirmez le mot de passe :</label>
          <input type="password" id="new-password-confirm" name="new-password-confirm" required>
        </div>
        <div class="form-group1">
          <label for="birthdate">Date de naissance :</label>
          <input type="date" id="birthdate" name="birthdate" required>
        </div>
        <div class="form-group">
          <label for="nationality">Nationalité :</label>
          <input type="text" id="nationality" name="nationality" required>
        </div>
        <div class="form-group">
          <label for="region">Région :</label>
          <input type="text" id="region" name="region">
        </div>
        <button type="submit" class="buttonloginshalasacassepas" >S'inscrire</button>
        <button type="button" class="buttonloginshalasacassepas" onclick="showLoginForm();">Déjà inscrit ?</button>
      </form>
    </div>
  </div>
</body>
</html>
