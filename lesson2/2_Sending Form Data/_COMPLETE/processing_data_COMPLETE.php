<?php
	// Check to see if the form data has been sent
    if ( isset($_POST['f_submit']) ) {	
        // Form data has been sent via POST	
        echo "<h3>Form sent</h3>";

        // Show superglobal POST array
        var_dump( $_POST );

        // If name has been filled out
        // empty is better as it checks for empty inputs however
        // be careful as it regards 0 as being empty
        if(!empty($_POST['firstname'])){
            echo "<p>Your name is " . $_POST['firstname'] . " " . $_POST['lastname'] . "</p>";
        }
        
        // If middle name has been filled out
        if(!empty($_POST['middlename'])){
            echo "<p>Your middle name is " . $_POST['middlename']. "</p>";
        }
        
        // Gender
        if(!empty($_POST['gender'])){
            echo "<p>You are " . $_POST['gender']. "</p>";
        }

        // Check if hobbies have been selected and if so 
        // Print them all out.
        if(isset($_POST['hobbies']) ) {
            echo "<p>";
            foreach($_POST['hobbies'] as $val){
        	   echo "You enjoy " . $val . "<br>";
            }
            echo "</p>";
        }
        else {
        	echo "<p>You don't have any hobbies.</p>";
        }
	}

    // For Data has NOT been sent
    else {
         echo "<p>Form data has not been sent successfully! You stumbled upon here in the url.</p>";
	}

?>