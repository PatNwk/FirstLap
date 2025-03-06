<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nous Contacter</title>
  <link rel="stylesheet" href="../../pages/contact/contact.css">
   <link rel="stylesheet" href="../../pages/header/header.css">
   <link rel="stylesheet" href="../../pages/footer/footer.css">
  <script src="contacte.js"></script>
</head>
<body>
<?php include "../../pages/header/header.php"; ?>
   <div class="top">
      <h1>Nous Contacter</h1>
   </div>

   <div class="text">
      <p>
         Vous avez une question ? Besoin de conseil ? Besoin d’aide ?<br>
         Nous vous proposons d’utiliser les différents moyen de communication que nous vous proposons ci-dessous:
      </p>
   </div>

   <div class="contact">
      <div class="manuel">
         <div class="tel">
            <img src="TEL.png" alt="tel">
            <p>06.52.87.36.96</p>
         </div>
         <div class="mail">
            <img src="MAIL.png" alt="mail">
            <p>Contact@firstlap.fr</p>
         </div>
         <div class="insta">
            <img src="INSTA.png" alt="insta">
            <p>@first__lap</p>
         </div>
      </div>

      <div class=formulaire>
         <form name="myForm" id="emailLink" action="mailto:someone@example.com?subject=This%20is%20the%20subject&body=This%20is%20the%20body" onsubmit="return validateForm()" method="post">
            <h1>Message</h1>
            <table class="form-style">
               <tr>
                  <td>
                     <div class="input-group">
                        <input class="input" type="text" id="NameInput" required oninput="updateEmailLink()">
                        <label class="label" for="NameInput">Nom</label>
                        <span class="error" id="errorname"></span>
                     </div>
                  </td>
               </tr>
               <tr>
               </tr>
               <tr>
                  <td>
                     <div class="input-group">
                        <input class="input" type="text" id="SubjectInput" required oninput="updateEmailLink()">
                        <label class="label" for="SubjectInput">Sujet</label>
                        <span class="error" id="errorsubject"></span>
                     </div>
                  </td>
               </tr>
               <tr>
                  <td>
                     <textarea class="textarea" id="bodyInput" oninput="updateEmailLink()" placeholder="Contenu"></textarea>
                     <span class="error" id="errormsg"></span>
                  </td>
               </tr>
               <tr>
                  <td></td>
                  <td>
                     <button id="send" onclick="sendEmail()">Envoyer</button>
                  </td>
               </tr>
            </table>
         </form>
      </div>
   </div>
<?php include "../../pages/footer/footer.php"; ?>
</body>
</html>
