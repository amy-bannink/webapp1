<?php

include("conn.php");

$productnaam = $_POST['Productnaam'];
$prijs = $_POST['Prijs'];
$img = $_POST['Img'];
$omschrijving = $_POST['Omschrijving'];
$categorie = $_POST['Categorie'];
$id = $_POST['ID'];



var_dump($_POST);

$sql = 'UPDATE menuitems SET Productnaam = :productnaam, Prijs = :prijs, Img = :img, Omschrijving = :omschrijving, Categorie = :categorie WHERE ID = :id';
$stmt = $conn->prepare($sql);
$stmt->bindParam("productnaam", $productnaam );
$stmt->bindParam("prijs", $prijs );
$stmt->bindParam("img", $img );
$stmt->bindParam("omschrijving", $omschrijving );
$stmt->bindParam("categorie", $categorie );
$stmt->bindParam("id", $id);



$stmt->execute();


header("location: ../admin2.php");