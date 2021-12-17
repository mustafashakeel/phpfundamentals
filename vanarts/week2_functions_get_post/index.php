<?php

//echo "hello world";
// // invoke the function/ call the function
// sayHello("Nathan", 41);
// sayHello("Joe", 99, false);

// function sayHello($name, $age, $isAlive=true){
//     echo "Hello World $name";
// }

//include("functions/main.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2>Product Listing</h2>
   <?php

   include("functions/main.php");

   foreach(getProducts() as $index=>$product){
       echo '<a href="product_info.php?product_key='.$product["sku"].'">'.$product["name"].'</a><br/>';
   }
   ?>
    
</body>
</html>