<h1> create</h1>
<?php

// formulier en zet in de variabel product
$product = $_POST['gerecht'];
echo 'dit is mijn productnaam: ' . $product. '<<<<<';
include("./conn.php");

$sql = 'INSERT INTO menuitems(ProductNaam) VALUES (:product);';
$stmt = $conn->prepare($sql);
$stmt->bindParam(":product", $product);
$stmt->execute();


// header(header: 'location: ../index.php');