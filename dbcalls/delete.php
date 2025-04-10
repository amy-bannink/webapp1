<?php
include("./conn.php");

$id = $_POST['ID'];
// var_dump($id);

$stmt = $conn->prepare("DELETE FROM menuitems WHERE ID=:ID");
$stmt->bindParam(':ID', $id);
$stmt->execute();

header('Location: ../admin2.php');