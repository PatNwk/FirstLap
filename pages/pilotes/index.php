<!DOCTYPE html>
<html lang="fr">
<?php require_once '../../db_config.php'; ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pilots</title>
  <link rel="stylesheet" href="pilots.css">
  <link rel="stylesheet" href="../../pages/header/header.css">
  <link rel="stylesheet" href="../../pages/footer/footer.css">

</head>
<?php include "../../pages/header/header.php"; ?>
<body>
  <div class="top">
      <h1>LES PILOTES</h1>
  </div>

  <div class="bandeau">
    <button class="button" id="button1">Région</button>
    <button class="button" id="button2">Categorie</button>
    <button class="button" id="button3">Budget</button>
  </div>

  <div class="pilotes">
  <?php
    // Requête SQL pour récupérer les noms et prénoms des pilotes
    $sql = "SELECT id, nom, prenom, categorie, region FROM `profil_pilote`";

    // Exécution de la requête
    $result = mysqli_query($link, $sql);

    // Vérification si des résultats ont été retournés
    if(mysqli_num_rows($result) > 0){
        // Parcourir chaque ligne de résultats
        while($row = mysqli_fetch_assoc($result)){
            // Afficher chaque pilote
            echo '<div class="row">';
            echo '<div class="pilote"><img src="image/pilote' . $row['id'] . '.jpg"><h1>' . $row['prenom'] . '</h1><h1> ' . $row['nom'] . '</h1><h2>' . $row['categorie'] . '</h2><h2>' . $row['region'] . '</h2></div>';
            echo '</div>';
        }
        // Libérer le résultat
        mysqli_free_result($result);
    } else {
        echo "Aucun pilote trouvé.";
    }
    ?>
  </div>
  </div>



</body>
<?php include "../../pages/footer/footer.php"; ?>
</html>