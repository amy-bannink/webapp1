<h1> create</h1>
<?php

// formulier en zet in de variabel product
$product = $_POST['gerecht'];

include("./conn.php");

$sql = 'INSERT INTO menuitems(Productnaam) VALUES (:product);';
$stmt = $conn->prepare($sql);
$stmt->bindParam(":product", $product);

$stmt->execute();


header(header: 'Location: ../admin2.php');