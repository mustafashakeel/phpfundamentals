<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>3 Big Form Process</title>
        <style>
            img {  
                width:300px; display:block; margin:auto;
            }
            h1 {
                text-align:center;
            }
            .container {
                position:relative; width:500px; 
                margin-left:auto; margin-right:auto;
                background:gray; border:solid 1px black; padding:20px;
            }
        </style>
    </head>
    <body>
        <h1>PHP Process Data</h1>
        
            <?php
                // Check to see if POST has been successful
                // If it has do the following
            	if ( isset($_POST["form-submit"]) ) {	

                    echo "<div class='container' style='background:" . $_POST["colour"] . "'>";

                    // Check to see if the user inputted their names correctly
                    if( !empty($_POST['firstname']) OR !empty($_POST['lastname'])) {	
                        // All names have been inputted so show greeting
                        echo "<p>Hello " . $_POST["gender"] . ". " . $_POST["first-name"] . " " . $_POST["last-name"] . " and welcome to this webpage!<p>";
                    }
                    else {
                        // One or more names are missing therefore show basic greeting
                         echo "<p>Hello Newcomer and welcome to this webpage.</p>";
                    }

                    // Check to see if the hobbies array is populated and
                    // if it is then print out the selected ones
                    if(!empty($_POST['hobbies']) ) {
                        $hobbyNum = count($_POST['hobbies']);

                    	echo "<p>You enjoy " . $hobbyNum . " hobbies in total and they are:</p>";
                        echo "<ol>";
                        foreach($_POST['hobbies'] as $value) {      
                                echo "<li>". strtoupper($value) ."</li>";
                        }  
                         echo "</ol>"; 
                    }
                    // If there are no hobbies then state that
                    else {
                    	echo "<p>You dont have any hobbies!</p>";
                    }

                    // Check and display the nationality of the user
                    // Use a switch statment to decide on greeting
                    if(!empty($_POST['nationality']) ) {

                        switch ( $_POST['nationality'] ) {
                            case "canada":
                                echo "<p>You are Canadian eh!</p>";
                                break;
                            case "india":
                                echo "<p>You are Indian. Namaste!</p>";
                                break;
                            case "japan":
                                echo "<p>You are Japanese. Kon'nichiwa!</p>";
                                break;
                             case "nigeria":
                                echo "<p>You are from Nigeria. Hello.</p>";
                                break;
                            case "south_africa":
                                echo "<p>You are from South Africa. Hallo.</p>";
                                break;
                            case "russia":
                                echo "<p>You are Russian. Zdravstvuyte.</p>";
                                break;
                            case "brazil":
                                echo "<p>You are Brazilian. Olá.</p>";
                                break;
                            default:
                                echo "<p>We don’t know you’re nationality.</p>";
                        }
                        echo "<br><img src='img/". $_POST['nationality'] .".jpg'>";
                    }
                    echo "</div>";
            	}
                // POST has not been successful. Therefore we 
                // must alert the user of this
                else {
                     echo "<p>Unfortunately the form did not send correctly :( <br>
                            Please <a href='big_form_complete.php'>click here</a> to return to the form.</p>";
            	}
            ?>
        </div>
    </body>
</html>