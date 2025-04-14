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
// if (isset($_GET['status'])) {
//     $status = $_GET['status'];
//     if ($status == 'success') {
//         echo '<p class="success-message">Bericht verstuurd! We nemen zo snel mogelijk contact met je op.</p>';
//     } elseif ($status == 'error') {
//         echo '<p class="error-message">Er is een fout opgetreden. Probeer het opnieuw.</p>';
//     }
// }
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
        <form class="flex-c"action="./dbcalls/sendmessage.php" method="post">
            <input class="font-s" type="text" id="vnaam" name="voornaam" placeholder="Voornaam" required>
            <input class="font-s" type="text" id="anaam" name="achternaam" placeholder="Achternaam" required>
            <input class="font-s" type="email" id="email" name="email" placeholder="E-mailadres" required>
            <textarea class="font-s" id="bericht" name="bericht" rows="13" cols="50" placeholder="Uw bericht:" required></textarea>
            <button type="submit" value="Submit" class="submit-button font-m">Verstuur</button>

        </form>
    </div>
</section>
<?php
include('partials/footer.php');
?>
<script>
    const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get('status');

    if (status === 'success') {
        alert("Bericht verstuurd! We nemen zo snel mogelijk contact met je op.");
    }
    if (status === 'error') {
        alert("Er is een fout opgetreden. Probeer het opnieuw.");
    }
</script>

</body>
</html>
