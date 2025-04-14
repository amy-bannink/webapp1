<!-- <h1> read message</h1> -->
<?php
include("conn.php");
// if ($conn) {
//     echo "Verbinding is succesvol!";
// } else {
//     echo "Geen verbinding met de database!";
// }
$sql = "SELECT * FROM contact ORDER BY ID DESC"; 
$stmt = $conn->prepare($sql);
$stmt->execute();
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
 ?>