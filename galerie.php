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
            <h1 class="font-m">Galerie</h1>
</section>

<section class="galerie-section">
    <div class="galerie-container">
    <?php
        include('dbcalls/read.php');
            foreach ($result as $row) {
                echo '<img src="' . $row['Img'] . '" alt="' . $row['Productnaam'] . '" class="galerie-img">';
            }
    ?>
    </div>
</section>
<?php
include('partials/footer.php');
?>
</body>
</html>
