<!DOCTYPE html>

<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Utilisateur</title>
  <link rel="stylesheet" href="profil.css">
  <link rel="stylesheet" href="../../pages/header/header.css">
  <link rel="stylesheet" href="../../pages/footer/footer.css">
</head>
<?php include "../../pages/header/header.php"; ?>

<body>
<div class="profile-container2">
  <div class="photo-containeur">
  <form action="./edit-profil-process.php" method="post" enctype="multipart/form-data">

    <div class="profile-photo-container">
      <!-- L'image est cliquable et ouvre le sélecteur de fichiers -->
      <label for="photo-upload" class="">
      <?php
        // Assurez-vous que $_SESSION['user_id'] est défini et non vide
        if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
            echo '<img src="../../ressources/images/profil-picture/' . htmlspecialchars($_SESSION['user_id']) . '.png" alt="Description de l\'image 1" />';
            // Ajoutez d'autres images comme nécessaire
        }
        ?>
      </label>
      <!-- Le champ de fichier est caché, mais sera activé lorsque l'image est cliquée -->
      <input id="photo-upload" type="file" name="photo-upload" style="display: none;" onchange="previewFile()">
    </div>

    <script>
      // Fonction JavaScript pour afficher un aperçu de l'image sélectionnée
      function previewFile() {
        console.log("previewFile() called");
        var preview = document.querySelector('.profile-photo-container img'); 
        console.log(preview);       
        var file    = document.querySelector('input[type=file]').files[0]; // Sélectionne le fichier choisi
        var reader  = new FileReader();

        reader.onloadend = function () {
          preview.src = reader.result; // Met à jour l'attribut src de l'élément <img>
        }

        if (file) {
          reader.readAsDataURL(file); // Lit le fichier comme une URL de données
        } else {
          preview.src = ""; // Réinitialise l'aperçu si aucun fichier n'est choisi
        }
      }
    </script>
  </div>
  <div class="profile-info2">
  <!-- Détails du profil -->
    <!-- PHP pour insérer et éditer les informations du profil -->
    <!-- Nom -->
    <div class="form-group">
      <label for="nom">Nom:</label>
      <input type="text" id="nom" name="nom"
             value="<?php if (isset($_SESSION['prenom'])) {
        echo htmlspecialchars($_SESSION['prenom']);
      } ?>">
    </div>

    <!-- Prénom -->
    <div class="form-group">
      <label for="prenom">Prénom:</label>
      <input type="text" id="prenom" name="prenom"
             value="<?php if (isset($_SESSION['nom'])) {
        echo htmlspecialchars($_SESSION['nom']);
      } ?>">
    </div>


    <!-- Âge -->
    <div class="form-group">
      <label for="birthdate">Date de naissance :</label>
      <input type="date" id="birthdate" name="birthdate"
             value="<?php if (isset($_SESSION['date_de_naissance'])) {
        echo htmlspecialchars($_SESSION['date_de_naissance']);
      } ?>"
      required>

    </div>

    <!-- Équipe -->
    <div class="form-group">
      <label for="equipe">Équipe:</label>
      <input type="text" id="equipe" name="equipe" value="<?php if (isset($_SESSION['nom_equipe'])) {
        echo htmlspecialchars($_SESSION['nom_equipe']);
      } ?>">
    </div>

    <!-- Nationalité -->
    <div class="form-group">
      <label for="nationalite">Nationalité:</label>
      <input type="text" id="nationalite" name="nationalite" value="<?php if (isset($_SESSION['nationalite'])) {
        echo htmlspecialchars($_SESSION['nationalite']);
      } ?>">
    </div>

    <!-- Biographie -->
    <div class="form-group">
      <label for="biographie">Biographie:</label>
      <textarea id="biographie" name="biographie"><?php if (isset($_SESSION['biographie'])) {
        echo htmlspecialchars($_SESSION['biographie']);
      } ?></textarea>
    </div>

    <!-- Région -->
    <div class="form-group">
      <label for="region">Région:</label>
      <input type="text" id="region" name="region" value="<?php if (isset($_SESSION['region'])) {
        echo htmlspecialchars($_SESSION['region']);
      } ?>">
    </div>

    
    <!-- Classement/Résultats -->
    <!-- Cette partie sera générée en PHP en interrogeant une autre table -->

    <!-- Réseaux -->
    <!-- Généré en PHP en interrogeant une autre table pour les liens des réseaux sociaux -->

    <!-- Liste des sponsors -->
    <!-- Généré en PHP en interrogeant une autre table pour la liste des sponsors -->


    <!-- Boutons -->
    <div class="form-group">
      <button type="submit">Enregistrer</button>
      <button type="button" onclick="window.location='profil.php';">Annuler</button>
    </div>
  </div>
  </form>
</div>
</body>
<?php include "../../pages/footer/footer.php"; ?>
</html>
