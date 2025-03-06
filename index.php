<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link rel="stylesheet" href="pages/home/home.css">
    <link rel="stylesheet" href="pages/header/header.css">
    <link rel="stylesheet" href="pages/footer/footer.css">
</head>
<body>
  <?php include "pages/header-index/header-index.php"; ?>
  <div class="container">
        <img class="top_bkground" src="pages/home/backgroundtop.png" alt="top_bkground">
        <div class="top">
            <h1>LA COURSE CONTINUE</h1>
            <h2>Retrouvez plus de 100 pilotes et sponsors sur FirstLap</h2>
            <a href="pages/pilotes/"><button>Nos pilotes</button></a>
            <a href="pages/sponsors/"><button>Nos sponsors</button></a>
        </div>
  </div>

  <main>
    <h2>Quelques pilotes</h2>
    <div class="pilotes">
      <a href="#Pilote1" class="image-link">
        <img src="pages/home/pilote1.png" alt="pilote1">
        <span class="image-text">
          <p>Dorian Bocolacci</p>
          <p>Biographie</p>
    </span>
      </a>
      <a href="#Pilote2" class="image-link">
        <img src="pages/home/pilote2.png" alt="pilote2">
        <span class="image-text">
            <p>Marie-Soleil Labelle</p>
            <p>Biographie</p>
        </span>
      </a>
      <a href="#Pilote3" class="image-link">
        <img src="pages/home/pilote3.png" alt="pilote3">
        <span class="image-text">
        <p>Yann Ehrlacher</p>
        <p>Biographie</p>
        </span>
      </a>
    </div>
    <h2>Quelques sponsors</h2>
    <div class="sponsors">
        <div class="sponsor">
          <a href="#Sponsor1" class="image-link">
            <img src="pages/home/Red-Bull-Logo 1.png" alt="sponsor1">
            <span class="image-text">Texte pour Sponsor 1</span>
          </a>
        </div>
        <div class="sponsor">
          <a href="#Sponsor2" class="image-link">
            <img src="pages/home/motul-logo 1.png" alt="sponsor2">
            <span class="image-text">Texte pour Sponsor 2</span>
          </a>
        </div>
        <div class="sponsor">
          <a href="#Sponsor3" class="image-link">
            <img src="pages/home/alpinestar-logo-1.png" alt="sponsor3">
            <span class="image-text">Texte pour Sponsor 3</span>
          </a>
        </div>
      </div>
  <?php include "pages/footer/footer.php"; ?>
  <script src="pages/home/home.js"></script>
</body>
</html>