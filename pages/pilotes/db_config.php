<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'firstlap');

// Tentative de connexion à la base de données MySQL
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
    die("ERREUR : Impossible de se connecter à la base de données. " . mysqli_connect_error());
}
?>
