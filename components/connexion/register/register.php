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
<script>

document.addEventListener('DOMContentLoaded', function onInit() {
  document.getElementById('sponsor-form').style.display = 'block';
  document.getElementById('pilote-form').style.display = 'none';
  document.getElementById('sponsor-bouton').classList.add('active');
  document.getElementById('pilote-bouton').classList.remove('active');
  document.getElementById('sponsor-bouton2').classList.add('active');
  document.getElementById('pilote-bouton2').classList.remove('active');
});
  
  function showSponsorForm() {
    document.getElementById('pilote-form').style.display = 'none';
    document.getElementById('sponsor-form').style.display = 'block';
    document.getElementById('sponsor-bouton').classList.add('active'); // Retire la classe active du bouton Pilote
    document.getElementById('pilote-bouton').classList.remove('active'); // Ajoute la classe active au bouton Sponsor
    
  document.getElementById('sponsor-bouton2').classList.add('active');
  document.getElementById('pilote-bouton2').classList.remove('active');
  }

  function showPiloteForm() {
    document.getElementById('sponsor-form').style.display = 'none';
    document.getElementById('pilote-form').style.display = 'block';
    document.getElementById('pilote-bouton').classList.add('active'); // Retire la classe active du bouton Sponsor
    document.getElementById('sponsor-bouton').classList.remove('active'); // Ajoute la classe active au bouton Pilote
 
    document.getElementById('sponsor-bouton2').classList.add('active');
  document.getElementById('pilote-bouton2').classList.remove('active');
 }

</script>
<div class="top">
      <h1>Inscription</h1>
   </div>
    <div id="sponsor-form">
      <?php include "../../components/connexion/register/register-sponsor.php" ?>
    </div>
    <div id="pilote-form">
      <?php include "../../components/connexion/register/register-pilote.php" ?>
    </div>
</body>
</html>
