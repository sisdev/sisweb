<?php
error_reporting(0);
session_start();
 include("db/dbi.php");
 
 //      MID: 4943288 Key: GE0wGsus Salt: GOUeqBV2UA 
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
	
	<div id="enrolled" >
	<h3>Enrollment Confirmation - Pay Now</h3>
                
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
							$id = $_POST['batch_id'];
							 $now_date = date("Y-m-d H:i:s");
							 $ip_address = $_SERVER['REMOTE_ADDR'];
							 
							 $dispquery=mysqli_query($conn, "SELECT * FROM `trng_batches` WHERE id = '$id'");
							 $qfetch = mysqli_fetch_array($dispquery,MYSQL_ASSOC)   ;
							 $batch_id = $qfetch["batch_id"];
							 $course_name = $qfetch["course_name"];
							 $course_duration = $qfetch["duration"];
							 $start_date = $qfetch["start_date"];
	                         $timings = $qfetch["day_and_time"];
							 $course_fee = $qfetch["course_fee"];
							
							 $insert_str="insert into trng_enroll( `user_name`, `course_name`, `batch_id`, `course_fee`, `payment_status`, `enroll_dtm`, `enroll_ip`) 
							 VALUES ('$user', '$course_name','$batch_id', '$course_fee', 'ToPay', '$now_date', '$ip_address')" ;

							echo $insert_str ;
					         
							mysqli_query($conn, $insert_str) ;
                            							 
							 $enrollment_id = mysqli_insert_id($conn) ;
														

							$msg = 'Enrollment Number:'. $enrollment_id  ."\n".

							'User Name: ' . $user ."\n".

							'Batch Id:'. $batch_id ."\n".
							
							'Course Name:'. $course_name ."\n".

							'Start Date:'. $start_date ."\n".

							'Fees:'. $course_fee ."\n" ;
							

                            $message="Greetings from Sisoft!!!!\r\n";

                            $message.="Thanks for enrolling in the course. Please make payment to take this ahead:" ;

							$message.="\r\n Course Enrollment Details \r\n";

                            $message .=$msg ;
			                
							$to=$user;

							$headers .= 'From: <info@sisoft.in>' . "\r\n";

                            $headers .= 'Cc: info@sisoft.in' . "\r\n";

							$subject = "Sisoft: ".$course_name." Enrollment Request Confirmation.. Please make payment";

                        // send email

							$sentmail = mail($to, $subject, $message, $headers);
							

					?>

							 <div class="row">
								<div class="column"> Enrollment Number: </div>
								<div class="column"> <?php echo $now_date.":".$enrollment_id ;?> </div>
							</div>		
							<div class="row">
								<div class="column">  User Name:  </div>
								<div class="column">  <?php echo $user ;?> </div> 
							</div>
							<div class="row">
								<div class="column"> Batch Id: </div>
								<div class="column"> <?php echo $batch_id;?></div>
							</div>
							<div class="row">
								<div class="column"> Course Name: </div>
								<div class="column"> <?php echo $course_name;?></div>
							</div>
							<div class="row">
								<div class="column"> Duration: </div> 
								<div class="column"> <?php echo $course_duration?></div>
							</div>
							<div class="row">
								<div class="column"> Start Date: </div> 
								<div class="column"> <?php echo $start_date;?></div>
							</div>
							<div class="row">
								<div class="column"> Timings :  </div>
								<div class="column"> <?php echo $timings;?></div>
							</div>
							<div class="row">
								<div class="column"> Fees:  </div>
								<div class="column"> <?php echo $course_fee;?></div>
							</div>

							 <form action="PayUMoney_form.php" method="post" name="payuForm">
							       <input type="hidden" name="txnid" value="<?php echo $enrollment_id ?>" />
							       <input type="hidden" name="amount" value="<?php echo $course_fee ?>" />
								   <input type="hidden" name="firstname" value="<?php echo $user ?>" />
							       <input type="hidden" name="email" value="<?php echo $user ?>" />
							       <input type="hidden" name="phone" value="<?php echo $phone ?>" />
							       <input type="hidden" name="productinfo" value="<?php echo 'I:'.$course_name.':'.$batch_id ?>" size="64"/>
								   <span><BR> 
							      <button type="button" onClick="location.href='mysisoft.php?opt=2'" style="width:100px; height:30px;">Pay Offline</button>
							 <button type="submit"  style="width:100px; height:30px;">Pay Online</button>
							 </span>
							 </form>
           
    </div>				
				
