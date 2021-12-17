<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>3 Big Form</title>
		<style>
			body {
				font-family:verdana;
			}
			form { 
				position:relative; 
				width:470px; background-color:pink; 
				border:solid 1px gray; margin-left:auto;
				margin-right:auto; padding:10px; 
				float:right;
			}

			.container {
				width:50%; float:left;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<h3>I want you to modify the below form so that it will POST its data to a new PHP script (some of the HTML needs to be fixed). All elements must 
			be able to send their data. In addition to this, I want the 2 radio button groups to automatically be set to a default value using HTML. You do not need to check if the <u>radio buttons or select box</u> are empty or not.</h3>
			<p>In the PHP script on the process page I want to see the following:</p>
			<ol>
				<li>The $_POST must be checked to see if it is set. If it is not, then a paragrpah should be displayed saying the data did not send correctly
				and a link must also be displayed which will send the user back to the form page. If it is set, then a DIV should be created that contains the following.</li>
				<li>Depending on what sex has been selected I want "Mr " or "Mrs " to be displayed in front of the names.</li>
				<li>The user's full name must be displayed along with a greeting message. If only the user's first or last name has sent then that is ok. If neither names are provided then display "Newcomer" instead.</li>
				<li>I want the preferred colour that the user selected to be used as the background colour of the DIV.</li>
				<li>If the user has selected one or more hobbies then I want the following statement to be displayed: "You enjoy (<i>the number of hobbies selected</i>) hobbies. In particular you like " and then list off each hobby that was selected in an <b>ordered list</b>. I also want each hobby to be in capital letters. Look for a PHP function to do this for you.</li>
				<li>Finally with the select box I want you to use a switch statement to tell the user where they are from, display a unique message for that nationality and also display the image of their corresponding flag.</li>
			</ol>
		</div>
		<form action="process_big_form_complete.php" method="POST">
			<input type="text" name="first-name"> First Name 

			<select type="select" name="nationality" style="float:right; width:180px;">
		    	<option value="canada">Canada</option>
		    	<option value="south_africa">South Africa</option>
		    	<option value="japan">Japan</option>
		    	<option value="nigeria">Nigeria</option>
		    	<option value="russia">Russia</option>
		    	<option value="india">India</option>
		    	<option value="brazil">Brazil</option>
		    </select>

			<br><br>

			<input type="text" name="last-name"> Last Name 

			<br><br>

			<p>Please select your Gender.</p>
			<input type="radio" name="gender" value="Mrs" checked>Female
   			<input type="radio" name="gender" value="Mr">Male

   			<br><br>

   			<p>Please select your preferred colour.</p>
   			<input type="radio" name="colour" value="pink" checked>Pink
   			<input type="radio" name="colour" value="lime">Lime Green
   			<input type="radio" name="colour" value="aqua">Aqua Blue

   			<br><br><br>

   			<p>What hobbies, if any, do you enjoy?</p>
			<input type="checkbox" name="hobbies[]" value="music"> Music
		    <input type="checkbox" name="hobbies[]" value="reading"> Reading
		    <input type="checkbox" name="hobbies[]" value="movies"> Movies
		    <input type="checkbox" name="hobbies[]" value="soccer"> Soccer
		    <input type="checkbox" name="hobbies[]" value="ultimate"> Ultimate
		    <input type="checkbox" name="hobbies[]" value="skiing"> Skiing
		    <input type="checkbox" name="hobbies[]" value="food"> Food
		    <input type="checkbox" name="hobbies[]" value="swimming"> Swimming
		    <input type="checkbox" name="hobbies[]" value="singing"> Singing
		    <input type="checkbox" name="hobbies[]" value="chess"> Chess
		    <input type="checkbox" name="hobbies[]" value="sweets"> Sweets
		    <input type="checkbox" name="hobbies[]" value="animals"> Animals

		    <br><br>

		    <input type="submit" name="form-submit" style="position:relative; width:80%; left:10%; margin-bottom:20px;">
		</form>
	</body>

<html>