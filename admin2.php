<?php

session_start();
if(isset($_SESSION['username']))




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
<button?php
include('./partials/header.php');
?>
<section class="flex-r galerie-title">
    <div class="login-title">
    <h1 class="font-m">Admin(2)</h1>
    </div>
</section>
<section class="create-form-area flex-r">
    <div class="create-form">
        <div class="create-form-title">
        <h2 class="t-w font-s">CREATE</h2>
        </div>
        <form class="flex-c" action="./dbcalls/create.php" method="post">
            <input class="font-s create-input" type="text" id="1" name="gerecht" placeholder="Gerechtnaam">
            <input class="font-s create-input" type="text" id="1" name="prijs" placeholder="Prijs">
            <input class="font-s create-input" type="text" id="1" name="omschrijving" placeholder="Omschrijving">
            <input class="font-s create-input" type="text" id="1" name="categorie" placeholder="Categorie">
            <input class="font-s create-input" type="text" id="1" name="imagelocation" placeholder="Imagelocation">

            <button type="submit" value="submit" class="submit-button font-m">Create</button>
        </form>
    </div>
</section>

<h2>Update/Delete</h2>
<section class="admin">
<?php

            include("./dbcalls/conn.php");
            include('./dbcalls/read.php');


            //Het loopen van de database gegevens
            foreach ($result as $value) {

                ?>
                
                <form action="./dbcalls/update.php" method="post">
                    <input type="text" name="Productnaam" id="" value="<?php echo $value['Productnaam']; ?>">
                    <input type="text" name="Prijs" id="" value="<?php echo $value['Prijs']; ?>">
                    <input type="text" name="Omschrijving" id="" value="<?php echo $value['Omschrijving']; ?>">
                    <input type="text" name="Img" id="" value="<?php echo $value['Img']; ?>">
                    <button type="submit">Update</button>
                </form>
                <?php

              
echo '<form action="./dbcalls/delete.php" method="post">';
echo '<input type="hidden" name="ID" value="' . $value['ID'] . '">';
echo '<input type="submit" name="" value="delete" > ';
echo '</form>';

echo '</div>';
}
?>
</section>


<?php
include('./partials/footer.php');
?>
</body>
</html>
