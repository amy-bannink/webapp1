<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location: ./index.php');
    exit;
} $username = $_SESSION['username'];

?>

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
<!-- <section class="contact-form-area flex-r">
    <div class="contact-form">
        <div class="contact-form-title">
        <h2 class="t-w font-s">Ontvangen berichten</h2>
        </div>
        <form class="flex-c"action="./dbcalls/sendmessage.php" method="post">
            <input class="font-s" type="text" id="vnaam" name="voornaam" placeholder="Voornaam" required>
            <input class="font-s" type="text" id="anaam" name="achternaam" placeholder="Achternaam" required>
            <input class="font-s" type="email" id="email" name="email" placeholder="E-mailadres" required>
            <textarea class="font-s" id="bericht" name="bericht" rows="13" cols="50" placeholder="Uw bericht:" required></textarea>
            <button type="submit" value="Submit" class="submit-button font-m">Verstuur</button>

        </form>
    </div>
</section> -->



<section class="contact-form-area flex-r">
    <div class="contact-form">
        <div class="contact-form-title">
            <h2 class="t-w font-s">Ontvangen berichten</h2>
        </div>
        <table class="messages-table">
            <thead>
                <tr>
                    <th>Voornaam</th>
                    <th>Achternaam</th>
                    <th>Email</th>
                    <th>Bericht</th>
                </tr>
            </thead>
            <tbody>
                <?php
            include('./dbcalls/readmessage.php');

                // Berichten weergeven in de tabel
                foreach ($messages as $message) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($message['Voornaam']) . "</td>";
                    echo "<td>" . htmlspecialchars($message['Achternaam']) . "</td>";
                    echo "<td>" . htmlspecialchars($message['Emailadres']) . "</td>";
                    echo "<td>" . htmlspecialchars($message['Bericht']) . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</section>

<section class="create-form-area flex-r">
    <div class="create-form">
        <div class="create-form-title">
        <h2 class="t-w font-s">CREATE</h2>
        </div>
        <form class="flex-c" action="./dbcalls/create.php" method="post">
            <input class="font-s create-input" type="text" id="1" name="gerecht" placeholder="Gerechtnaam" required>
            <input class="font-s create-input" type="number" id="prijsje" name="prijs" placeholder="Prijs" required>
            <input class="font-s create-input" type="text" id="1" name="omschrijving" placeholder="Omschrijving" required>
            <input class="font-s create-input" type="text" id="1" name="categorie" placeholder="Categorie" required>
            <input class="font-s create-input" type="text" id="1" name="imagelocation" placeholder="Imagelocation" required>

            <button type="submit" value="submit" class="submit-button font-m">Create</button>
        </form>
    </div>
</section>

<div class="create-form-title">
        <h2 class="font-s bold">UPDATE/DELETE</h2>
</div>

<section class="admin flex-c">
<?php

            include("./dbcalls/conn.php");
            include('./dbcalls/read.php');


            //Het loopen van de database gegevens
            foreach ($result as $value) {

                ?>
                <div class="update-form">
                    <form action="./dbcalls/update.php" method="post">
                    <input type="hidden" name="ID" value="<?php echo ($value['ID']); ?>">
                    <input type="text" class="update-input font-s" name="Productnaam" id="" value="<?php echo $value['Productnaam']; ?>">
                        <input type="number" class="update-input font-s" name="Prijs" id="" value="<?php echo $value['Prijs']; ?>">
                        <input type="text" class="update-input font-s" name="Omschrijving" id="" value="<?php echo $value['Omschrijving']; ?>">
                        <input type="text" class="update-input font-s" name="Categorie" id="" value="<?php echo $value['Categorie']; ?>">
                        <input type="text" class="update-input font-s" name="Img" id="" value="<?php echo $value['Img']; ?>">
                        <button type="submit" class="update-button">Update</button>
                    </form>
                <?php
echo '<form action="./dbcalls/delete.php" method="post">';
echo '<input class="update-input" type="hidden" name="ID" value="' . $value['ID'] . '">';
echo '<input class="update-button" type="submit" name="" value="delete" > ';
echo '</form>';
echo '</div>';
}
?>
</section>
<script>
    const prijsInput = document.getElementById("prijsje");

    prijsInput.addEventListener("input", function () {
        const waarde = prijsInput.value;

        // Check of de waarde géén geldig getal is
        if (isNaN(waarde) || waarde.trim() === "") {
            alert("Vul een geldig getal in!");
            prijsInput.value = ""; // eventueel input wissen
        }
    });
</script>

<?php
include('./partials/footer.php');
?>
</body>
</html>