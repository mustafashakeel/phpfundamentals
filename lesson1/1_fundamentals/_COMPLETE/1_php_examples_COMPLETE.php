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
		<?php
			$myNumber = 10;

			echo "<ul>";
			echo 	"<li>" . ($myNumber*5) . "</li>";
			echo 	"<li>" . ($myNumber/2) . "</li>";
			echo 	"<li>" . pow($myNumber, 2) . "</li>";
			echo 	"<li>" . sqrt($myNumber) . "</li>";
			echo 	"<li>" . ($myNumber + 25) . "</li>";
			echo "</ul>";
		?>


		<header>
			<hr> <h1>Two</h1> <hr>
		</header>

		<p>Create an associative array of the classmates in the same row as you and their home town. Echo out a table with each student and their hometown on the same row.</p>

		<table>
			<tr>
				<th>Student</th><th>Home Town</th>
			</tr>
			<?php
				$classArr = array("James"=>"Cork", 
					              "Mark"=>"Lisbon", 
					              "Niamh"=>"Limerick");

				foreach($classArr as $stud => $city) {
					echo "<tr>";
					echo 	"<td>". $stud ."</td><td>". $city ."</td>";
					echo "</tr>";
				}
			?>
		</table>


		<header>
			<hr> <h1>Three</h1> <hr>
		</header>

		<p>Create a function in PHP that takes in a single parameter. This parameter must be a name of a student in class and must echo a paragraph stating how many characters are in the name e.g. "There are 5 letters in James". Call this function three times with three different names</p>

		<?php
			function nameLength($name) {
				echo "<p>There are " . strlen($name) . " letters in " . $name . "</p>"; 
			}

			nameLength("James");
			nameLength("Bob");
			nameLength("Kennedy");
		?>


		<header>
			<hr> <h1>Four</h1> <hr>
		</header>

		<p><b>strpos()</b> is a PHP method that outputs the position of a string or character inside of another string. Write code to determine what strpos() does if the character or string being searched is not found inside of the string.<br>
		Create code that echos a paragraph "YES x is in string" if a character is found in the string and echos "NO x is not in string" if it isn't.</p>
		
		<?php
			$word = "Cat";
			$search = "x";

			echo "z is not in Cat " . strpos($word, "z");
			echo "c is not in Cat " . strpos($word, "c");

			var_dump(strpos($word, "z"));

			if(strpos($word, $search)) {
				echo "<p>YES " . $search . " is in string</p>";
			}
			else {
				echo "<p>NO " . $search . " is not in string</p>";
			}
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
			// Assignment
			$subjectArray = array("Math", "English", "French", "Science", "History", "Geography");

			echo "<ol>";

			for($i=0; $i<count($subjectArray); $i+=1){
				echo "<li>". $subjectArray[$i] ." has ". strlen($subjectArray[$i]) ." characters.</li>";
			}

			echo "</ol>";

		?>

		<header>
			<hr> <h1>Six</h1> <hr>
		</header>

		<p>	
			Use PHP to create images for all the flags inside of the img folder. Ensure that all images have alt tags and that each image has the same width. If the country flag begins with the letter "J" make sure that the image is twice as tall as the others. 
		</p>
		<?php
			// Assignment
			$countriesArray = array("ireland", "canada", "china", "italy", "jamaica", "japan", "montenegro", "philippines", "wales");

			foreach ($countriesArray as $c){
				if(strpos($c, "j") === 0){
					echo "<img src='img/". $c ."' alt='Flag of ". $c ."' style='height:120px;'/>";
				}
				else {
					echo "<img src='img/". $c ."' alt='Flag of ". $c ."' style='height:60px;'/>";
				}
			}

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
			// Create Arrays for each continent with 5 countries each
			$countriesEurope = array("France", "UK", "Ireland", "Andorra", "Spain");
			$countriesAmerica = array("America", "Canada", "Mexico", "Barbados", "Cuba");
			$countriesAsia = array("Japan", "China", "Thailand", "Korea", "Vietnam");
			$countriesAfrica = array("South Africa", "Sudan", "Morocco", "Libya", "Congo");

			// Create string to show continent
			$showCountries = "europe";

			// Create select box
			echo "<select>";

			// Conditional statement to check which countries to show
			if($showCountries === 'europe') {

				// Loop through each element in array
				for($i=0; $i<count($countriesEurope); $i+=1){

					// Sort array before displaying elements
					sort($countriesEurope);
					echo "<option value='".$countriesEurope[$i]."'>".ucfirst($countriesEurope[$i])."</option>";
				}
			}
			else if($showCountries === 'america') {
				for($i=0; $i<count($countriesAmerica); $i+=1){
					sort($countriesAmerica);
					echo "<option value='".$countriesAmerica[$i]."'>".ucfirst($countriesAmerica[$i])."</option>";
				}
			}
			else if($showCountries === 'africa') {
				for($i=0; $i<count($countriesAfrica); $i+=1){
					sort($countriesAfrica);
					echo "<option value='".$countriesAfrica[$i]."'>".ucfirst($countriesAfrica[$i])."</option>";
				}
			}
			else {    
				for($i=0; $i<count($countriesAsia); $i+=1){
					sort($countriesAsia);
					echo "<option value='".$countriesAsia[$i]."'>".ucfirst($countriesAsia[$i])."</option>";
				}
			}
			echo "</select>";
		?>


		<?php
			// Create Arrays for each continent with 5 countries each
			$countriesEurope = array("France", "UK", "Ireland", "Andorra", "Spain");
			$countriesAmerica = array("America", "Canada", "Mexico", "Barbados", "Cuba");
			$countriesAsia = array("Japan", "China", "Thailand", "Korea", "Vietnam");
			$countriesAfrica = array("South Africa", "Sudan", "Morocco", "Libya", "Congo");

			// Create string to show continent
			$showCountries = "europe";
			$cArray;

			// Create select box
			echo "<select>";

			// Conditional statement to check which countries to show
			if($showCountries === 'europe') {
				$cArray = $countriesEurope;
			}
			else if($showCountries === 'america') {
				$cArray = $countriesAmerica;
			}
			else if($showCountries === 'africa') {
				$cArray = $countriesAfrica;
			}
			else {    
				$cArray = $countriesAsia;
			}

			for($i=0; $i<count($cArray); $i+=1){			
				sort($cArray);
				echo "<option value='".$cArray[$i]."'>".ucfirst($cArray[$i])."</option>";
			}
			echo "</select>";
		?>

	</body>
</html>
