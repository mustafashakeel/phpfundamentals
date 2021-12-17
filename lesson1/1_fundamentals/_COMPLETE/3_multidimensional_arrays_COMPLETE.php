<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP 3 Multidimensional Array</title>
		<style>
			body {
				background:#d0f9d6;
				font-family:tahoma;
			}		
        	header {
				display:flex;
				align-items:center;
				margin-bottom:-15px;
        	}
        	hr {
        		flex-basis:100%;
        		background:black;
        		border-color:black;
        	}
			p, ul, ol, li, h3, table {
				width:500px; margin:auto;
			}
			h1 {
				text-align:center;
			}
			td {
				border:solid 2px black;
			}
		</style>
	</head>
	<body>
		<header>
			<hr> <h1>Multidimensional Arrays</h1> <hr>
		</header>

		<h3>Fix all the errors in the below multi-dimensional array and then print the following strings from the array in the correct elements.</h3>
		<ul>
			<li>Tomato: <i>in an input box</i></li>
			<li>Cat: <i>in a paragraph</i></li>
			<li>Canada: <i>in a heading</i></li>
			<li>Apple: <i>in an input box</i></li>
		</ul>
		<?php
			$brokenArray = array(
				array("Apple", "Banana", "Tomato"),
				array("Dog", "Cat", "Racoon"),
				array("Canada", "USA", "Mexico")
			);

			echo "<input value='". $brokenArray[0][2] ."'>";
			echo "<p>". $brokenArray[1][1] ."<p>";
			echo "<h4>". $brokenArray[2][0] ."<h4>";
			echo "<input value='". $brokenArray[0][0] ."'>";
			
		?>
		
		<br>

		<h3>Create a multi-dimensional array of your classmates in your current containing the following information about them. Include yourself in this array. All arrays must be index arrays.</h3>
		<ul>
			<li>name</li>
			<li>nationality</li>
			<li>hair colour</li>
			<li>month they were born</li>
		</ul>
		<p>Then, using the multi-dimensional array print out your own details in a table with a single row.</p>
		<br>
		<?php
			// Create multi-dimensional array
			$classArray = array(
				array("Bob", "Canadian", "Blonde", "June"),
				array("James", "Irish", "Black", "April"),
				array("Mary", "Canadian", "Brown", "December")
			);

			echo "<table>";
			echo 	"<tr>";
			foreach($classArray[1] as $val) {
				echo "<td>" . $val . "</td>";
			}
			echo 	"<tr>";
			echo "</table>";
		?>
	</body>
</html>
