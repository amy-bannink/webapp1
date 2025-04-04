<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Importing Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&family=Sawarabi+Mincho&display=swap" rel="stylesheet">
   
    <title>Sakura Sushi Website</title>
</head>
<body>
<?php
include('partials/header.php');
?>
<section class="flex-r galerie-title">
    <div class="login-title">
    <h1 class="font-m">Admin</h1>
    </div>
</section>
<section class="contact-form-area flex-r">
    <div class="login-form">
        <div class="contact-form-title">
        <h2 class="t-w font-s">Vul uw gegevens in</h2>
        </div>
        <form class="flex-c" id="form4">
            <input class="font-s input-login" type="text" id="gnaam" name="gnaam" placeholder="Gebruikersnaam:">
            <input class="font-s input-login" type="password" id="ww" name="ww" placeholder="Wachtwoord:">
            <button type="submit" form="form1" value="Submit" class="submit-button font-m">Log in</button>
        </form>
    </div>
</section>
<?php
include('partials/footer.php');
?>
</body>
</html>
