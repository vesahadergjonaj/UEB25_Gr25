<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healify_final";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrollo nëse ka ndonjë gabim në lidhje
if ($conn->connect_error) {
    die("Lidhja me databazën dështoi: " . $conn->connect_error);
}
?>