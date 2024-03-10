<?php
    require "./connect.php";
    $id = $_POST['id'];

    mysqli_query($conn, "delete from contacts where id = $id");
    header('Location: display_contacts.php');
    ?>
