<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		div {background: yellow; padding: 20px; border: 2px solid orange;}
	</style>
</head>
<body>
<?php

$arrFavFood = array("cake", "icecream", "donuts");

//print_r($arrFavFood);
//echo $arrFavFood[1];

$arrFavThings = array("food"=>"cake", "color"=>"hotpink", "place"=>"maui");
//echo $arrFavThings["place"];

// multi-dimensional array...
$arrPeople = array(
	array("name"=>"Nathan", "age"=>39, "color"=>"hotpink"),
	array("name"=>"Colson", "age"=>19, "color"=>"pink"),
	array("name"=>"Nicole", "age"=>29, "color"=>"blue"),
	array("name"=>"Bob", "age"=>29, "color"=>"blue"),
	array("name"=>"Akash", "age"=>49, "color"=>"green")
);

foreach($arrPeople as $index=>$arrPerson)
{	
	?>
	
	<div>
		<h1><?=$arrPerson["name"]?></h1>
		<p><?=$arrPerson["age"]?></p>
	</div>
	<?php
}

/*$arrColors = array("red", "blue", "green");
foreach($arrColors as $key=>$value)
{
	echo $value;
}*/

//echo $arrPeople[2]["favPlaces"][1];
?>
</body>
</html>