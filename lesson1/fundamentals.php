<!DOCTYPE html>
<html>
	<head>
		<title>PHP - Fundamentals</title>
		<style>
			.newParagraph { color:blue; font-size:22px; }

		</style>
	</head>

	<body>
		<h1>PHP Variables</h1>

		<?php             
			/*  
				PHP code must be contained in the following
				tags <?php ... ?> in order for it to be 
				handled by the server 
			*/

			$stringVar   =    'Hello World';       // a sequence of characters. Must use “ ” 
			$intVar      =    15;		           // a whole number positive or negative
			$floatVar    =    4.25;		           // a decimal point number pos or neg
			$boolVar     =    true;		           // true or false
			$arrayVar    =    array('apple', 'banana', 'cactus');
			// an array is a collection of multiple values in a single variable

			echo var_dump($stringVar);
			echo var_dump($intVar);
			echo var_dump($floatVar);
			echo var_dump($boolVar); 
			echo var_dump($arrayVar);    
		?>

		<hr>

		<h2> PHP can be used to output HTML elements using echo </h2>
		<?php             

			echo "<img style='width:400px; height:auto; border:solid 3px red;' src='pic/img1.jpg' />";
			echo "<p class='newParagraph'>This is a paragraph echoed by PHP. It has a class which inherits it's style from the local CSS.";
   			echo "<p>My name is $stringVar! and I am $intVar years old.</p>";
   
		?>

		<hr>

		<h2> Manipulating Strings </h2>

		<p>Strings can be scrutinised several ways.</p>

		<?php

		?>

		<hr>

		<h2> PHP Operators allow us to do math, assign, concatenate and check </h2>

		<p>For the following examples the variable $num1 = 5, $num2 = 7, $num3 = 12.75.</p>

		<?php  
			// First we will declare the variables and assign them the values
			$num1 = 5;
			$num2 = 7;
			$num3 = 12.75;           

			// These are basic arithmetic
			echo $num1 + $num2 . "<br>";
			echo $num3 - $num2 . "<br>";
			echo $num1 += $num2;

			echo "<br><br>";

			// Becareful because when you change variable values they remain so
			echo "Num1 is now $num1 and not 5 anymore. <br><br>";

			// Concatenation involves sticking things together
			echo $num3 . $stringVar;
		
		?>

		<hr>

		<h2> Conditional Statements are used to check for things </h2>
		<p> If statements are the most basic version of this.</p>

		<?php
			if($num3 > $num2) {
				// If Num3 is bigger than Num2 then execute this code
				// If it isn't then just ignore this piece between {}
				echo "Num3 is bigger than Num2";
				echo "<br>";
			}
		?>

		<p>If and Else statements allow a different block of code to run if the If statement is false.</p>
		<?php
			if($num3 < $num2) {
				// If Num3 is bigger than Num2 then execute this code
				echo "Num3 is smaller than Num2";
			}
			else {
				// If it isn't, run the following code
				echo "Num3 is bigger than Num2";
			}
			// This line of code is outside the If Else statement and will run regardless
			echo "<br>";
		?>

		<p>Adding an Else If to these statements makes it even bigger. For the next part let's create a string variable called $colour and set it equal to 'green'.</p>
		<?php
			// Declare variable
			$colour = 'green';

			if($colour === "red") {
				echo "The colour is red.";
			}
			else if($colour === "green") {
				echo "The colour is green.";
			}
			else {
				echo "The colour is something else entirely!";
			}
			// This line of code is outside the If Else statement and will run regardless
			echo "<br>";
		?>

		<hr>

		<h2>Logical Operators allow us to combine Conditional Statements</h2>
		<p>AND, OR, NOT, XOR</p>
		<?php
			// XOR is either one of these are true but not both
			// Declare variables
			$medal1 = 'gold'; $medal2 = 'silver'; $medal3 = 'bronze';

			if($medal1 === "gold" and $medal2 === "silver") {
				echo "Gold and Silver";
			}
			else {
				echo "Something else.";
			}
			echo "<br>";
		?>

		<br><br>
		<?php
			// Declare variables
			// Drinking Age
			$age = 14; $nationality = "Montenegro";

			if($age >= 18 or $nationality === "Montenegro") {
				echo "You can drink";
			}
			else {
				echo "No drink for you";
			}
			echo "<br>";


			// Declare variables
			// Age in life
			$age = 100;

			if($age >= 0 and $age < 5) {
				echo "You are baby";
			}
			else if($age >= 5 and $age < 18) {
				echo "You are teenager";
			}
			else {
				echo "You are an adult";
			}
			echo "<br>";

		?>
	</body>
</html>

