<?php
error_reporting(0);
session_start();
include("db/dbi.php");
 
?>

<style type="text/css">
        .table {
            display: table;

        }

        .tbl_row {
            display: table-row;
			border: 1px gray;
        }

        .tbl_column {
            display: table-cell;
            vertical-align: top;
			border: 1px solid gray;
			padding: 10px ;
			width:30%;
        }
    </style>
	
                
					<?php  												
							$user = $_SESSION['login'];
							if (isset($_SESSION['userphone'])){
							$phone = $_SESSION['userphone'];
							}
							else
							{
							  $phone = "9540283283" ; //HARD CODED -
							}
							$trng_pgm_id = $_POST['online_course_id'];
							$now_date = date("Y-m-d H:i:s");
							$ip_address = $_SERVER['REMOTE_ADDR'];
							 
							$dispquery=mysqli_query($conn, "SELECT * FROM `trng_pgms_selfpaced` WHERE trng_pgm_id = '$trng_pgm_id'");
							$qfetch = mysqli_fetch_array($dispquery,MYSQLI_ASSOC)   ;
							 $course_provider = $qfetch["course_provider"];
							 $course_name = $qfetch["course_name"];
							 $course_fee = $qfetch["price_INR"];
							 if ($course_fee==0){
								 $payment_status = "NotReq" ;
							 }
							 else {
								 $payment_status = "ToPay" ;
							 }
							 
							 if ($course_provider == "Sisoft")
							 {
								 $study_url="learner_course_study.php" ;
							 }
							 else
							 {
								 $study_url="" ;
							 }
								 
							 $insert_str="insert into trng_enroll_selfpaced( `user_name`, `trng_pgm_id`,`course_provider`, `course_name`, `course_fee`, `payment_status`, `enroll_dtm`, `enroll_ip`,`study_url`) 
							 VALUES ('$user','$trng_pgm_id','$course_provider', '$course_name', '$course_fee', '$payment_status', '$now_date', '$ip_address','$study_url')" ;
					         
						//	echo $insert_str ;
							 
							mysqli_query($conn, $insert_str) ;
                            							 
							 $enrollment_id = mysqli_insert_id($conn) ;
							
							$msg = 'Enrollment Number:'. $enrollment_id  ."\n".

							'User Name: ' . $user ."\n".

							'Training Program Id:'. $trng_pgm_id ."\n".
							
							'Course Provider:'. $course_provider ."\n".
							
							'Course Name:'. $course_name ."\n".

							'Start Date:'. $now_date ."\n" ;
							
                            $message="Greetings from Sisoft!!!!\r\n";

                            $message.="Thanks for enrolling in the course. " ;

							$subject = "Sisoft: ".$course_name." Enrollment Request Confirmation..";
							
							if ($course_fee != 0)
							{
								$msg.='Fees:'. $course_fee ."\n" ;
							
								$message.="\nPlease make payment to take this ahead:" ;
								
								$subject.=" Please make payment" ;
							}	

								$message.="\r\n Course Enrollment Details \r\n";

								$message .=$msg ;
			                
								$to=$user;

								$headers .= 'From: <info@sisoft.in>' . "\r\n";

								$headers .= 'Cc: info@sisoft.in' . "\r\n";



                         // send email

								$sentmail = mail($to, $subject, $message, $headers);
								mail("vijayrastogi@yahoo.com", $subject, $message, $headers);

					?>

					<div id="enrolled">
					
					<h3>Enrollment Confirmation </h3>

							 <div class="tbl_row">
								<div class="tbl_column"> Enrollment Number: </div>
								<div class="tbl_column"> <?php echo "SelfPaced:".$enrollment_id ;?> </div>
							</div>		
							<div class="tbl_row">
								<div class="tbl_column">  User Name:  </div>
								<div class="tbl_column">  <?php echo $user ;?> </div> 
							</div>
							<div class="tbl_row">
								<div class="tbl_column"> Course Provider: </div>
								<div class="tbl_column"> <?php echo $course_provider;?></div>
							</div>

							<div class="tbl_row">
								<div class="tbl_column"> Course Name: </div>
								<div class="tbl_column"> <?php echo $course_name;?></div>
							</div>
							<div class="tbl_row">
								<div class="tbl_column"> Start Date: </div> 
								<div class="tbl_column"> <?php echo $now_date;?></div>
							</div>
							<div class="tbl_row">
								<div class="tbl_column"> Fees:  </div>
								<div class="tbl_column"> <?php echo $course_fee;?></div>
							</div>

						<?php if ($course_fee != 0) { ?>
							 <form action="PayUMoney_form.php" method="post" name="payuForm">
							       <input type="hidden" name="txnid" value="<?php echo $enrollment_id ?>" />
							       <input type="hidden" name="amount" value="<?php echo $course_fee ?>" />
								   <input type="hidden" name="firstname" value="<?php echo $user ?>" />
							       <input type="hidden" name="email" value="<?php echo $user ?>" />
							       <input type="hidden" name="phone" value="<?php echo $phone ?>" />
							       <input type="hidden" name="productinfo" value="<?php echo 'S:'.$trng_pgm_id.':'.$course_provider.':'.$course_name.':' ?>" size="64"/>
								   <span><BR> 
							      <button type="button" onClick="location.href='mysisoft.php?opt=2'" style="width:200px;">Pay Offline</button>
							 <button type="submit"  style="width:200px;">Pay Online</button>
							 </span>
							 </form>
						<?php  } else {  ?>
								
						      <button type="button" onClick="location.href='mysisoft.php?opt=1'" style="width:200px;">View Enrollments</button>
							
						<?php } ?>
    </div>				
				
