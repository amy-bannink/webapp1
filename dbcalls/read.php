<?php
include("./dbcalls/conn.php");

$stmt = $conn->prepare(query: "SELECT * FROM menuitems;");
$stmt->execute();
$result = $stmt->fetchAll();

$stmt1 = $conn->prepare(query: "SELECT distinct Categorie FROM menuitems;");
$stmt1->execute();
$cat = $stmt1->fetchAll();
