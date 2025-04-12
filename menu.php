<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_GET['clear_search']) && $_GET['clear_search'] == 'true') {
    unset($_SESSION['searchresults']);
    unset($_SESSION['zoekmelding']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Importing Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&family=Sawarabi+Mincho&display=swap"
        rel="stylesheet">
        <script src="./assets/js/customButton.js"></script>

    <title>Sakura Sushi Website</title>
</head>

<body>
    <?php
    include('partials/header.php');

    ?>
    <section class="menu-section flex-r">
        <h1 class="font-m">Menu</h1>
    </section>
    <main class="menu-main flex-c">
        <form action="./dbcalls/search.php" method="GET" class="flex-r zoekbalk">
            <input type="text" name="searchresult" class="zoekbalk-input" placeholder="Waar ben je naar op zoek?">
            <custom-button></custom-button>
        </form>
        <?php
    include('dbcalls/read.php');


            if (isset($_SESSION['searchresults'])&& !empty($_SESSION['searchresults'])) {
            echo '<div class="zoekresultaat-title flex-r">';
            echo '<a href="./menu.php?clear_search=true"> <img src="./assets/img/arrow-back.png" alt="Go back to menu" class="arrow-back"></a>';
            echo '<h2 class="font-s">Zoekresultaten</h2>';
            echo '</div>';

            foreach ($_SESSION['searchresults'] as $row) {
                echo '<div class="flex-r menu-items">';
                echo '<div class="menu-img-container"><img src="' . $row['Img'] . '" class="zoekresultaat-img"></div>';
                echo '<div class="menu-item-info flex-c">';
                echo '<div class="flex-r spacing">';
                echo '<h2 class="font-s productnaam">' . $row['Productnaam'] . '</h2>';
                echo '<p class="font-s prijs">€' . $row['Prijs'] . '</p>';
                echo '</div>';
                echo '<p class="font-s">' . $row['Omschrijving'] . '</p>';
                echo '</div>';
                echo '<img src="./assets/img/add-to-cart-icon.svg" class="shopping-cart-icon" alt="Toevoegen aan bestelling">';

                echo '</div>';
            }
        }
            // else if (isset($_GET['searchresult']) && !empty($_GET['searchresult']) && !isset($_SESSION['searchresults'])) {
            //     echo '<h2 class="font-s">Geen zoekresultaten</h2>';
            // }
            else if (isset($_SESSION['zoekmelding']) && !empty($_SESSION['zoekmelding'])) {
                echo '<div class="zoekresultaat-title flex-r">';
                echo '<a href="./menu.php?clear_search=true"> <img src="./assets/img/arrow-back.png" alt="Go back to menu" class="arrow-back"></a>';
                echo '<h2 class="font-s">' . $_SESSION['zoekmelding'] . '</h2>';
                echo '</div>';
            }
        else {
            foreach ($cat as $value) {
                echo '<h1 class="categorie-title">' . $value['Categorie'] . '</h1>';
                foreach ($result as $row) {
                    if ($value['Categorie'] == $row['Categorie']) {
                        echo '<div class="flex-r menu-items">';
                        echo '<div class="menu-img-container"><img src="' . $row['Img'] . '" class="zoekresultaat-img"></div>';
                        echo '<div class="menu-item-info flex-c">';
                        echo '<div class="flex-r spacing">';
                        echo '<h2 class="font-s productnaam">' . $row['Productnaam'] . '</h2>';
                        echo '<p class="font-s prijs">€' . $row['Prijs'] . '</p>';
                        echo '</div>';
                        echo '<p class="font-s">' . $row['Omschrijving'] . '</p>';
                        echo '</div>';
                        echo '<img src="./assets/img/add-to-cart-icon.svg" class="shopping-cart-icon" alt="Toevoegen aan bestelling">';
        
                        echo '</div>';
                    }
                }
            }
        }   

        ?>
    </main>
    <?php
    include('partials/footer.php');
    ?>
</body>

</html>