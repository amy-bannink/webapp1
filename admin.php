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

<?php include('./partials/header.php')?>
<h1>admin</h1>
<form action="./dbcalls/create.php" method = "post">
    <label for= "">type hier je gerechtnaam in:</label><br>
    <input type="text" name = "gerecht" id="1">
    <input type="submit" value="submit">
</form>
<?php include('./partials/footer.php')?>

</body>
</html>
