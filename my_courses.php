<?php
error_reporting(0);
session_start();
 include("db/dbi.php");
?>

<style type="text/css">
        .table {
            display: table;
			background:#FFFFFF;
			border-top:1px solid #ddd;
			border-left:1px solid #ddd;
        }

        .tbl_row {
            display: table-row;
			border: 1px gray;
        }

        .tbl_column {
            display: table-cell;
            text-align:center;
			border-right:1px solid #ddd;
			border-bottom:1px solid #ddd;
			padding: 10px ;
			vertical-align:middle;
        }
	#enroll h4{color:#0000CC; padding-top:20px; padding-bottom:10px;}	
	
    </style>
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js" type="text/javascript"></script>
  
	<div id="enroll" >
		<h3 style="background:#1f7e99; color:#FFFFFF; padding:10px 0; text-align:center; margin:0px; font-weight:bold;">My Courses</h3>
	<?php  
 		$user = $_SESSION['login'];
		if (isset($_SESSION['userphone'])){
			$phone = $_SESSION['userphone'];
		}
		else	{
			 $phone = "9999283283" ; //HARD CODED -
		}

		$ilt_rows=mysqli_query($conn, "SELECT enroll_dtm,enroll_id,A.batch_id,A.course_name, A.course_fee, payment_status,start_date,day_and_time   FROM `trng_enroll` A, `trng_batches` B WHERE user_name = '$user' and A.batch_id = B.batch_id");		
		
		$num_ilt_rows = mysqli_num_rows($ilt_rows);
		
		echo  "<h4> Instructor Led Training Courses :".$num_ilt_rows.  "</h4>" ;

		if ($num_ilt_rows != 0) {
	?>		
        <div class="table">
            <div class="tbl_row" style="background:#428bca; color:#FFFFFF; font-size:13px;">
				<div class="tbl_column"><strong>Enrollment Date</strong></div>
				<div class="tbl_column"><strong>Enrollment ID</strong></div>
                <div class="tbl_column"><strong>Batch ID</strong></div>
                <div class="tbl_column"><strong>Course Name</strong></div>
                <div  class="tbl_column"><strong>Course Fee</strong></div>
                <div class="tbl_column"><strong>Payment Status</strong></div>							
                <div class="tbl_column"><strong>Start Date</strong></div>
				<div  class="tbl_column"><strong>Day and time</strong></div>
				<div  class="tbl_column"><strong>Action...</strong></div>
			</div>
		
		
	<?php	
		while($qfetch = mysqli_fetch_array($ilt_rows,MYSQLI_ASSOC)) {  
			 $payment_status = $qfetch["payment_status"] ;
			 $enrollment_id = $qfetch["enroll_id"] ;
			 $course_name = $qfetch["course_name"];
			 $batch_id = $qfetch["batch_id"];
			 $course_fee = $qfetch["course_fee"];
		 ?>
            <div class="tbl_row" style="color:#000000;">
				<div class="tbl_column"><?php echo $qfetch["enroll_dtm"];?></div>
				<div class="tbl_column"><?php echo $qfetch["enroll_id"];?></div>
				<div class="tbl_column"><?php echo $qfetch["batch_id"];?></div>
				<div class="tbl_column"><?php echo $qfetch["course_name"];?></div>
				<div class="tbl_column"><?php echo $qfetch["course_fee"];?></div>
				<div class="tbl_column"><?php echo $qfetch["payment_status"];?></div>
				<div class="tbl_column"><?php echo $qfetch["start_date"];?></div>
				<div class="tbl_column"><?php echo $qfetch["day_and_time"];?></div>	
		<?php 
			if ($payment_status=="ToPay"){ 
		?>
							 
				<div class="tbl_column">
					<form action="PayUMoney_form.php" method="post" name="payuForm">
						<input type="hidden" name="txnid" value="<?php echo $enrollment_id ;?>" />
						<input type="hidden" name="amount" value="<?php echo $course_fee ;?>" />
						<input type="hidden" name="firstname" value="<?php echo $user ;?>" />
						<input type="hidden" name="email" value="<?php echo $user ;?>" />
						<input type="hidden" name="phone" value="<?php echo $phone ; ?>" />
						<input type="hidden" name="productinfo" value="<?php echo 'ILT:'.$course_name.':'.$batch_id ; ?>" size="64"/>
						<button type="submit"  style="width:100px; height:30px; background:#428bca; color:#FFFFFF; border:none;">Pay Now</button>
					</form>
				</div>
				
		</div>
        <?php 
			} 
			else { 								
			echo "<div class='tbl_column'></div>" ;
			}
		}
		?>
		</div>
		<?php
				}
		?>


		<?php  
			// Self Paced Courses 
			$spt_qry="SELECT `enroll_id`, `trng_pgm_id`, `course_provider`, `course_name`, `course_fee`, `payment_status`, `enroll_dtm`, `enroll_ip`, `study_url` FROM `trng_enroll_selfpaced` WHERE `user_name` = '$user' ";
			$spt_rows=mysqli_query($conn, $spt_qry);
			$num_rows = mysqli_num_rows($spt_rows);

			echo  "<h4> Self Paced Courses :". $num_rows."</h4>" ;
			
			
			if ($num_rows != 0) {
	?>		
        <div class="table">
            <div class="tbl_row" style="background:#428bca; color:#FFFFFF; font-size:13px;">
				<div class="tbl_column"><strong>Enrollment Date</strong></div>
				<div class="tbl_column"><strong>Enrollment ID</strong></div>
                <div class="tbl_column"><strong>Course Provider</strong></div>
                <div class="tbl_column"><strong>Course Name</strong></div>
                <div  class="tbl_column"><strong>Course Fee</strong></div>
                <div class="tbl_column"><strong>Payment Status</strong></div>							
                <div  class="tbl_column"><strong>Action...</strong></div>
			</div>		
	<?php						
			while($qfetch = mysqli_fetch_array($spt_rows,MYSQLI_ASSOC)) {  
				$payment_status = $qfetch['payment_status'];
				$trng_pgm_id = $qfetch['trng_pgm_id'];
				$study_url = $qfetch['study_url'] ;
				$course_fee = $qfetch["course_fee"];
				$course_name = $qfetch["course_name"];
				$course_provider=$qfetch['course_provider'] ;
	?>
            <div class="tbl_row" style="color:#000000;">
				<div class="tbl_column"><?php echo $qfetch['enroll_dtm'] ; ?></div>
				<div class="tbl_column"><?php echo $qfetch['enroll_id'] ; ?></div>
                <div class="tbl_column"><?php echo $qfetch['course_provider'] ; ?></div>
                 <div class="tbl_column"><?php echo $qfetch['course_name'] ; ?></div>
                <div  class="tbl_column"><?php echo $qfetch['course_fee'] ; ?></div>
                <div class="tbl_column"><?php echo $qfetch['payment_status'] ; ?></div>	
		<?php 
			if ($payment_status=="ToPay"){ 
		?>
							 
				<div class="tbl_column">
					<form action="PayUMoney_form.php" method="post" name="payuForm">
						<input type="hidden" name="txnid" value="<?php echo $qfetch['enroll_id'] ; ?>" />
						<input type="hidden" name="amount" value="<?php echo $course_fee ;?>" />
						<input type="hidden" name="firstname" value="<?php echo $user ; ?>" />
						<input type="hidden" name="email" value="<?php echo $user ; ?>" />
						<input type="hidden" name="phone" value="<?php echo $phone ; ?>" />
						<input type="hidden" name="productinfo" value="<?php echo 'SPT:'.$course_provider.':'.$course_name; ?>" size="64"/>
						<button type="submit"  style="width:100px; height:30px; background:#428bca; color:#FFFFFF; border:none;">Pay Now</button>
					</form>
				</div>
			 	
        <?php 
			} 
			else { 								
				if (empty($study_url)){
		?>			
                <div  class="tbl_column"><strong>Ordered.</strong></div>
		<?php 
				}
				else {
		?>				
						<div  class="tbl_column">
						<form action="<?php echo $study_url; ?>" method="post" name="studyForm">
						    <input type="hidden" name="pgmid" value="<?php echo $trng_pgm_id ; ?>" />
							<button type="submit"  style="width:100px; height:30px;">Study Now</button>
						</form>	
						</div>
        <?php
				}
			}
		?>		
			</div>		
	<?php
			
			} // While fetch loop
		}  // else record found
	?>		
		</div>
    </div>						