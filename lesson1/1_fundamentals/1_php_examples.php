<!DOCTYPE html>
<html>
	<head>
		<title>PHP 1 Examples</title>
		<style>
			body {
				background:aliceblue;
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
			p, ul, ol, li {
				width:500px; margin:auto;
			}
		</style>
	</head>
	<body>

		<header>
			<hr> <h1>One</h1> <hr>
		</header>
		<p>Create an integer variable called myNumber and set it equal to an integer of your choice. Then write code that will output the following in an unordered list:</p>
		<ul>
			<li>multiple the number by 5</li>
			<li>divide the number by 2</li>
			<li>square the number (multiple itself by itself)</li>
			<li>find the square root of the number</li>
			<li>add 25 to the number</li>
		</ul>

		<br>


		<header>
			<hr> <h1>Two</h1> <hr>
		</header>

		<p>Create an associative array of the classmates in the same row as you and their home town. Echo out a table with each student and their hometown on the same row.</p>

		<?php

		?>


		<header>
			<hr> <h1>Three</h1> <hr>
		</header>

		<p>Create a function in PHP that takes in a single parameter. This parameter must be a name of a student in class and must echo a paragraph stating how many characters are in the name e.g. "There are 5 letters in James". Call this function three times with three different names</p>

		<?php

		?>


		<header>
			<hr> <h1>Four</h1> <hr>
		</header>

		<p><b>strpos()</b> is a PHP method that outputs the position of a string or character inside of another string. Write code to determine what strpos() does if the character or string being searched is not found inside of the string. Also determine if strpos() is case sensitive.<br>
		Create code that echos a paragraph "YES x is in string" if a character is found in the string and echos "NO x is not in string" if it isn't.</p>
		
		<?php

		?> 


		<header>
			<hr> <h1>Five</h1> <hr>
		</header>

		<p>	
			Create a numbered shopping list (1 - 10), listing off 10 different subjects that you would study at school. The list item should be followed with the number of characters that are found in the word of the subject. For instance:
			<ol>
				<li>History has 7 characters</li>
			</ol>
		</p>

		<?php

			// Create a numbered shopping list (1 - 10), listing off 10 different subjects that you 
			// would study at school. The list item should be followed with the number of characters
			// that is found in the word of the subject.
			
			// Assignment

		?>

		<header>
			<hr> <h1>Six</h1> <hr>
		</header>

		<p>	
			Use PHP to create images for all the flags inside of the img folder. Ensure that all images have alt tags and that each image has the same width. If the country flag begins with the letter "J" make sure that the image is twice as tall as the others. 
		</p>

		<?php

			// Use PHP to create images for all the flags inside of the img folder. Ensure that all images
			// have alt tags and that each image has the same width. If the country flag begins with the
			// letter "J" make sure that the image is twice as tall as the others. 
			
			// Assignment

		?>

		<header>
			<hr> <h1>Seven</h1> <hr>
		</header>
		<ul>	
			<li>Create 4 arrays named after continents (shown below) that contain 5 countries belonging to that continent.</li>
			<li>Create a string called showCountries and have it equal to either Europe, America, Africa or Asia.</li>
			<li>Then create a select box that contains 5 options referring to the countries from that particular continent.</li>
			<li>The countries should appear as options in the select box and must have a value as well.</li>
			<li>The countries must begin with a capital letter and should appear in alphabetical order. You will need to achieve this using PHP code.</li> 
			<li>Use for loops in this question.</li>
		</ul>
		<?php
			// Create a string called showCountries and have it equal to either Europe, America, Africa or Asia
			// Then create a select box that will show a list of 5 countries from that particular continent.
			// The countries should appear as options in the select box and must have a value as well. The
			// countries must begin with a capital letter and should appear in alphabetical order. You will need
			// to programatically order the list into alphabetical order. You'll have to look this up.
			// Use for loops in this question
			
			// Assignment

		?>
	</body>
</html>


