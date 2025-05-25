<?php
$host = "localhost";
$port = "5432";
$dbname = "web2";
$user = "postgres";
$password = "123";

$conn_string = "host=$host port=$port dbname=$dbname user=$user password=$password";

$dbconn = pg_connect($conn_string);

if (!$dbconn) {
    die("Lidhja me PostgreSQL deshtoi.");
}

// echo "Lidhja me PostgreSQL u realizua me sukses.";
?>
