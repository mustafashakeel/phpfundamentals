<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="save_contact_details.php">
    <label>First Name</label><input type="text" name="first_name"/><br/>
    <label>Email Address</label><input type="text" name="email_address"/><br/>
    <?php include("functions/main.php");?>
    <?=buildCountryDD()?>
    
    <input type="submit"/>
</form>


<?php
// what info would you need
// what fields??? what type of answer???
$formSettings = array (
    "action"=>"save_contact_details.php",
    "submitLabel"=>"Contact Us Now",
    "fields"=>array(
        array("label"=>"FUll Name", "type"=>"text"),
        array("label"=>"Post Code", "type"=>"text"),
        array("label"=>"Best Time to Call", "type"=>"text")
    )
);

buildForm($formSettings);

?>
</body>
</html>