<?php
error_reporting(0);
session_start();
include("db/dbi.php");
 
?>

<style type="text/css">
        .table {
            display: table;

        }

        .row {
            display: table-row;
			border: 1px gray;
        }

        .column {
            display: table-cell;
            vertical-align: top;
			border: 1px solid gray;
			padding: 10px ;
        }
    </style>
	
	<div id="enrolled">
	<div class="container">
	<h3 style="margin-top:0px;">Query Submit Confirmation</h3>
                
					<?php  
							$user = $_SESSION['login'];
							if (isset($_SESSION['userphone']))
								{
									$phone = $_SESSION['userphone'];
								}
							else
								{
									$phone = "9540283283" ; //HARD CODED -
								}
							 $now_date = date("Y-m-d H:i:s");
							 $ip_address = $_SERVER['REMOTE_ADDR'];
							 
							 $query_user = $_POST["query_user"];
							 $query_tag = $_POST["query_tag"];
							 $query_title = $_POST["query_title"];
	                         $query_text = $_POST["query_text"];
							
							 $insert_str="INSERT INTO `tq_query_details`( `query_user`, `query_tag`, `query_title`, `query_text`,  `query_dtm`, `query_ip`, `query_status`)   
							 VALUES ('$query_user', '$query_tag','$query_title', '$query_text', '$now_date', '$ip_address','O')" ;

							// echo $insert_str ;
					         
							mysqli_query($conn, $insert_str) ;
                            							 
							$query_id = mysqli_insert_id($conn) ;
														

							$msg = 'Query Reference Number: '. $query_id  ."\n".

							'User Name: ' . $query_user ."\n".

							'Query Topic: '. $query_tag ."\n".
							
							'Query Title: '. $query_title ."\n".

							'Query Text: '. $query_text ."\n".

							'IP Address: '. $ip_address ."\n" ;
							

                            $message="Greetings from Sisoft!!!!\r\n";

                            $message.="Thanks for Submitting the query. Query will be responded by concerned technical person soon" ;

							$message.="\r\n Query Details \r\n";

                            $message .=$msg ;
			                
							$to=$query_user;

							$headers .= 'From: <info@sisoft.in>' . "\r\n";

                            $headers .= 'Cc: vijayrastogi@yahoo.com' . "\r\n";

							$subject = "Sisoft Technical Query Submit Confirmation -" .$query_title ;

                        // send email

							$sentmail = mail($to, $subject, $message, $headers);
							mail("shwetank20@gmail.com", $subject, $message) ;

					?>

		
							 <div class="row">
								<div class="column"> Query Details: </div>
								<div class="column"> <?php echo $now_date.":".$query_id ;?> </div>
							</div>		
							<div class="row">
								<div class="column">  User Name:  </div>
								<div class="column">  <?php echo $query_user ;?> </div> 
							</div>
							<div class="row">
								<div class="column"> Query Topics: </div>
								<div class="column"> <?php echo $query_tag;?></div>
							</div>
							<div class="row">
								<div class="column"> Query Title: </div>
								<div class="column"> <?php echo $query_title;?></div>
							</div>
							<div class="row">
								<div class="column"> Query Text: </div> 
								<div class="column"> <?php echo $query_text?></div>
							</div>    
				</div>       
    </div>				
				
