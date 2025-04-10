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
            <h1 class="font-m">Contact</h1>
</section>
<section class="contact-info flex-c">
<div class="contact-div flex-r contact-address">
    <div>Klein Marieburg 42<br>
    4622 PL Nijmegen
    </div>
    <div>024 31 11 311<br>
    info@restaurantsakurra.nl</div>
</div>
<div class="contact-div">
    <p class="font-s">
    Via onderstaand contactformulier kunt u een bericht naar ons sturen. Voor reserveringen kunt u terecht op de website of ons telefonisch bereiken.
    </p>
</div>
</section>
<section class="contact-form-area flex-r">
    <div class="contact-form">
        <div class="contact-form-title">
        <h2 class="t-w font-s">Contactformulier </h2>
        </div>
        <form class="flex-c" id="form1">
            <input class="font-s" type="text" id="vnaam" name="vnaam" placeholder="Voornaam:">
            <input class="font-s" type="text" id="anaam" name="anaam" placeholder="Achternaam:">
            <input class="font-s" type="text" id="email" name="email" placeholder="E-mailadres:">
            <textarea class="font-s" id="bericht" name="bericht" rows="13" cols="50" placeholder="Uw bericht:"></textarea>
            <button type="submit" form="form1" value="Submit" class="submit-button font-m">Verstuur</button>

        </form>
    </div>
    <!-- hier komt het formulier -->
</section>
<?php
include('partials/footer.php');
?>
</body>
</html>
