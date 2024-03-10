<?php
    require "./connect.php";
    $data = $_POST['first_name'];
    $data2 = $_POST['middle_name'];
    $data3 = $_POST['last_name'];
    $data4 = $_POST['phone_number'];
    $id = $_POST['id'];

    mysqli_query($conn, "update contacts set first_name = '$data', middle_name = '$data2', last_name = '$data3', phone_number = '$data4' where id = $id");
    header('Location: edit_contact.php');
