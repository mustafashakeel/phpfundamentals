<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$con = mysqli_connect("localhost:8889", "root", "root", "acme");

// what is the command to get a record??
$contact_id = $_GET["contact_id"];
$sql = "SELECT * FROM contacts WHERE id='$contact_id'";

$result = mysqli_query($con, $sql);

// how many records should the above statement give to me???

// how can I get ONE result / row from the $result object/array???
$contactRecord = mysqli_fetch_assoc($result); // get me the first (and only) result row

?>
    <h1>Contact Details</h1>

    <h2><?=$contactRecord["first_name"]?> <?=$contactRecord["last_name"]?></h2>
    <p>Email: <?=$contactRecord["email_address"]?></p>

    <a href="index.php">See other contacts</a>
</body>
</html>