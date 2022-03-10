<?php
    $servername = "localhost:3308";
    $username = "root";
    $password = "";
    $dbname = "rental_system";
    
    $connect = mysqli_connect($servername, $username, $password,$dbname);
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connected<br/>";
?>