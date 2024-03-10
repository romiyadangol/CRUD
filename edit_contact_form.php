<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h2>Add Contact</h2>
        <form action="edit_contact.php" method="post">
            <label for="id">Id : </label><input type="text" name="id"><br><br>
            <label for="first_name">First Name : </label><input type="text" name="first_name"><br><br>
            <label for="middle_name">Middle Name : </label><input type="text" name="middle_name"><br><br>
            <label for="last_name">Last Name : </label><input type="text" name="last_name"><br><br>
            <label for="Phone_number">Phone Number : </label><input type="number" name="phone_number"><br><br>
            <button type="submit">Edit</button>
        </form><br><br>    
        <button><a href="display_contacts.php">Go to List of Contacts</a></button>
    </main>
</body>
</html>
