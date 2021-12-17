<?php
error_reporting(E_ALL);
echo "hello world";

$name = "Nathan";

echo $name;

echo "<h1>Hello World</h1>";

/* conditionals */
if($name=="Nathan"){
    echo "Wow, nice to meet you";
}

$age = 19;

$colors = array("Red", "Blue", "Green");

for($i=0;$i<count($colors);$i++){
    echo $colors[$i]."<br>"; // . means concat
}

foreach($colors as $key=>$value){
    echo $value."<br>";
}

/// create an array of classmates
$classmates = array("Asuza", "Rei", "Risako", "Jenna", "Colson", "Amy", "Sachin");
for($i=0;$i<count($classmates);$i++){
    echo $classmates[$i]."<br>";
}

/// loop over BOTH methods output the names of classmates. 
foreach($classmates as $index=>$studentName)
{
    echo $index." ".$studentName."<br>";
}

echo "<h2>$classmates[4]</h2>";

$favMeals = array("Nathan"=>"Creme Brule", "Jenna"=>"Tiramsu", "Amy"=>"Creme Brule");
print_r($favMeals);

foreach($favMeals as $name=>$dessert){
    //echo $name." ".$dessert."<br>";
    echo "$name $dessert<br>";
}

$favThings = array(
    "Nathan"=>array("Hiking", "Icecream", "Dessert", "Pie"), 
    "Colson"=>array("Guitar", "Pies", "Perogies", "Cats")
);

foreach($favThings as $personName=>$personFavThings){
    echo "<h2>$personName</h2>"; // what error should I get????

    // loop over this specific persons fav things
    foreach($personFavThings as $index=>$favItem){
        echo "$favItem<br>";
    }
}

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

// array traversal by direct pointing
echo $products[3]["price"];


//make multi-dimensional INDEX array of your classmates 
//name, location, email, photo

///
// looop over that array... and in a nicely formatted way... show their profile information.... 


?>