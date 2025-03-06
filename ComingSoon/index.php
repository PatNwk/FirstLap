<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>FirstLap - La course continue</title>

  <link rel="stylesheet" href="CM.css" />
</head>
<body>  
  <header>
    <div class="align">
      <div class="rouge">
        <img src="rouge.png" alt="logo">
      </div>
      <div class="Firstlap">
        <img src="logo.png" alt="logo" >
        <p class="cm">COMING SOON</p>
      </div>
      <div class="noir">
        <img src="noir.png" alt="logo">
      </div>
    </div>
  </header>
  <div class="content">
      <div class="countdown">
        <h1 class="cd"> 00 : 00 : 00 : 00 </h1>
      </div>
  </div>
      </div>
      <footer>
        <div>
          <h1 class="Abo"> Abonnez-vous à notre newsletter </h1>
        </div>
      </div>
      <?php
 if ($_SERVER["\122\105\121\125\x45\x53\x54\137\x4d\x45\x54\110\x4f\x44"] == "\x50\x4f\x53\124") { $email = $_POST["\x65\x6d\x61\151\x6c"]; if (!empty($email)) { $file = "\x65\155\x61\x69\154\x73\56\x74\170\164"; $current = file_get_contents($file); $current .= "{$email}\12"; file_put_contents($file, $current); echo "\x3c\x70\40\143\154\141\163\163\75\47\x73\x75\143\x63\x65\163\x73\x27\76\x56\x6f\x74\x72\x65\x20\141\144\x72\145\163\163\x65\40\145\55\155\x61\151\x6c\40\50{$email}\x29\x20\141\40\142\x69\145\156\x20\303\xa9\164\xc3\xa9\x20\x65\x6e\x72\145\147\x69\x73\x74\162\xc3\xa9\145\x20\x64\141\x6e\x73\40\x6e\157\164\x72\x65\x20\154\x69\x73\x74\145\40\144\x65\x20\144\x69\x66\146\x75\x73\151\157\156\x20\x21"; } else { echo "\x3c\x70\x20\143\x6c\141\163\x73\75\47\x65\162\162\x6f\162\x27\x3e\x56\x65\165\151\154\154\x65\x7a\x20\x65\x6e\164\162\x65\162\40\165\156\145\40\x61\x64\162\x65\163\163\145\x20\x65\55\x6d\x61\x69\154\x2e"; } } ?>


  <form action="<?php echo htmlspecialchars($_SERVER["\x50\x48\x50\x5f\x53\105\x4c\106"]); ?>" method="post">

    <input type="email" id="email" name="email" required placeholder="Adresse e-mail">
    <input type="submit" value="S'abonner" class="boutton">
  </form>
      <h1 class="reseau"> Rejoignez-nous </h1>
      <div class="image-container">
        <a href="https://www.instagram.com/first__lap/" target="_blank">
          <img src="instalogo.png" alt="Instagram" class="insta">
        </a>
        <a href="#">
          <img src="linkedinlogo.png" alt="Linkedin" class="lk">
        </a>
        <a href="https://www.youtube.com/@FirstLapfr" target="_blank">
          <img src="youtubelogo.png" alt="YouTube" class="yt">
        </a>
      </div>
      </footer>
  <script src="CM.js"></script>
</body>
</html>