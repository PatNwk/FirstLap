<?php
include "../../components/session/session-manager.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../pages/header/header.css">
</head>

<header>
    <a id="burger-btn" onclick="toggleNav()">
            <img src="../../pages/header/burgerbtn.png" alt="Burger Icon">
        </a>
        <div id="burger-nav">
            <div id="topnav">
                <img id="header-img" href="../home/home.php" src="../../pages/header/FIRST.png" width="200px">
                <a id="close-btn" onclick="toggleNav()">x</a>
            </div>
            <div id="bottomnav">
                <a href="../pilotes/">Les pilotes</a>
                <a href="#sponsors">Les sponsors</a>
                <a href="#matchs">Matchs</a>
                <a href="../about/">Qui sommes-nous</a>
                <a href="../contact/">Contact</a>
                <a href="../profil/profil.php">Profil</a>
            </div>
        </div>
        <nav>
            <a href="../pilotes/">Les pilotes</a>
            <a href="../sponsors/">Les sponsors</a>
            <a href="../matchs/">Matchs</a>
            <a href="../../">
              <img id="header-img" href="#" src="../../pages/header/FIRST.png" width="200px" >
            </a>
            <a href="../about/">Qui sommes-nous</a>
            <a href="../contact/">Contact</a>
            
            <div class="container-profil">
                <a href="../profil/profil.php">
                    <img id="profil-img" src="../../pages/header/profil.png" width="50px">
                </a>
                <?php
                if (isset($_SESSION['loggedin'])) {
                    echo '
                    <div class="overlay"></div>
                    <form class="button" action="../../components/session/session-logout.php" method="post">
                        <button class="button-deconnexion" type="submit">Déconnexion</button>
                    </form>';
                }
                ?>
            </div>

        </nav>
        <script src="../../pages/header/header.js"></script>
  </header>

  