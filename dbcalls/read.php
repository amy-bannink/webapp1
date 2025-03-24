<?php
include("./dbcalls/conn.php");

$stmt = $conn->prepare(query: "SELECT * FROM menuitems;");
$stmt->execute();
$result = $stmt->fetchAll();
