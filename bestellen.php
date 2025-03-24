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
    <section class="bestellen-title flex-r">
        <h1 class="font-m">Plaats uw bestelling</h1>
    </section>
    <div class="flex-r bestellen-top-sections">
        <main class="bestellen-main flex-r">
            <section class="flex-c winkelwagen-section">
                <div class="flex-r winkelwagen-title">
                    <img src="./assets/img/shopping-cart-icon.svg" alt="winkelwagen" id="winkelwagen-bestellen">
                    <h2 class="font-s ">Winkelwagen</h2>
                </div>
                <div class="flex-r winkelwagen-items">
                    <div><p class="font-s">1x</p></div>
                    <div><p class="font-s bold">California</p></div>
                    <div><p class="font-s">4,95</p></div>
                </div>
                <div class="flex-r winkelwagen-items">
                    <div><p class="font-s">1x</p></div>
                    <div><p class="font-s bold">California</p></div>
                    <div><p class="font-s">4,95</p></div>
                </div>
                <div class="flex-r winkelwagen-items">
                    <div><p class="font-s">1x</p></div>
                    <div><p class="font-s bold">California</p></div>
                    <div><p class="font-s">4,95</p></div>
                </div>
                <div class="flex-r winkelwagen-items">
                    <div><p class="font-s">1x</p></div>
                    <div><p class="font-s bold">California</p></div>
                    <div><p class="font-s">4,95</p></div>
                </div>
                <div class="flex-r winkelwagen-items">
                    <div><p class="font-s">1x</p></div>
                    <div><p class="font-s bold">California</p></div>
                    <div><p class="font-s">4,95</p></div>
                </div>
                <div class="flex-r winkelwagen-totaal">
                    <div><p class="font-s bold">Totaal</p></div>
                    <div><p class="font-s">4,95</p></div>
                </div>
            </section>
            <section class="bestellen-info flex-c">
                <img src="./assets/img/logo-soft.png" alt="logo" id="bestellen-logo">
                <p class="font-s bestellen-info-text">U kunt nu ons eten ook thuis laten bezorgen! Wacht niet langer en geniet van ons eten vanuit de comfort van je eigen huis. </p>
            </section>
        </main>
    </div>
    <section class="contact-form-area flex-r">
        <div class="reserveren-form bestellen-form">
            <div id="reserveren-form-title">
            <h2 class="t-w font-s">Vul uw gegevens in</h2>
            </div>
            <form class="flex-r bestel-form" id="form3">
                <div class="bestellen-form-left flex-c">
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
                </div>
                <div class="bestellen-form-right flex-c">
                    <div class="flex-r">
                    <input class="font-s input-straat" type="text" id="straat" name="straat" placeholder="Straat:">
                    <input class="font-s input-huisnummer" type="text" id="huisnr" name="huisnr" placeholder="Huisnr.:">
                    </div>
                <input class="font-s input-reserveren" type="text" id="postcode" name="postcode" placeholder="Postcode">
                <input class="font-s input-reserveren" type="text" id="plaats" name="plaats" placeholder="Plaats">
                <input class="font-s input-reserveren" type="text" id="opmerking" name="opmerking" placeholder="Opmerking">

                </div>
                <div id="bestel-button">
                <button type="submit" form="form2" value="Submit" class="submit-button font-m">Bevestig</button>
    
                </div>
                
            </form>
        </div>
    <!-- hier komt het formulier -->
    </section>
<?php
include('partials/footer.php');
?>
</body>
</html>