<?php
//error_reporting(0);
session_start();
include("db/dbi.php");
$BASE_COURSE_DIR="zcomasys/" ;
$calling_page = $_SERVER['HTTP_REFERER'] ;
//echo "Called from".$calling_page ;
?>
<HTML>
<HEAD>
<TITLE>Study Page</TITLE>


        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>

		
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>

</HEAD>			
					<?php  
							$res_id = $_GET["R1"] ;								
							$de_res_id = base64_decode(rawurldecode($res_id)) ;
//							echo "Decoded :".$de_res_id."End" ;
							$sel_resource="SELECT * FROM `tp_resources` where id = $de_res_id";
//							echo $sel_resource;
							$dispquery=mysqli_query($conn, $sel_resource);					
							while($qfetch = mysqli_fetch_array($dispquery,MYSQL_ASSOC)){
							 $res_title = $qfetch["res_title"];
 							 $res_file_type = $qfetch["file_type"];
							 $res_type = $qfetch["res_type"];
							 $res_details = $qfetch["res_details"];							 
							 $res_details=$BASE_COURSE_DIR.$res_details ;
							 $course_id = $qfetch["course_id"] ;
							 $section_id = $qfetch["section_id"] ;
							}						
//							echo $res_file_type.":".$res_title ;

								if (isset($_SESSION['login'])){
										$user = $_SESSION['login'] ;
								}
								else {
									    $user ="HARDCODED" ;
								}
								$start_dtm = date("Y:m:d H:i") ;
								$ip_used = $_SERVER["REMOTE_ADDR"] ;
								$insert_sql="INSERT INTO `tp_study_progress`(`user_name`, `course_id`, `section_id`, `resource_id`, `start_dtm`, `ip_used`) 
								VALUES ('$user',$course_id,$section_id,$res_id,'$start_dtm','$ip_used')";
								// echo $insert_sql ;
								mysqli_query($conn, $insert_sql) ;

							
					?>	
				    
					<div id="Course_Preview" style="height:90%; >			
							
					<?php									
							if ($res_file_type== "VIDEO") {
					?>

					<div align="center" class="embed-responsive embed-responsive-16by9">
						<video id="myVideo" class="embed-responsive-item" controls autoplay>
							<source src="<?php echo $res_details;?>" type="video/mp4">
							Your browser does not support the video tag.
						</video>
						<script type='text/javascript'>
							document.getElementById('myVideo').addEventListener('ended',myHandler,false);
							function myHandler(e) {
									// What you want to do after the event
									alert("This Video is completed. Go for next one") ;
							}
						</script>
						
					</div>
					<?php }
					else if ($res_file_type == "PDF"){ ?>
					<div align="center" style="width: 100%; height: 100%; display: block;">
						 <object style="width: 100%; height: 100%;" data="<?php echo $res_details;?>">
						 </object> 
					</div>
					<?php } 
					else if ($res_file_type == "TEXT") { ?>
					<div align="center" style="width: 100%; height: 100%; display: block;">
							<object  style="width: 100%; height: 100%;" type="text/plain" data="<?php echo $res_details;?>" border="0" >
							</object>
					</div>
					
					<?php }
					?>
					
					
           
    </div>				
				
