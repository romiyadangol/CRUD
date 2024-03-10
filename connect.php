<?php
    $hostname = "localhost";
    $username = "root";
    $password = "root";
    $database = "phone_book";

    $conn = mysqli_connect($hostname,$username,$password,$database);
     #check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        echo "Connected successfully";
    }
    ?>