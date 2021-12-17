<?php

// change your connection details, before uploading to cpanel
$con = mysqli_connect("localhost", "kaiming_ticket", "XQsNfvyyVVK7HU6", "kaiming_ticketmaster"); // make connection

$sql = "SELECT * FROM events"; // make a query

$result = mysqli_query($con, $sql); // which connection, what query

// loop over all our records / rows from the query
while($row = mysqli_fetch_assoc($result))
{
    echo "<h1>".$row["name"]."</h1>";
}


?>