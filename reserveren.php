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
    <section class="reserveer-title flex-r">
        <h1 class="font-m">Reserveren</h1>
    </section>
    <section class="flex-c reserveer-info-section">
        <div class="reserveer-info flex-c">
            <p class="font-s bold ">
                Reserveer een tafel
            </p>
            <p class="font-s">
                Maak een reservering via onderstaand formulier of bel naar ons restaurant op 024 31 11 311. We hopen u snel te zien!        
            </p>
            <p class="font-s bold ">
                Openingstijden
            </p>
            <p class="font-s">
            Maandag, dinsdag, woensdag, donderdag en zondag: 13:00 tot 22:00
            Vrijdag en zondag: 12:00 tot 22:30        </p>
        </div>
    </section>
    <section class="contact-form-area flex-r">
        <div class="reserveren-form">
            <div id="reserveren-form-title">
            <h2 class="t-w font-s">Plaats uw reservering</h2>
            </div>
            <form class="flex-c" id="form2">
                <input class="font-s input-reserveren" type="text" id="vnaam" name="vnaam" placeholder="Voornaam:">
                <input class="font-s input-reserveren" type="text" id="anaam" name="anaam" placeholder="Achternaam:">
                <input class="font-s input-reserveren" type="text" id="email" name="email" placeholder="E-mailadres:">
                <select id="time" name="time" class="font-s input-reserveren">
                    <option value="17:30">17:30</option>
                    <option value="18:00">18:00</option>
                    <option value="18:30">18:30</option>
                    <option value="19:00">19:00</option>
                    <option value="19:30">19:30</option>
                    <option value="20:00">20:00</option>
                </select>
                <button type="submit" form="form2" value="Submit" class="submit-button font-m">Bevestig</button>

            </form>
        </div>
    <!-- hier komt het formulier -->
    </section>
<?php
include('partials/footer.php');
?>
</body>
</html>