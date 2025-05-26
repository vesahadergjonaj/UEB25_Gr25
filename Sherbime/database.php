<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healify_final";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
    die("Gabim lidhja me databazën: " . mysqli_connect_error());
}
?>