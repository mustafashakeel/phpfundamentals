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
			// Write Pseudocode first

		?>
	</body>
</html>


