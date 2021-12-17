<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {color: red}
    </style>
</head>
<body>
<?php
    $products = array(
        array("id"=>123, "name"=>"apples", "price"=>1.60),
        array("id"=>321, "name"=>"orange", "price"=>2.10),
        array("id"=>123123, "name"=>"grapes", "price"=>5.20),
        array("id"=>45515, "name"=>"bananas", "price"=>1.40)
    );
    
    foreach($products as $index=>$productDetails){
        ?>
        <div class="product">
            <h1><?=$productDetails["name"]?></h1>
            <p><?=$productDetails["price"]?></p>
        </div>
        <?php
    }
?>
</body>
</html>