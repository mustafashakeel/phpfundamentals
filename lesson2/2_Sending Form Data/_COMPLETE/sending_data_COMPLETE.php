<html>
	<head>
		<style>
			form { width:470px; height:auto; background-color:pink; 
				   border:solid 1px gray; position:relative; margin-left:auto;
				   margin-right:auto; padding:10px; }
		</style>

	</head>

	<body>
		<p>You have been given a form which contains text inputs...</p>

		<form action="php_processing_data_COMPLETE.php" method="post">
			<input type="text" name="firstname"></input> First Name <br><br>
			<input type="text" name="lastname"></input> Last Name <br><br>
			<input type="text" name="middlename"></input> Middle Name <br><br>

			<input  type = "radio"  name="gender" value = "female">Female
   			<input  type = "radio"  name="gender" value = "male">Male

   			<input  type = "radio"  name="house" value = "semi">Semi
   			<input  type = "radio"  name="house" value = "detached">Detached

   			<br><br>

			<input  type="checkbox" name="hobbies[]" value="music"> Music
		    <input  type="checkbox" name="hobbies[]" value="reading"> Reading
		    <input  type="checkbox" name="hobbies[]" value="movies"> Movies
		    <input  type="checkbox" name="hobbies[]" value="soccer"> Soccer
		    <input  type="checkbox" name="hobbies[]" value="ultimate"> Ultimate
		    <input  type="checkbox" name="hobbies[]" value="skiing"> Skiing

		    <br><br>

		    <input name="f_submit" type = "submit" style="position:relative; width:80%; left:10%; margin-bottom:20px;">

		</form>
	</body>

<html>