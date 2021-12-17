<html>
	<head>
		<title>1 PHP Loops</title>
		<style>
			body {
				background:#fbffd9; padding:20px;
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
			div { 
				width:100%; height:40px; 
				text-align:center; color:black; font-size:18px; 
				margin-top:5px;
			}

		</style>

	</head>

	<body>
		<h3>For each of the first 4 questions I want you to use a different type of loop. Make sure to read each question first and then determine which loop should be used for each.</h3>
		<header>
			<hr> <h1>One</h1> <hr>
		</header>
		<p>Create 10 spans which each state in sequence "Span 1" , "Span 2" , "Span 3" and so on.</p>

		<?php
		
		?>


		<header>
			<hr> <h1>Two</h1> <hr>
		</header>
		<p>Create an array of 5 countries and make sure that the string "Stop" is included as an element in there. Then write a loop that echos out inputs with each country placed in the value. Do this for every country until "Stop" appears. When this happens make sure to stop and don't print any further inputs even with other countries. Write this code so that it will work no matter where "Stop" is situated in the array.</p>

		<?php
			
		?>


		<header>
			<hr> <h1>Three</h1> <hr>
		</header>
		<p>In PHP the <span style="font-weight:bold; font-family:verdana;">rand(num1, num2)</span> function returns a random number between the two numbers displayed in the parenthesis. Use the rand() function for the next question. Create an array of 6 student names in the class and include "James" in there as the 7th element. Write code that will randomly print a paragraph with a name from the array. Make sure that when "James" is about to appear the script stops and no more paragraphs are printed. Ensure that if "James" is the first paragraph to be made that it is allowed and then the script continues as normal - printing paragraphs until "James" appears once more.</p>

		<?php
			
		?>


		<header>
			<hr> <h1>Four</h1> <hr>
		</header>
		<p>Write code in PHP that will create a div for every element in the colours array (the style for creating div is already included). For every div that is created, I want the background colour to be defined by the colour in the array. However if the colour happens to be either "purple", "blue", "black" or "brown" I want the colour of the text to appear white. For everything else it should be black. 
		</p>
		
		<?php
			// Array of colours
			$coloursArray = array("red", "lime", "blue", "pink", "purple", "orange", "yellow", "black", "brown", "grey", "aqua", "teal", "lightblue", "crimson");

		?>


		<header>
			<hr> <h1>Five</h1> <hr>
		</header>
		<p>Extend the code you created in question 4 so that for every second div the text should appear bigger "font-size: 28px" as opposed to 18px which every other div should have.</p>
	</body>

<html>