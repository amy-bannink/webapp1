<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Importing Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&family=Sawarabi+Mincho&display=swap"
        rel="stylesheet">

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
        <form method="GET" action="./dbcalls/search.php">
            <input type="text" name="searchresult">
            <input type="submit" value="zoeken">
        </form>

        <?php
        include('dbcalls/read.php');

        session_start();
        if (isset($_SESSION['searchresults'])) {
            var_dump($_SESSION['searchresults']);
        } else {
            foreach ($cat as $value) {
                echo '<h1 class="categorie-title">' . $value['Categorie'] . '</h1>';
                foreach ($result as $row) {
                    if ($value['Categorie'] == $row['Categorie']) {
                        echo '<div class="flex-r menu-items">';
                        echo '<img src="./assets/img/add-to-cart-icon.svg" class="shopping-cart-icon">';
                        echo '<div class="menu-item-info flex-c">';
                        echo '<div class="flex-r">';
                        echo '<h2 class ="font-s productnaam">' . $row['Productnaam'] . '</h2>' . '<p class="font-s">€' . $row['Prijs'] . '</div>';
                        echo '<p class="font-s">' . $row['Omschrijving'] . '</p></div>';
                        echo '</div>';
                    }
                }
            }
        }


        ?>
        <!-- <h2 class="font-s">Categorie</h2>
        <div class="flex-r">
            <img src="./assets/img/add-to-cart-icon.svg" alt="shopping cart icon" class="shopping-cart-icon">
            <p class="font-s bold">Productnaam</p>
            <p>Prijs</p>
        </div>
        <p>Omschrijving, omschrijving en omschrijving</p> -->

    </main>
    <?php
    include('partials/footer.php');
    ?>
</body>

</html>