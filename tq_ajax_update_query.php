 <?php
error_reporting(0);
session_start();
include("db/dbi.php");
// Called from tq_my_query.php


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
							 $qry_id = $_POST["qry_id"];	
							 $query_title = $_POST["qry_title"];
	                         $query_text = $_POST["qry_text"];
							
							 $update_str="UPDATE `tq_query_details`   set `query_title`='$query_title' , `query_text`='$query_text'  where query_id = $qry_id" ;

							//echo $update_str ;
					         
							mysqli_query($conn, $update_str) ;
                            $row_count = mysqli_affected_rows($user_conn) ;
							echo " Number of records updated:".$row_count ;
					?>
				
