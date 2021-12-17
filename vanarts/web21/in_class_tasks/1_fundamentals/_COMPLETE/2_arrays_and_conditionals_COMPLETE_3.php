<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>PHP 2 Conditionals and Arrays</title>
		<style>
			body {
				background:#fff0f0;
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
			p, ul, ol, li, h3 {
				width:500px; margin:auto;
			}
		</style>
	</head>
	<body>
		
		<header>
			<hr> <h1>Holidays</h1> <hr>
		</header>

		<p>Create a boolean called passport and set it to true and an index array called suitcase containing 3 values that are strings. These values should be items you take with you on holiday.
		Write a script in PHP that checks the length of the array and checks if passport is true. 
		</p>

		<br>

		<ol>
			<li>
			If passport is true and the array contains less than 4 values I want you to add 2 new values to the array: "Map" and "Plane Ticket" and then print the following paragraph to the page – "My suitcase contains "(and then list each item in suitcase separated by commas (,) <em>in alphabetical order</em>) "and I am going on holidays."
			</li>
			<li>
			If passport is false and the array contains less than 4 values I want you to add 1 new value to the array: "TV Guide" and then print the following paragraph to the page – "My suitcase contains " (and then list each item in suitcase separated by commas (,) <em>in REVERSE alphabetical order</em>) "but I am staying at home."
			</li>
			<li>
			If suitcase contains 4 or more values then I want you to remove the first item from suitcase and simply print the contents of suitcase in <em>alphabetical order</em> in a paragraph.
			</li>
		</ol>

		<br>

		<h3>Before attempting to code this you MUST WRITE OUT PSEUDOCODE to help you with the problem.</h3>

		<br>

		<?php

			// PSEUDOCODE

			// Create basic suitcase array and passport boolean

			// Check if passport is TRUE and if suitcase array contains less than 4 elements
				// add 2 new values to the array
				// sort array alphabetically 
				// print "My suitcase contains" (list each item in suitcase separated by commas (,)
				// print I am going on holiday

			// Check if passport is FALSE and if suitcase array contains less than 4 elements
				// add 1 new values to the array
				// sort array in REVERSE alphabetically 
				// print "My suitcase contains" (list each item in suitcase separated by commas (,)
				// print I am staying at home

			// Check if suitcase array contains more than 4 elements
				// remove first item from array
				// print suitcase contents
			

			// Assignment
			$suitcase = array("Swimming Gear", "Sunscreen", "Towel");
			$passport = true;

			// Result
			if($passport && count($suitcase) < 4) {
				// You have the passport and you have less than 4 items in suitcase
				// Therefore we must add Map and Plane Ticket to suitcase
				array_push($suitcase,"Map","Plane Ticket");	
				makePara($suitcase, " and I am going on holiday.</p>");
			}
			else if(!$passport && count($suitcase) < 4) {
				// You don't have the passport and you have less than 4 items in suitcase
				// Therefore we must 
				array_push($suitcase,"Map");	
				makePara($suitcase, " but I am staying at home.</p>");
			}
			else {     // or else if(count($suitcase) >= 4) {
				// You have 4 or more items in your suitcase
				array_splice($suitcase, 0, 1); 
				makePara($suitcase, ".</p>");
			}

			function makePara($arr, $str) {
				echo "<p>My suitcase contains ";

				$itemString = "";
				foreach($arr as $item) {
					$itemString .= $item . ", ";
				}
				
				echo rtrim($itemString, ", ") . $str;
			}

			// makePara($suitcase, " and I am going on holiday.</p>");
			// makePara($suitcase, " but I am staying at home.</p>");
			// makePara($suitcase, ".</p>");
		?>
	</body>
</html>
