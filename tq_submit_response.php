<?php
error_reporting(0);
session_start();
include("db/dbi.php");
?>
<html>
<head>
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
 
   <script>
    function submitForm() {
      var thisForm = document.forms.ResponseFowardForm;
      thisForm.submit();
    }
  </script>
</head>

 	<body onload="submitForm()"> 

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
							 
							  $query_id = $_POST["query_id"];
							 $query_response = $_POST["query_response"];
							 							
							 $insert_str="INSERT INTO `tq_query_response`(`query_id`, `response_dtm`, `response_text`, `responded_by`, `responded_ip`) 
							 VALUES ('$query_id', '$now_date','$query_response','$user','$ip_address')" ;

							//echo $insert_str ;
					         
							mysqli_query($conn, $insert_str) ;
                            							 
							 $response_id = mysql_insert_id($conn) ;
														

							$msg = 'Response Reference Number:'. $response_id  ."\n".

							'Response Text:'. $query_response ."\n".

							'IP Address'. $ip_address ."\n" ;
							

                            $message="Greetings from Sisoft!!!!\r\n";

                            $message.="Thanks for Submitting the response. " ;

							$message.="\r\n Response Details \r\n";

                            $message .=$msg ;
			                
							$to=$user;

							$headers .= 'From: <info@sisoft.in>' . "\r\n";

                            $headers .= 'Cc: vijayrastogi@yahoo.com' . "\r\n";

							$subject = "Sisoft: Query Response Submit Confirmation";

                        // send email

							$sentmail = mail($user, $subject, $message, $headers);
							
						  //  header("Location:mysisoft.php?opt=6");
					?>

		
			</div>       

			<form action="tq_query_view.php" method="GET"  name="ResponseFowardForm">
					<input hidden name="query_id" value="<?php echo $query_id; ?>"/>
					<input type="submit" value="View" class="botton_bg">
			</form>

			
    </div>				
				
</body>
</html>