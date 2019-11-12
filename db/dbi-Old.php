<?php

	    // Connection Parameters	
            
	        $dbhost = "localhost";
            $username = "sis_trng";
            $password = "sisoft123";
            $database = "sistrng";
	    
	    // Connect to the mysql server using the connection parameters	
	    $conn = mysqli_connect($dbhost,$username, $password, $database);

            if(! $conn )
            {
                die('Could not connect:$database ' . mysqli_error());
            }

           mysqli_query($conn, "SET NAMES 'utf8'" );

		
			// User database information
			$username1 ="sis_trng" ;
			$password1 ="sisoft123" ;
			$database1 = "sistrng" ;

	       $user_conn = mysqli_connect($dbhost,$username1, $password1, $database1);

            if(! $user_conn )
            {
                die('Could not connect:$database1 ' . mysqli_error());
            }

           mysqli_query($user_conn, "SET NAMES 'utf8'" );
			
	                

?>

