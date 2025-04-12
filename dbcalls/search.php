<?php
include("./conn.php");
session_start();
var_dump($_GET["searchresult"]);

$searchResult = $_GET["searchresult"];
$test = '%' . $searchResult . '%';
$stmt = $conn->prepare("SELECT * FROM menuitems WHERE Productnaam LIKE :product;");
$stmt->bindParam(':product', $test);
$stmt->execute();
$result2 = $stmt->fetchAll();

if (empty($result2)) {
    $_SESSION['searchresults'] = [];
    $_SESSION['zoekmelding'] = "Geen resultaten gevonden";
} else {
    $_SESSION['searchresults'] = $result2;
    $_SESSION['zoekmelding'] = '';
}
// var_dump($_SESSION['searchresults']);  // Debugging regel

header('location: ../menu.php');
// exit();
?>
