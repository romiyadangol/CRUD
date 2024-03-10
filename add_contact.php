<?php
    require "./connect.php";
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number']; 

    mysqli_query($conn, "INSERT INTO contacts (first_name, middle_name, last_name, phone_number) VALUES ('$first_name', '$middle_name', '$last_name', '$phone_number')");
    header("Location: display_contacts.php");
?>