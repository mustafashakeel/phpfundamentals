<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Submit </h1>
    <?php

    // if ($_GET['name'] || $_GET['age']) {

    //     $name =  $_GET['name'];
    //     $age =  $_GET['age'];

    //     echo  " Welcome  to " . $name;
    //     echo " <br/> the School is " . $age;
    // }

    if ($_POST['name'] || $_POST['age']) {

        $name =  $_POST['name'];
        $age =  $_POST['age'];

        echo  " Welcome  to " . $name;
        echo " <br/> the School is " . $age;
    }




    ?>

</body>

</html>