<?php

print_r($_POST);

?>
<h1>Contact Form Confirmation</h1>
<p><strong>Name:</strong><?=$_POST["first_name"]?></p>
<p><strong>Email Address:</strong><?=$_POST["email_address"]?></p>