<html>
	<head>
		<title>2 Sending Data</title>
		<style>
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

			form { 
				width:470px; height:auto; background-color:pink; 
				border:solid 1px gray; position:relative; margin-left:auto;
				margin-right:auto; padding:10px; 
			}
		</style>

	</head>

	<body>
		<header>
			<hr> <h1>Sending Form Data</h1> <hr>
		</header>
		<p>You have been given a form which contains text inputs and some radio buttons.</p>
		<p>Add more form elements and send the data correctly to a php file that will handle the information.</p>

		<form>
			<input type="text"> First Name <br><br>
			<input type="text"> Last Name <br><br>
			
			<!-- <input type="radio">Female
   			<input type="radio">Male
 -->
   			<br><br>

		    <input type="submit" style="position:relative; width:80%; left:10%; margin-bottom:20px;"/>

		</form>
	</body>

<html>