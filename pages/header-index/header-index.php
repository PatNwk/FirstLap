<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pages/header-index/header-index.css">
</head>

<header>
    <a id="burger-btn" onclick="toggleNav()">
            <img src="pages/header-index/burgerbtn.png" alt="Burger Icon">
        </a>
        <div id="burger-nav">
            <div id="topnav">
                <img id="header-img" href="pages/home/home.php" src="pages/header-index/FIRST.png" width="200px">
                <a id="close-btn" onclick="toggleNav()">x</a>
            </div>
            <div id="bottomnav">
                <a href="../../pages/pilotes/">Les pilotes</a>
                <a href="pages/sponsors/">Les sponsors</a>
                <a href="pages/matchs/">Matchs</a>
                <a href="../../pages/about/">Qui sommes-nous</a>
                <a href="../../pages/contact/">Contact</a>
                <a href="pages/profil/profil.php">Profil</a>
            </div>
        </div>
        <nav>
            <a href="pages/pilotes/">Les pilotes</a>
            <a href="pages/sponsors/">Les sponsors</a>
            <a href="pages/matchs/">Matchs</a>
            <a href="../../">
              <img id="header-img" href="#" src="pages/header-index/FIRST.png" width="200px" >
            </a>
            <a href="pages/about/">Qui sommes-nous</a>
            <a href="pages/contact/">Contact</a>
            
            <div class="container-profil">
                <a href="pages/profil/profil.php">
                    <img id="profil-img" src="pages/header-index/profil.png" width="50px">
                </a>
                <?php
                if (isset($_SESSION['loggedin'])) {
                    echo '
                    <div class="overlay"></div>
                    <form class="button" action="components/session/session-logout.php" method="post">
                        <button class="button-deconnexion" type="submit">Déconnexion</button>
                    </form>';
                }
                ?>
            </div>

        </nav>
        <script src="pages/header-index/header-index.js"></script>
  </header>

  