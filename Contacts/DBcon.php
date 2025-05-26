<?php
  
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "healify_final";

    $con = mysqli_connect($servername , $username, $password , $dbname);

    if(!$con){
        echo "Db connection error..." . mysqli_connect_error();
    }
?>
