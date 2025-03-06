<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sponsors</title>
  <link rel="stylesheet" href="sponsors.css">
  <link rel="stylesheet" href="../../pages/header/header.css">
  <link rel="stylesheet" href="../../pages/footer/footer.css">

</head>
<?php include "../../pages/header/header.php"; ?>
<body>
  <div class="top">
      <h1>LES SPONSORS</h1>
  </div>

  <div class="bandeau">
    <button class="button" id="button1">Région</button>
    <button class="button" id="button2">Categorie</button>
    <button class="button" id="button3">Budget</button>
  </div>
        <?php 
        require_once '../../db_config.php'; // Ajustez le chemin selon votre structure de fichiers

        $sql = "SELECT nom_sponsor, image_sponsor, nationalite, championnat FROM sponsors"; // Ajustez les noms des colonnes selon votre schéma de base de données

        $result = mysqli_query($link, $sql);

        if ($result && $result->num_rows > 0) {
            echo '<div class="sponsors"><div class="row">';
        
            // Compteur pour savoir quand on atteint 3 occurences
            $compteur = 0;
        
            // Parcourir les résultats
            while ($row = $result->fetch_assoc()) {
                // Si le compteur est un multiple de 3, fermez la rangée actuelle et en commencez une nouvelle
                if ($compteur > 0 && $compteur % 3 == 0) {
                    echo '</div><div class="row">';
                }
        
                echo '
                    <div class="sponsor">
                        <img src="image/pilote' . htmlspecialchars($row['image_sponsor']) . '.jpg">
                        <h1>' . htmlspecialchars($row['nom_sponsor']) . '</h1>
                        <h2>' . htmlspecialchars($row['championnat']) . '</h2>
                        <h2>' . htmlspecialchars($row['nationalite']) . '</h2>
                    </div>';
        
                // Incrémentez le compteur après chaque sponsor
                $compteur++;
            }
            
            echo '</div></div>';
        } else {
            echo "Aucun sponsor trouvé";
        }
        

        ?>


</body>
<?php include "../../pages/footer/footer.php"; ?>
</html>