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

$name = "Nathan";
$age = 40;

// what type of array are these?
$colors = ["Red", "Blue", "Green", "Pink", "Brown"];
$places = array("Vancouver", "Canada", "Earth");

// this will output the array to the browser
//print_r($colors);

// can be used to inspect ANY variable
//var_dump($places);

echo "<h1>Favorite Things</h1>";

//echo "line 26"; // 
//die; // stop the script right here. nothing else will execute

// loop over the array, and output the list of colors as a list

// for... foreach....
// showme the colors[at this spot] 
//echo $colors[2];

echo "<ul>";
for($i=0; $i<count($colors); $i++)
{
    echo "<li>$colors[$i]</li>";
}
echo "</ul>";

// echo "<ul>";
// // loop over places and output them as a list... using a for loop
// for($i=0; $i<count($places); $i++)
// {
//     echo "<li>$places[$i]</li>";
// }
// echo "</ul>";

echo "<ul>";
foreach($places as $place)
{
    echo "<li>$place</li>";
}
echo "</ul>";


// make an array of student names
// output as a list, using a foreach. 
$students = array("Anton", "Charlene", "Olivia");

echo "<ul>";
foreach($students as $student)
{
    echo "<li>$student</li>";
}
echo "</ul>";


/// what is the other type of array?? we have index and..... associated
// an associative array has keys, instead of index
$favThings = array(
    "place"=>"Vancouver", 
    "color"=>"Red", 
    "hobby"=>"Soccer"
);

foreach($favThings as $key=>$favorite)
{
    echo "$key: $favorite<br>";
}

// info about a movei or a book
$movie = array(
   "title"=>"Back to the Future",
   "year"=>1985,
   "stars"=>5,
   "produced"=>"Universal Studios"
);

foreach($movie as $detail=>$movieRecord)
{
    echo "$detail: $movieRecord<br>";
}

// loop over the movie array and output all the info

/// multidimensional associative array. 
$favFood = array(
    "Nikki"=>array("Key Lime Pie", "Creme Brulee"),
    "Anton"=>array("Lassagna", "Pizza", "Spaghetti"),
    "Olivia"=>array("Korean BBQ", "Apple Crisp", "Pear Pie")
);

$products = array(
    array("price"=>120, "name"=>"jacket"),
    array("price"=>120, "name"=>"jacket"),
    array("price"=>120, "name"=>"jacket"),
    array("price"=>120, "name"=>"jacket")
);

// print_r($favFood["Nikki"]);
// print_r($favFood["Olivia"]);

// output in debug format Olivia's favorite food
foreach($favFood as $person=>$meals)
{
    echo "<h2>$person</h2>";
    echo implode(" and ", $meals);
}
?>

</body>
</html>