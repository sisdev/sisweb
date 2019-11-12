<?php
error_reporting(0);
session_start();
include 'db/dbi.php';

if (isset($_GET['option'])) {
 $course_type=$_GET['option'] ;
}
else
{
$course_type=13 ;
}	

switch($course_type) {
	case "1":   // Free Course Online
		$title="Free Online Courses on Android" ;
		$desc="Learn self paced online courses on Android by Sisoft";
		$keyw="Free Online Courses | Android" ;
		break;
	
	case "2":   // PMP Training Online
		$title="PMP Training Online Self Paced" ;
		$desc="Learn self paced online courses on PMP by Sisoft";
		$keyw="PMP Certitifcation Training| Project Management Training" ;
	
	break ;

	case "3":  // MS Project Training Online
		$title="MS Project Training Online Self Paced" ;
		$desc="Learn self paced online courses on MS Project by Sisoft";
		$keyw="MS Project Training| Project Management Training" ;
	break ;

	case "4": // Agile Scrum Training Online
		$title="Agile Scrum Training Online Self Paced" ;
		$desc="Learn self paced online courses on Agile Scrum by Sisoft";
		$keyw="Agile Scrum Training| Project Management Training" ;

	
	break ;

	case "5": // ITIL Training Online
		$title="ITIL Training Online Self Paced" ;
		$desc="Learn self paced online courses on ITIL by Sisoft";
		$keyw="ITIL Training| Project Management Training" ;
	
	break ;

	case "6": // Prince2
		$title="Prince2 Training Online Self Paced" ;
		$desc="Learn self paced online courses on Prince2 by Sisoft";
		$keyw="Prince2 Training| Project Management Training" ;
	
	break ;

	case "7":  // Six Sigma
		$title="Six Sigma Training Online Self Paced" ;
		$desc="Learn self paced online courses on Six Sigma by Sisoft";
		$keyw="Six Sigma Training| Project Management Training" ;
	
	break ;

	case "8": // Sales & Marketing
		$title="Digital Marketing Training Online Self Paced" ;
		$desc="Learn self paced online courses on Digital Marketing by Sisoft";
		$keyw="Digital Marketing Training| Project Management Training" ;
	
	break ;

	case "9":  // Risk Management
		$title="Risk Management Training Online Self Paced" ;
		$desc="Learn self paced online courses on Risk Management by Sisoft";
		$keyw="Risk Management Training| Project Management Training" ;
	
	break ;
	
	case "10":  // COBIT
		$title="COBIT Training Online Self Paced" ;
		$desc="Learn self paced online courses on COBIT by Sisoft";
		$keyw="COBIT Training| Project Management Training" ;
	
	break ;
	
	case "11":  // Android
		$title="free online android course| android training online free | android course online free" ;
		$desc="android training online free – You can learn android app creation from our online courses|learn self paced online courses on android";
		$keyw="free online android course, android training online free , android course online free, android Training, mobile app development training" ;
	
	break ;
	
	
	case "12": // Cloud Computing
		$title="Cloud Computing online training for CIOS| cloud computing online classes self paced" ;
		$desc="Cloud Computing online training for CIOS and this course will let you about cloud computing in detail";
		$keyw="Cloud Computing online training for CIOS, cloud computing online classes " ;
		break ;

	default: 
		$title="Self Paced Online  Courses" ;
		$desc="Learn self paced online courses  by Sisoft";
		$keyw="Self Paced Online Training" ;
			
}

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $desc; ?> "/>
<meta name="keywords" content="<?php echo keyw; ?> "/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
        <link href="js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
        <link href="css/style.css"  rel='stylesheet' type='text/css'>
		<link href="css/slide.css" rel="stylesheet" type="text/css">
        <link href="css/style-costum.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="images/icon.png">
        
		
  <style>
.tooltip {
    position: relative;
    display: inline-block;
    opacity:1;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 200px;
    background-color:#fff;
    color: #000;
    text-align:justify;
    border-radius: 6px;
    padding:8px;
    position: absolute;
    z-index:1000;
	top:130px;
    left:20%;
    height:200px;
	border-bottom:#993300 solid 4px;
    /* Fade in tooltip - takes 1 second to go from 0% to 100% opac: */
    opacity: 0;
    transition: opacity 2s; box-shadow:2px 3px 10px #000;
	font-size:14px;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
}
</style>  
        
</head>   
<body>

     
        
        <?php   
		
		$page = 3;
		include("top-header.php"); 
		?>

       <!-- login-->
		
       <?php include('login_reg.php');
	   ?>
       
 
       
<!--heading-->
<div class="container-fluid" style="background:#5bc0de; color:#fff">
<div class="container"><h2 style="padding:15px">Online Courses (Self Paced)</h2></div>

</div><!--heading-->       
                  
<div class="container-fluid well">   
 
      <div class="container">
      
            <div class="row">
           
            <div class="col-lg-4">
			
