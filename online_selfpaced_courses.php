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

            vertical-align: middle;
			border-right:1px solid #ddd;
			border-bottom:1px solid #ddd;
		 	padding: 10px ;

        }  

		

		@media screen and (max-width:1000px){

			div#enroll .table .row .column{

			display:block ;

			}

		}

		

    </style>

	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js" type="text/javascript"></script>

	 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.1/js/bootstrap-dialog.js" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.1/js/bootstrap-dialog.min.js" type="text/javascript"></script>

	        <script src="js/bootstrap.min.js"  type="text/javascript"></script>





	<script>

	function ConfirmRegister(val,val2)

	{

	  if (val2 == 0)

        {

            alert("Please Login and try again") ;

           jQuery('#login').modal('show');



        }

        else		

		{

		

			var reg=confirm("Would you like to Proceed ahead with Registration");

			if (reg==true)

			{

			   $.ajax({

			   url: "online_course_enroll.php" ,

			   type: "post" ,

			   data: { online_course_id:val } ,

			   success: function(result){

				 $("#enroll").html(result) ;

			   },
			   
			   error: function(xhr, status, error) {
				var err = eval("(" + xhr.responseText + ")");
				alert(err.Message);
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

	<h3>Online Course: List</h3>

                <div class="table">

                         <div class="row" style="background:#428bca; color:#FFFFFF; text-align:center;">

                                <div class="column"><strong>Product ID</strong></div>
								
								<div class="column"><strong>Product image</strong></div>

                                <div class="column"><strong>Course Provider</strong></div>

                                <div  class="column"><strong>Course Name</strong></div>

                                <div class="column"><strong>Course URL/Demo</strong></div>

								<div  class="column"><strong>Course Price(INR)</strong></div>

							    <div class="column"><strong>Buy Course</strong></div>

                         </div>

						 <?php  


							 $now_date = date('Y-m-d');
							 
							 if ($cat3 == 0) {
								$query="SELECT * FROM `trng_pgms_selfpaced` WHERE price_INR=0";
								 
							 }
							 else {
								$query="SELECT * FROM `trng_pgms_selfpaced` WHERE course_category='$cat1' and course_subcategory='$cat2'";
							 }
//							 echo $query ;

							 $dispquery=mysqli_query($conn, $query);

							 while($qfetch = mysqli_fetch_array($dispquery,MYSQLI_ASSOC)) {  ?>

                            <div class="row">

							 <div class="column"><?php echo $qfetch["trng_pgm_id"];?></div>
							 
								<div class="column"><img src="<?php echo $qfetch["course_image_name"];?>"/></div>
							 <div class="column"><?php echo $qfetch["course_provider"];?></div>

							 <div class="column"><?php echo $qfetch["course_name"];?></div>

							 <div class="column"><?php echo "<a href=".$qfetch['course_desc']." target='_blank'>URL For Demo</a>";?></div>

						     <div class="column"><?php echo $qfetch["price_INR"];?></div>

							 <div class="column"><button type="button" onClick="ConfirmRegister(<?php echo $qfetch["trng_pgm_id"];?>,<?php echo $logged;?>)" style="width:100px; height:30px; background:#428bca; color:#FFFFFF; border:none;">Buy</button></div>

						    </div>

						<?php } ?>

                </div>

    </div>				

				

