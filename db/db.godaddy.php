<?php

	$hostname="localhost";
	
	$username="sis_trng";
	$password="sisoft123";
	
	$database="sistrng";

		    // Connect to the mysql server using the connection parameters	
	$qc=mysql_connect($hostname,$username,$password);
	
	            if(! $qc )
            {
                die('Could not connect: ' . mysql_error());
            }

	
	
	
	$qs=mysql_select_db($database,$qc) or die("not select db");
   
  
   

?>