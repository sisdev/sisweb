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



	

	<div id="enroll">

	<h3>Online Course: List</h3>
            <div class="col-lg-12">
   			 			<div class="row" style="display:block;">


						 <?php  

							 $now_date = date('Y-m-d');
							 $query="SELECT * FROM `trng_pgms_selfpaced` WHERE course_provider='Sisoft'";							
							 
					//	 echo $cat3.":".$query ;

							 $dispquery=mysqli_query($conn, $query);

							 while($qfetch = mysqli_fetch_array($dispquery,MYSQLI_ASSOC)) { 
						 
							  $course_id = $qfetch["course_id"];
							  $trng_pgm_id = $qfetch["trng_pgm_id"];
							 ?>

							 
							<div class="col-xs-12 col-sm-4 col-md-3 col-lg-4 ">
								<div class="online_course_box tooltip">
								
									<span class="tooltiptext"><?php echo " ".getCourseDesc($conn, $course_id); ?> </span>
									<a href="<?php echo $qfetch['course_desc'];?>" target='_blank'>
										<img src="<?php echo $qfetch['course_image_name'];?>" class="img-responsive" alt="course-image">
										<h4><?php echo $qfetch["course_name"];?></h4>
										<p>
										<?php 
										if ($course_id!=0){
											echo "Total Resources: ". getCourseItems($conn, $course_id) ;
										}
										?>
										</p>
										<p>Provider: <?php echo $qfetch["course_provider"];?></p>
										<p class="price">Price: <?php echo $qfetch["price_INR"];?></p>
									</a>
								</div>
							</div>			 

						<?php } ?>
						</div>

                </div>

    </div>				

<?php 
function getCourseItems($param_conn, $param_course_id)
{
	$query="select count(*) from tp_resources where course_id=$param_course_id" ;
	 $result=mysqli_query($param_conn, $query);
	// $res_count =mysql_result($result,0) ; //mysql_result()
	while($row = mysqli_fetch_row($result)) {
   $cid = $row[0];
  
}
	 return $cid ;
}	

function getCourseDesc($param_conn, $param_course_id)
{
	$query="select course_goal from tp_course where id=$param_course_id" ;
//	echo $query ;
	 $result=mysqli_query($param_conn, $query);
	// $course_desc =mysql_result( $result,0) ;	//mysql_result()
	while($row = mysqli_fetch_row($result)) {
   $id = $row[0];
  
}
	 return $id ;
}	
?>