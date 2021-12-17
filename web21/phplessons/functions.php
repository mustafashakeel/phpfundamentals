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

    // function myFunction($name, $age)
    // {

    //     echo " Welcome to " . $name;
    //     echo "<br/>it is " . $age . " years old !!!";
    // }
    // //  Call the function 
    // myFunction("Vanarts", 23);

    function myFunction($num1, $num2)
    {

        $sum = $num1 + $num2;
        return $sum;
    }
    //  Call the function 
    $return_value = myFunction(10, 23);

    echo " the total is $return_value !!";


    ?>

</body>

</html>