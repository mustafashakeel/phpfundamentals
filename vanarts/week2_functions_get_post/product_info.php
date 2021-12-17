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
   include("functions/main.php");
   $product = searchForProductBySku($_GET["product_key"], getProducts());

?>
    <h1>The Product Is: <?=$product["name"]?> $<?=$product["price"]?></h1>
</body>
</html>