<h1> verstuur bericht</h1>
<?php

include("./conn.php");
$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$email = $_POST['email'];
$bericht = $_POST['bericht'];

$sql = 'INSERT INTO contact(Voornaam, Achternaam, Emailadres, Bericht) VALUES (:voornaam, :achternaam, :email, :bericht);';
$stmt = $conn->prepare($sql);
$stmt->bindParam("voornaam", $voornaam);
$stmt->bindParam("achternaam", $achternaam);
$stmt->bindParam("email", $email);
$stmt->bindParam("bericht", $bericht);
$stmt->execute();

if ($stmt->execute()) {
    header("Location: ../contact.php?status=success");
    exit;
} else {
    header("Location: ../contact.php?status=error");
    exit;
}
?>
