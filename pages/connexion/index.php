<!DOCTYPE html>
<html lang="fr">
  <head>
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" href="/../../components/connexion/login/login.css">
  <link rel="stylesheet" href="/../../components/connexion/register/register.css">
  <title>FirstLap login</title>

  <script>

  document.addEventListener('DOMContentLoaded', function onInit() {
    document.getElementById('registration-form').style.display = 'none';
    document.getElementById('login-form').style.display = 'block';

  });
    
    function showRegistrationForm() {
      document.getElementById('login-form').style.display = 'none';
      document.getElementById('registration-form').style.display = 'block';
    }

    function showLoginForm() {
      document.getElementById('registration-form').style.display = 'none';
      document.getElementById('login-form').style.display = 'block';
    }
  </script>

</head>
<body>
<?php include "../../pages/header/header.php"; ?>

    <div id="login-form">
      <?php include "../../components/connexion/login/login.php" ?>
    </div>

    <div id="registration-form">
    <?php include "../../components/connexion/register/register.php" ?>
    </div>
    <?php include "../../pages/footer/footer.php"; ?>
</body>
</html>