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
    if ($_GET['name'] || $_GET['age']) {

        $name =  $_GET['name'];
        $age =  $_GET['age'];

        echo  " Welcome  to " . $name;
        echo " <br/> the School is " . $age;
    }
    ?>

    <form action="<?php $PHP_SELF ?>" method="GET">
        Name: <input type="text" name="name">
        Age: <input type="text" name="age">
        <input type="submit">

    </form>

</body>

</html>