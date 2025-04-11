<?php
include("./conn.php");
session_start()
$searchResult = $_GET["searchresult"];
$test = '%' . $searchResult . '%';
$stmt = $conn->prepare(query: "SELECT * FROM menuitems WHERE Productnaam LIKE :product;");
$stmt->bindParam(':product', $test);
$stmt->execute();
$result2 = $stmt->fetchAll();
$_SESSION['searchresults'] = $result2;
header('location: menu.php');