<?php
echo "<script>console.log('test 1:');</script>";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["profilePhoto"])) {
  // Votre logique pour traiter le fichier envoyé
  $targetDir = "../../ressources/images/";
  $file = $_FILES["profilePhoto"];
  $fileName = "id_x"; // Vous devrez générer ou récupérer l'ID de l'utilisateur
  $targetFilePath = $targetDir . $fileName;

  // Vous pouvez ajouter de la logique ici pour traiter les extensions de fichiers et la validation

  // Essayez de déplacer le fichier téléchargé vers votre répertoire cible
  if (move_uploaded_file($file["tmp_name"], $targetFilePath)) {
    echo "Le fichier a été téléchargé avec succès.";
  } else {
    echo "Il y a eu une erreur lors du téléchargement du fichier.";
  }
}





/*
if(isset($_POST["submit"])) {
  if (isset($_FILES['profilePhoto'])) {
    $fileTmpPath = $_FILES['profilePhoto']['tmp_name'];
    $fileName = $_FILES['profilePhoto']['name'];
    $fileSize = $_FILES['profilePhoto']['size'];
    $fileType = $_FILES['profilePhoto']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    echo "<script>console.log('test 1: " . addslashes($fileTmpPath) . "');</script>";
    echo "<script>console.log('test 1: " . addslashes($fileName) . "');</script>";
    echo "<script>console.log('test 1: " . addslashes($fileSize) . "');</script>";
    echo "<script>console.log('test 1: " . addslashes($fileType) . "');</script>";
  }
}

  /*
  echo "<script>console.log('test 1: " . addslashes($_POST["submit"]) . "');</script>";
  // Définissez l'ID de l'utilisateur (par exemple, de la session ou de la base de données)
  $userId = "x"; // Vous devez remplacer ceci par l'ID de l'utilisateur réel

  // Dossier de destination
  $targetDir = "../../ressources/images/";
  $fileName = basename($_FILES["profilePhoto"]["name"]);
  $targetFilePath = $targetDir . $fileName;
  //$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
  $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

  // Renommez le fichier avec "id_x"
  $newFileName = "id_" . $userId . "." . $fileType;
  $newFilePath = $targetDir . $newFileName;
  echo "<script>console.log('hjnhujnhjn: " . addslashes($fileType) . "');</script>";

  // Autorisez certains formats de fichier
  $allowTypes = array('jpg','png','jpeg','gif');

  if(in_array(mb_strtolower($fileType), $allowTypes)){
    // Vérifiez si le fichier existe déjà
    if(!file_exists($newFilePath)){
      // Upload file to server
      if(move_uploaded_file($_FILES["profilePhoto"]["tmp_name"], $newFilePath)){
        echo "La photo de profil a été mise à jour.";
      } else{
        echo "Désolé, une erreur s'est produite lors du téléchargement de votre fichier.";
      }
    } else {
      echo "Désolé, le fichier existe déjà. Veuillez essayer avec une autre image.";
    }
  } else{
    echo "<script>console.log('Message PHP: " . addslashes($fileType) . "');</script>";
    echo "Désolé, seuls les fichiers JPG, JPEG, PNG & GIF sont autorisés à télécharger.";
  }
} else {
  echo "Désolé, il y a eu une erreur lors de la soumission de votre formulaire. Veuillez réessayer.";
}
?>
  */
