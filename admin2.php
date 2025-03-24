<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&family=Sawarabi+Mincho&display=swap" rel="stylesheet">
   
    <title>Sakura Sushi Website</title>
</head>
<body>
<?php
include('./partials/header.php');
?>
<section class="flex-r galerie-title">
    <div class="login-title">
    <h1 class="font-m">Admin</h1>
    </div>
</section>
<section class="contact-form-area flex-r">
    <div class="gerecht-form">
        <div class="contact-form-title">
        <h2 class="t-w font-s">Gerechtnaam</h2>
        </div>
        <form class="flex-c" id="form5">
            <img src="./assets/img/tempura-ebi.png" alt="gerecht" class="gerecht-img">
            <input class="font-s gerecht-input" type="number" id="prijs" name="prijs" placeholder="Prijs:">
            <input class="font-s gerecht-input" type="text" id="omschrijving" name="omschrijving" placeholder="Omschrijving:">
            <button type="submit" form="form1" value="Submit" class="submit-button font-m">Sla op</button>
        </form>
    </div>
</section>
<?php
include('./partials/footer.php');
?>
</body>
</html>
