<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stafi";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
    echo "Gabim lidhja me databazën: " . mysqli_connect_error();
}
?>
