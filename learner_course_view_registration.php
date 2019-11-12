<?php
error_reporting(0);
session_start();
include("db/dbi.php");
$BASE_COURSE_DIR="zcomasys/" ;
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js" type="text/javascript"></script>
<style>
	.preview_course{width:100%; border:#999999 solid 1px; padding:5px; margin-top:15px;}
	.preview_course h3{border-bottom:none; color:#fff; background:#1d6e80; padding:13px; margin:0px 0 5px 0; text-align:center;}
	.preview_course button{background:#993300; border:none; width:100%; padding:10px; margin:15px 0; color:#FFFFFF; font-size:18px;}
	.preview_course p{text-align:left; padding:10px 0 0 0; margin:0px; font-size:22	px; color:#009900;}
	.preview_course h5{font-weight:bold;}
	.preview_course span{ font-size:16px;}
</style>

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

<div>
	
<?php 

//$_SESSION['login'] = "vijayrastogi@yahoo.com" ;  // Hard coding and simulating

	if (isset($_SESSION['login'])) {

	       $logged = 1 ;  

		  }

    else {

          $logged = 0 ;      	   

    }




	
	$course_id = $_SESSION["COURSE_ID"]; 
//	$course_id = 14; 

	
	$sel_sql =	"SELECT * FROM `trng_pgms_selfpaced` A, tp_course B WHERE A.`course_id` = B.id and B.id=$course_id " ;
//	echo $sel_sql ;
	$dispquery=mysqli_query($conn, $sel_sql);
	$num_rows = mysqli_num_rows($dispquery);
	$qfetch = mysqli_fetch_array($dispquery,MYSQLI_ASSOC) ;
	
	$course_name = $qfetch["course_name"] ;
	$course_goal = $qfetch["course_goal"] ;
	$price = $qfetch["price_INR"] ;
	$trng_pgm_id = $qfetch["trng_pgm_id"] ;

?>	

     <div id="enroll" class="preview_course">
				<?php 
				$random_video_sql="SELECT res_details FROM `tp_resources` WHERE course_id=$course_id and res_type='Lecture' order by rand() limit 1" ;
				$result_video=mysqli_query($conn, $random_video_sql) ;
				$video_url=mysql_result($result_video,0) ;//mysql_result()
//				echo $video_url ;
				?>

	 	         <h3>Course Preview</h3>
				 <video width="100%" poster="images/java-program.jpg" controls>
					  <source src="<?php echo $BASE_COURSE_DIR.$video_url; ?>" type="video/mp4">
				</video> 
				<div id="enroll" style="text-align:center;">
				<p>Price: INR <?php echo $price ; ?></p>
				<button type="button" onClick="ConfirmRegister(<?php echo $trng_pgm_id;?>,<?php echo $logged;?>)">Buy</button>
				</div>
				<span> 7-Days Money-Back Guarantee </span>		
				<h5>Includes</h5>
				<ul style="list-style-type:square;">
				<?php
				$res_sql = "SELECT res_type, count(*) FROM `tp_resources` WHERE course_id=$course_id group by res_type" ;
				$res_result=mysqli_query($conn, $res_sql);
				while ($row = mysqli_fetch_array($res_result, MYSQLI_NUM)){
						echo "<li>".$row[1]." ".$row[0]."</li>" ;
						
				}
				?>
					<li>Online query resolution</li>
				</ul>
	</div>
			         
    <!--<div style="float:right; padding:5px; margin-top:25px;border-style: solid; border-width:1px;background-color:#1a8beb; color:#000000; text-align:center;">	
	         <h4 style="padding:0px; margin:5px 0 0 0; color:#FFFFFF;"> Registration</h4><br>
			  For registration to this course, please go back to previous tab 
		</br> and Select Buy Button.<br />
			
	</div>--> 
	
	
</div>				
				
