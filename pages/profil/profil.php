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

<?php
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!== true ) {
    // Si l'utilisateur n'est pas connecté, le rediriger vers la page de connexion.
    if (isset($_SESSION['error']) && $_SESSION['error'] != "notLoggedIn"){
      header('Location: ../../pages/connexion/');
      exit;
    } else {
      $_SESSION['error'] = "notLoggedIn";
      header('Location: ../../pages/connexion/');
      exit;
    }
}
?>

<body>
  <div class="profile-container">
    <a class="name">
      <?php if (isset($_SESSION['prenom'])) {
        echo htmlspecialchars($_SESSION['prenom']);
      } ?>
      <?php if (isset($_SESSION['nom'])) {
        echo htmlspecialchars($_SESSION['nom']);
      } ?>
    </a>
    <div class="profile-container2">
      <div class="profile-image-container2">
      <?php
        // Assurez-vous que $_SESSION['user_id'] est défini et non vide
        if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
            echo '<img src="../../ressources/images/profil-picture/' . htmlspecialchars($_SESSION['user_id']) . '.png" alt="Description de l\'image 1" />';
            // Ajoutez d'autres images comme nécessaire
        }
        ?>
      </div>
      <div class="profile-info2">
        <p>Âge:
          <?php if (isset($_SESSION['date_de_naissance'])) {
            include "../../components/calculer-age.php";
            echo calculerAge($_SESSION['date_de_naissance']);
          } ?>
        </p>
        <p><?php if (isset($_SESSION['region'])) {
        echo htmlspecialchars($_SESSION['region']);
      } ?></p>
        <p>Budget demandé</p>
        <p></p>
        <div class="form-group">
          <p>Sponsors actuels:</p>
          <p id="biographie"><?php if (isset($_SESSION['sponsor'])) {
        echo htmlspecialchars($_SESSION['sponsor']);
      } ?></p>
        </div>
        <div class="form-group">
          <p>Biographie:</p>
          <p id="biographie"><?php if (isset($_SESSION['biographie'])) {
        echo htmlspecialchars($_SESSION['biographie']);
      } ?></p>
        </div>
        <button class="contact-button" type="button" onclick="location.href='./edit-profil.php';">Editer le profil</button>
        <button class="contact-button">Contacter</button>
      </div>
    </div>
    <div>
      <p class="race-result">Résultats de courses</p>
      <div class="profile-container2">
        <table>
          <thead>
            <tr>
              <th>Course</th>
              <th>Temps</th>
              <th>Résultat</th>
            </tr>
          </thead>
          <tbody>
            <!-- Les lignes de données du tableau seront ici -->
            <tr>
              <td>Nom de la course</td>
              <td>Temps réalisé</td>
              <td>Position finale</td>
            </tr>
            <!-- Répétez les lignes <tr> pour plus de données -->
          </tbody>
        </table>
      </div>
    </div>

    <div>
      <p class="race-result">Portefolio</p>
      <div class="portfolio-container">
      <button class="prev-arrow" onclick="changeImage(-1)">&lt;</button>
        <div class="slider">
            <div class="portfolio-image-container">
                <?php
                if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
                    $directory = '../../ressources/images/portefolio/' . htmlspecialchars($_SESSION['user_id']);
                    $firstImagePath = $directory . '/1.jpg';
                    echo '<img src="' . htmlspecialchars($firstImagePath) . '" alt="Image du portfolio" id="portfolioImage" class="portfolio-image-container">';
                } else {
                    echo 'Pas de portfolio';
                }
                ?>
            </div>
        </div>
        <button class="next-arrow" onclick="changeImage(+1)">&gt;</button>
      </div>
    </div>
  </div>


  <?php
    $directory = '../../ressources/images/portefolio/' . htmlspecialchars($_SESSION['user_id']);
    $imageCount = 0;

    if(is_dir($directory)){
        foreach (new DirectoryIterator($directory) as $file) {
            if ($file->isFile() && ($file->getExtension() == 'jpg' || $file->getExtension() == 'png')) {
                $imageCount++;
            }
        }
    }
  ?>
  <script>
    var currentImage = 1;
    var totalImages = <?php echo $imageCount; ?>;

    function changeImage(direction) {
        currentImage += direction;

        // Boucler au début si on dépasse la dernière image
        if (currentImage > totalImages) {
            currentImage = 1;
        }
        // Boucler à la fin si on recule avant la première image
        else if (currentImage < 1) {
            currentImage = totalImages;
        }

        var directory = "<?php echo htmlspecialchars($directory); ?>";
        var newImagePath = directory + '/' + currentImage + '.jpg';
        document.getElementById('portfolioImage').src = newImagePath;
    }
  </script>

</body>

<?php include "../../pages/footer/footer.php"; ?>
</html>
