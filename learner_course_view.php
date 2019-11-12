<?php
error_reporting(0);
session_start();
include("db/dbi.php");

$id = $_GET["id"] ;

$_SESSION["COURSE_ID"] = $id; 

	$sel_sql =	"SELECT * FROM `tp_course` where id =$id " ;
	$dispquery=mysqli_query($conn, $sel_sql);
	$qfetch = mysqli_fetch_array($dispquery,MYSQLI_ASSOC) ;
	$course_name = $qfetch["course_name"] ;
	$course_goal = $qfetch["course_goal"] ;

?>

<!DOCTYPE html> 
<html lang="en">
    <head>
		<title><?php echo $course_name; ?></title>
		<meta name="description" content="<?php echo $course_goal; ?>" />
		<meta name="keywords" content="<?php echo $course_name; ?>" />
		<meta name="keywords" content="Online Training Self-Paced | MOOC Platform" />

		<!-- Bootstrap core CSS -->
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
		<link href="css/style.css" type="text/css" rel="stylesheet" />
		<link href="css/style-costum.css" type="text/css" rel="stylesheet" />
	  

	</head>
	<body>
	
	<!--HEARDER-START-->
	
        <?php 
		$page= 3 ;
	   include("top-header.php");   
	   ?>
       
       <?php include('login_reg.php');
			
	   ?>
	
	
	<!--HEARDER-END-->
	
	<!--heading-->
<div class="container-fluid" style="background:#5bc0de; color:#fff">
<div class="container"><h2>View Courses:<?php echo $course_name;?></h2></div>

</div><!--heading-->   

    	<div class="container">

				<ul class="nav nav-tabs" style="margin-top:30px; font-size:15px;">
				  <li class="active" ><a data-toggle="tab" href="#menu1">Course Curriculum</a></li>
				  <li ><a data-toggle="tab" href="#home">Course Introduction</a></li>
				</ul>
				<div class="tab-content col-sm-8" style="margin-top:0px; padding:0px; border:#CCCCCC solid 1px; border-top:0px;" >
				 <div id="menu1" class="tab-pane fade in active">
					<?php include("learner_course_view_curriculum.php"); ?>
				  </div>

				  <div id="home" class="tab-pane fade ">
						<?php include("learner_course_view_intro.php"); ?>
				   </div>
				</div>
				
				<div class="col-sm-4" >
				
					<?php include("learner_course_view_registration.php"); ?>
				
				 </div>

 		</div>
		 <script src="js/bootstrap.min.js" type="text/javascript"></script>
		</body>
		</html>