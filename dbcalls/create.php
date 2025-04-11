<h1> create</h1>
<?php

// formulier en zet in de variabel product
$product = $_POST['gerecht'];
$prijs = $_POST['prijs'];
$img = $_POST['imagelocation'];
$omschrijving = $_POST['omschrijving'];
$categorie = $_POST['categorie'];


include("./conn.php");
// var_dump($_POST);

$sql = 'INSERT INTO menuitems(Productnaam, Prijs, Img, Omschrijving, Categorie) VALUES (:product, :prijs, :img, :omschrijving, :categorie);';
$stmt = $conn->prepare($sql);
$stmt->bindParam("product", $product);
$stmt->bindParam("prijs", $prijs);
$stmt->bindParam("img", $img);
$stmt->bindParam("omschrijving", $omschrijving);
$stmt->bindParam("categorie", $categorie);

$stmt->execute();

// header(header: 'Location: ../admin2.php');