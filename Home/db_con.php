<?php
$servername = "localhost";
$username = "root";
$password = "";      // Në XAMPP është zakonisht bosh
$dbname = "healify_final"; // Ky duhet te jete emri i databazës tënde

$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrollo lidhjen
if ($conn->connect_error) {
    die("Lidhja me databazën dështoi: " . $conn->connect_error);
}
?>
