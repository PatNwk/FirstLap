<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qui sommes nous</title>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="../../pages/header/header.css">
    <link rel="stylesheet" href="../../pages/footer/footer.css">
</head>
<body>
    <?php include "../../pages/header/header.php"; ?>
    <div class="top">
        <h1>Qui sommes nous ?</h1>
    </div>
    <main>
        <div class="card" id="card1">
            <a href="histoire.php" class="image-link">
                <img src="circuit.png" alt="circuits">
                <span class="image-text">Texte pour Histoire</span>
            </a>
            <h1>Notre histoire</h1>
        </div>
        <div class="card" id="card2">
            <a href="#Notre Equipe" class="image-link">
                <img src="equipe.png" alt="equipe">
                <span class="image-text">Texte pour Equipe</span>
            </a>
            <h1>Notre équipe</h1>
        </div>
        <div class="card" id="card3">
            <a href="#Notre Projets" class="image-link">
                <img src="poing.png" alt="projet">
                <span class="image-text">Texte pour Projet</span>
            </a>
            <h1>Nos projets</h1>
        </div>
    </main>
<?php include "../../pages/footer/footer.php"; ?>
<script src="about.js"></script>
</body>
</html>