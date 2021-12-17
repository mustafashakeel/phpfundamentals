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

		<form>
			<input type="text"></input>First Name 

			<select type="select" style="float:right; width:180px;">
		    	<option>Canada</option>
		    	<option>South Africa</option>
		    	<option>Japan</option>
		    	<option>Nigeria</option>
		    	<option>Russia</option>
		    	<option>India</option>
		    	<option>Brazil</option>
		    </select>

			<br><br>

			<input type="text"></input> Last Name <br><br>

			<p>Please select your sex.</p>
			<input type="radio">Female
   			<input type="radio">Male

   			<br><br>

   			<p>Please select your preferred colour.</p>
   			<input type="radiobutton">Pink
   			<input type="radiobutton">Lime Green
   			<input type="radiobutton">Aqua Blue

   			<br><br><br>

   			<p>What hobbies, if any, do you enjoy?</p>
			<input type="checkbox"> Music
		    <input type="checkbox"> Reading
		    <input type="checkbox"> Movies
		    <input type="checkbox"> Soccer
		    <input type="checkbox"> Ultimate
		    <input type="checkbox"> Skiing
		    <input type="checkbox"> Food
		    <input type="checkbox"> Swimming
		    <input type="checkbox"> Singing
		    <input type="checkbox"> Chess
		    <input type="checkbox"> Sweets
		    <input type="checkbox"> Animals

		    <br><br>

		    <input type="submit" name="form_submit" style="position:relative; width:80%; left:10%; margin-bottom:20px;"></input>

		</form>
	</body>
<html>