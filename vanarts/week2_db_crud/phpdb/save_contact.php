<?php

// how do we receive values submitted from the form???
//print_r($_POST);


// connect to the database... 
$con = mysqli_connect("localhost:8889", "root", "root", "acme");


$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email_address = $_POST["email_address"];

# INSERT INTO contacts (first_name, last_name, email_address) VALUES ('nathan', 'leggatt', 'nathan@vanarts.com')

$sql = "INSERT INTO contacts (first_name, last_name, email_address) VALUES ('$first_name', '$last_name', '$email_address')";

mysqli_query($con, $sql);

// go to a different page // first thing sent to the browser
// cannot change location 'headers already sent' error IT MEANS. you already sent contact to the browser
header("location: success.php");


?>