<aside class="left-sidebar">
    <div class="list-group">

  <a href="online_courses.php?option=13" class="list-group-item <?php if($_GET['option']==13) echo "active"?>">Matrix View</a>
	
  <a href="Free_Courses_Online" class="list-group-item <?php if($_GET['option']==1) echo "active"?>" >
    Free Courses
  </a>
   <a href="Android_Basic_Training_Free_Online" class="list-group-item <?php if($_GET['option']==11) echo "active"?>">Android</a>
   <a href="online_courses.php?option=12" class="list-group-item <?php if($_GET['option']==12) echo "active"?>">Cloud Computing</a>

  <a href="PMP_Training_Online" class="list-group-item <?php if($_GET['option']==2) echo "active"?>">PMP</a>

  <a href="MSProject_Training_Online" class="list-group-item <?php if($_GET['option']==3) echo "active"?>">MS-Project</a>

  <a href="Agile_Scrum_Training_Online" class="list-group-item <?php if($_GET['option']==4) echo "active"?>">Agile-Scrum</a>
  <a href="ITIL_Training_Online" class="list-group-item <?php if($_GET['option']==5) echo "active"?>">ITIL</a>
  <a href="Prince2_Training_Online" class="list-group-item <?php if($_GET['option']==6) echo "active"?>">Price2</a>
  <a href="SixSigma_Training_Online" class="list-group-item <?php if($_GET['option']==7) echo "active"?>">Six Sigma</a>
  <a href="DigitalMarketing_Training_Online" class="list-group-item <?php if($_GET['option']==8) echo "active"?>">Sale&Marketing</a>
  <a href="RiskManagement_Training_Online" class="list-group-item <?php if($_GET['option']==9) echo "active"?>">Risk Management</a>
  <a href="COBIT_Training_Online" class="list-group-item <?php if($_GET['option']==10) echo "active"?>">COBIT</a>
  
</div>
	 
            </aside>

			
             </div><!--col-4-->
            
            <div class="col-lg-8">

			<div class="tab-content">
						<?php 
						
						$cat3 = "1" ; // Paid Course 
			
			if($course_type==1)
			{
			?>
			<div id="Programming" class="tab-pane fade in active">
					<?php 
						$cat1="SoftwareDevelopment" ;
						$cat2="Programming" ;
						$cat3="0" ;
						include("online_selfpaced_courses.php"); 
					 
					?>
			</div>
			
			<?php } ?>

			<?php
			if($course_type==12)
			{
			?>
			<div id="CloudComputing" class="tab-pane fade in active">
					<?php 
						$cat1="ICT-INFRA" ;
						$cat2="IT-Planning" ;
						include("online_selfpaced_courses.php"); 
				     ?>
			</div>
			
			<?php } ?>

			
			<?php 
			if($course_type==2)
			{
			?>
	   
			<div id="PMP" class="tab-pane fade in active">
					<?php 
					$cat1="ProjectManagement" ;
					$cat2="PMP" ;
					 include("online_selfpaced_courses.php"); 
					 
					?>
			</div>
			<?php } ?>
			
			<?php 
			if($course_type==3)
			{
			?>
	   
			<div id="MSP" class="tab-pane fade in active">
					<?php 
						$cat1="ProjectManagement" ;
						$cat2="MSP" ;

						include("online_selfpaced_courses.php"); 
					 
					?>
			</div>
			<?php } ?>


			<?php 
			if($course_type==4)
			{
			?>
	   
			<div id="Agile-Scrum" class="tab-pane fade in active">
					<?php 
						$cat1="ProjectManagement" ;
						$cat2="Agile-Scrum" ;

					 include("online_selfpaced_courses.php"); 
					 
					?>
			</div>
			<?php } ?>

			<?php 
			if($course_type==5)
			{
			?>
	   
			<div id="ITIL" class="tab-pane fade in active">
					<?php 
						$cat1="ProjectManagement" ;
						$cat2="ITIL" ;
					
					 include("online_selfpaced_courses.php"); 
					 
					?>
			</div>
			<?php } ?>

			<?php 
			if($course_type==6)
			{
			?>
	   
			<div id="Price2" class="tab-pane fade in active">
					<?php 
						$cat1="ProjectManagement" ;
						$cat2="Prince2" ;
					
					 include("online_selfpaced_courses.php"); 
					 
					?>
			</div>
			<?php } ?>

			<?php 
			if($course_type==7)
			{
			?>
	   
			<div id="Six Sigma" class="tab-pane fade in active">
					<?php 
						$cat1="ProjectManagement" ;
						$cat2="Six Sigma" ;

					 include("online_selfpaced_courses.php"); 
					 
					?>
			</div>
			<?php } ?>

			<?php 
			if($course_type==8)
			{
			?>
	   
			<div id="Sale-Marketing" class="tab-pane fade in active">
					<?php 
						$cat1="Marketing" ;
						$cat2="Sales & Marketing" ;
						include("online_selfpaced_courses.php"); 
					 
					?>
			</div>
			<?php } ?>


			<?php 
			if($course_type==9)
			{
			?>
	   
			<div id="RiskManagement" class="tab-pane fade in active">
					<?php 
						$cat1="ProjectManagement" ;
						$cat2="Risk Management" ;
						include("online_selfpaced_courses.php"); 
					 
					?>
			</div>
			<?php } ?>


			<?php 
			if($course_type==10)
			{
			?>
	   
			<div id="COBIT" class="tab-pane fade in active">
					<?php 
						$cat1="ProjectManagement" ;
						$cat2="COBIT" ;
						include("online_selfpaced_courses.php"); 
					 
					?>
			</div>
			<?php } ?>

			
			<?php 
			if($course_type==11)
			{
			?>
			<div id="Programming" class="tab-pane fade in active">
					<?php 
						$cat1="SoftwareDevelopment" ;
						$cat2="Programming" ;
						include("online_selfpaced_courses.php"); 
					 
					?>
			</div>
			
			<?php } ?>

			
			<?php 
			if($course_type==13)
			{
			?>
			<div id="Programming" class="tab-pane fade in active">
					<?php 
						$cat1="SoftwareDevelopment" ;
						$cat2="Programming" ;
						include("online_courses_matrix.php"); 					 
					?>
			</div>
			
			<?php } ?>

			
 </div>
			
            </div><!--col-9-->
             
            </div><!--row-->
  </div><!--container--><br>
</div><!--well-->
<?php include("footer.php"); ?>


		<!-- <script src="js/jquery.min.js" type="text/javascript"></script> -->
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/script.js"  type="text/javascript"></script>
		<script src="js/side-menu.js" type="text/javascript"></script>
</body>
</html>