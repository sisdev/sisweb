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

        .row {
            display: table-row;
			border: 1px gray;
        }

        .column {
            display: table-cell;
            vertical-align:middle;
			border-right:1px solid #ddd;
			border-bottom:1px solid #ddd;
			padding: 10px ;
			text-align:center;
        }

		
				
		@media screen and (max-width:1000px){
			div#enroll .table .row .column{
			display:block ;
			}
		}

		
    </style>
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js" type="text/javascript"></script>
	<script>
	function ConfirmRegister(val, val2)
	{
        if (val2 == 0)
        {
            alert("Please Login and try again") ;
				 //   jQuery('#login').modal('show');

        }
        else		
		{

			var reg=confirm("Would you like to Proceed ahead with Registration");
			if (reg==true)
			{
			   $.ajax({
			   url: "enroll_me.php" ,
			   type: "post" ,
			   data: { batch_id:val } ,
			   success: function(result){
				 $("#enroll").html(result) ;
			   }
			   }) ;
			}
		}

	}
	</script>
 
<?php 
	if (isset($_SESSION['login'])) {
	       $logged = 1 ;  
		  }
    else {
          $logged = 0 ;      	   
    }
?>			         
 
				         

	
	<div id="enroll" >
	<h3 style="color:#0066CC; padding-bottom:10px;">Upcoming Batches: Please select batch</h3>
                <div class="table">
                         <div class="row" style="background:#428bca; color:#FFFFFF; font-size:13px;">
                                <div class="column"><strong>Batch ID</strong></div>
                                <div class="column"><strong>Course Name</strong></div>
                                <div  class="column"><strong>Duration</strong></div>
                                <div class="column"><strong>Start Date</strong></div>
								<div  class="column"><strong>Day and time</strong></div>
                                <div class="column"><strong>Price</strong></div>
							    <div class="column"><strong>Enroll Button</strong></div>
                         </div>
						 <?php  
							 $now_date = date('Y-m-d');
							 $dispquery=mysqli_query($conn, "SELECT * FROM `trng_batches` WHERE start_date >= '$now_date'");
							 while($qfetch = mysqli_fetch_array($dispquery,MYSQL_ASSOC)) {  ?>
                            <div class="row">
							 <div class="column"><?php echo $qfetch["batch_id"];?></div>
							 <div class="column"><?php echo $qfetch["course_name"];?></div>
							 <div class="column"><?php echo $qfetch["duration"];?></div>
							 <div class="column"><?php echo $qfetch["start_date"];?></div>
						     <div class="column"><?php echo $qfetch["day_and_time"];?></div>
						     <div class="column"><?php echo $qfetch["course_fee"];?></div>
							 <div class="column"><button type="button" onClick="ConfirmRegister(<?php echo $qfetch["id"];?>,<?php echo $logged;?>)" style="width:100px; height:30px; background:#428bca; color:#FFFFFF; border:none;">Register Me</button></div>
						    </div>
						<?php } ?>
                </div>
    </div>				
				
