<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Landing / Dashboard</h1>
    <a href="contact_form.php">Add A Person</a>

    <h2>List of Contacts</h2>
    
    <?php

    $con = mysqli_connect("localhost:8889", "root", "root", "acme");
    $sql = "SELECT * FROM contacts ORDER BY first_name";

    $result = mysqli_query($con, $sql); // fetch the data from the db, it gives it back into the $result variable

    while($row = mysqli_fetch_assoc($result))
    {
        $id = $row["id"];
        $name = $row["first_name"];
        echo "<a href='show_contact.php?contact_id=$id'>$name</a><br>";
    }
    ?>

</body>
</html>