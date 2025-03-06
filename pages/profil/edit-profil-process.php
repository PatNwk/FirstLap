<?php include "../../pages/header/header.php"; ?>

<?php
// Démarrer la session
require_once '../../db_config.php'; // Incluez votre fichier de configuration de base de données

// Tentative de connexion à la base de données MySQL
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
    //         die("Échec de la connexion : " . $conn->connect_error);
}

// Vérification de l'existence de l'ID utilisateur en session
if (isset($_SESSION['user_id'])) {
    $userId = (int)$_SESSION['user_id']; // Ou une conversion en entier si c'est un nombre : $userId = (int)$_SESSION['user_id'];

    $nom = $conn->real_escape_string($_POST['nom']);
    $prenom = $conn->real_escape_string($_POST['prenom']);
    $date_de_naissance = $conn->real_escape_string($_POST['birthdate']);
    $equipe = $conn->real_escape_string($_POST['equipe']);
    $nationalite = $conn->real_escape_string($_POST['nationalite']);
    $biographie = $conn->real_escape_string($_POST['biographie']);
    $region = $conn->real_escape_string($_POST['region']);

    // Gestion du téléchargement de l'image
    if (isset($_FILES['photo-upload']) && $_FILES['photo-upload']['error'] == 0) {
        echo "aaaaaaaaaaaaaaaaaa";
        $targetDir = "../../ressources/images/profil-picture/";
        $imageFileType = strtolower(pathinfo($_FILES["photo-upload"]["name"], PATHINFO_EXTENSION));
        // Renommez le fichier téléchargé pour correspondre à l'ID utilisateur
        $targetFile = $targetDir . $userId . "." . $imageFileType;

        if (move_uploaded_file($_FILES["photo-upload"]["tmp_name"], $targetFile)) {
            echo "Le fichier a été téléchargé.";
            // Ici, vous pouvez également mettre à jour le chemin de l'image dans votre base de données si nécessaire
        } else {
            echo "Erreur lors du téléchargement de votre fichier.";
        }
    }


    // Préparez la requête SQL de mise à jour
    $sql = "UPDATE profil_pilote SET nom=?, prenom=?, date_de_naissance=?, nom_equipe=?, nationalite=?, biographie=?, region=? WHERE id=?";

    // Préparation de la requête pour éviter les injections SQL
    if ($stmt = mysqli_prepare($link, $sql)) {
        // Liaison des variables à la requête préparée comme paramètres
        mysqli_stmt_bind_param($stmt, "sssssssi", $nom, $prenom, $date_de_naissance, $equipe, $nationalite, $biographie, $region, $userId);

        // Exécution de la requête
        if (mysqli_stmt_execute($stmt)) {
            echo "Profil mis à jour avec succès.";
            $_SESSION['prenom'] = $prenom;
            $_SESSION['nom'] = $nom;
            $_SESSION['date_de_naissance'] = $date_de_naissance;
            $_SESSION['nom_equipe'] = $equipe;
            $_SESSION['nationalite'] = $nationalite;
            $_SESSION['biographie'] = $biographie;
            $_SESSION['region'] = $region;
        } else {
            echo "Erreur lors de la mise à jour du profil: " . mysqli_error($link);
        }
        // Fermeture de la déclaration
        mysqli_stmt_close($stmt);
        header("Location: profil.php");
        exit;
    } else {
        echo "Erreur de préparation : " . mysqli_error($link);
    }
} else {
    echo "ID utilisateur non défini.";
}

?>
