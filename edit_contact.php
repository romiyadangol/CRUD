<?php
    require "./connect.php";
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $id = $_POST['id'];

    mysqli_query($conn, "update contacts set first_name = '$first_name', middle_name = '$middle_name', last_name = '$last_name', phone_number = '$phone_number' where id = $id");
    header('Location: display_contacts.php');
    ?>
