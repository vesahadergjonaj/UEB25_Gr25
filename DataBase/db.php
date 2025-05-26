<?php
$servername = "localhost";
$username = "root";     // ose ndonjë tjetër, nëse e ke ndërruar
$password = "";         // nëse nuk ke vendosur password, leje bosh
$dbname = "web2"; // zëvendëso me emrin e databazës tënde

$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrollo nëse ka ndonjë gabim në lidhje
if ($conn->connect_error) {
    die("Lidhja me databazën dështoi: " . $conn->connect_error);
}
?>