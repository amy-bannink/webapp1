<h1> create</h1>
<?php

$product = $_POST['gerecht'];
$prijs = filter_input(INPUT_POST, 'prijs', FILTER_VALIDATE_FLOAT, [
    'options'=> ["min_range" => 0, "max_range"=> 20]
]);
// $prijs = $_POST['prijs'];
$img = $_POST['imagelocation'];
$omschrijving = $_POST['omschrijving'];
$categorie = $_POST['categorie'];

// if (empty($_POST['Prijs'])) {
//     echo "Prijs is verplicht.";
// }
include("./conn.php");
if ($prijs === false) {
    echo "Ongeldige prijs.";
} else {
    $sql = 'INSERT INTO menuitems(Productnaam, Prijs, Img, Omschrijving, Categorie) VALUES (:product, :prijs, :img, :omschrijving, :categorie);';
$stmt = $conn->prepare($sql);
$stmt->bindParam("product", $product);
$stmt->bindParam("prijs", $prijs);
$stmt->bindParam("img", $img);
$stmt->bindParam("omschrijving", $omschrijving);
$stmt->bindParam("categorie", $categorie);

$stmt->execute();

header(header: 'Location: ../admin2.php');
}
// var_dump($_POST);

