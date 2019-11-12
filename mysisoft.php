<?php
session_start() ;
include("top-header.php");  
	   include('login_reg.php');
	   include('google_login.php');
		include("db/dbi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <title>My Sisoft</title>
     <meta name="description" content="Computer training institute in Indirapuram, Ghaziabad. Learn from Experts from Industry, Live Project Training of six months or six weeks, Job oriented Courses" />
	<meta name="keywords" content="Training on iPhone, Android, Embeded Systems, Java, .Net, C/C++" />
	<meta name="keywords" content="Computer Training Institute in Delhi, Noida, NCR, Gurgoan,Ghaziabad,Indirapuram" />
	<meta name="keywords" content="Training of mobile application development - iPhone, Android, Blackberry, Windows8" />
	<meta name="keywords" content="Project management training, PMP, MS Project" />
	<meta name="keywords" content="Live Project Training or Summer Project Training" />
	<meta name="keywords" content="Embedded Systems Training" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
	<META HTTP-EQUIV="EXPIRES" CONTENT="0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        
        <!-- Google Web Font Embed -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
        <link href="css/style.css"  rel='stylesheet' type='text/css'>
		<link href="css/slide.css" rel="stylesheet" type="text/css">
        <link href="css/style-costum.css" rel="stylesheet" type="text/css">
       
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="images/icon.png">
        
    </head>   
<body>

     
        
    


<?php
if (isset($_SESSION['login']))
{
	
			if (isset($_GET['opt'])){
				$opt = $_GET['opt'] ;
			}
			else {
				$opt = 1 ;
			}

	
?>
  
		<!--heading-->
		<div class="container-fluid" style="background:#5bc0de; color:#fff">
		<div class="container"><h2 style="padding:15px">
            <?php 
			$userName = $_SESSION['login'] ;
			echo "Welcome:$userName" ; ?> </h2></div>
		</div><!--heading-->       
	
	<div class="container-fluid well">   
 
      <div class="container">
      
            <div class="row">
           
            <div class="col-lg-3">
            <aside class="left-sidebar">
			<div class="list-group">

			<a href="mysisoft.php?opt=1" class="list-group-item <?php if($opt==1) echo "active"?>">My Courses</a>
 
			<a href="mysisoft.php?opt=2" class="list-group-item <?php if($opt==2) echo "active"?>">Upcoming Batches</a>
			
		    <a href="mysisoft.php?opt=4" class="list-group-item <?php if($opt==4) echo "active"?>">Ask Question/Doubts</a>
			
			<a href="mysisoft.php?opt=5" class="list-group-item <?php if($opt==5) echo "active"?>">My Question/Doubts</a>
			
			<a href="mysisoft.php?opt=6" class="list-group-item <?php if($opt==6) echo "active"?>">Open Question/Doubts</a>
			
			<a href="mysisoft.php?opt=7 " class="list-group-item <?php if($opt==7) echo "active"?>">Change Password</a>
			
			<a href="mysisoft.php?opt=3" class="list-group-item <?php if($opt==3) echo "active"?>">My Profile</a>
			
			<a href="references/index.php"  target="_blank" class="list-group-item <?php if($opt==8) echo "active"?>">Study Materials</a>
			
			<a href="zexam/teacher-page.php"  target="_blank" class="list-group-item <?php if($opt==9) echo "active"?>">Online Assessments</a>
	  
			<a href="rct_listJobs.php"  target="_blank" class="list-group-item <?php if($opt==10) echo "active"?>">Jobs Listing</a>

	  
			</div>
	 
            </aside>

            </div><!--col-4-->
            
            <div class="col-lg-9">
			
			<?php
			if($opt==1)
			{
				include("my_courses.php");							 

            } ?>
			
			<?php 
			if($opt==2)
			{

				include("next_batches.php");							 
			 					 
			 } ?>
			
			
			<?php
			if($opt==3)
			{ 
              include("my_profile.php");							 
		
			} ?>
			
			
			<?php
			if($opt==4)
			{ 
              include("tq_new_query.php");							 
		
			} ?>
			<?php
			if($opt==5)
			{ 
              include("tq_my_query.php");							 
		
			} ?>
			
			<?php
			if($opt==6)
			{ 
              include("tq_list_query.php");							 
		
			} ?>


			<?php
			if($opt==7)
			{ 
			  $setval =  $_SESSION['login'];
              include("settings.php");							 
		
			} ?>
			
			
			
			
            </div><!--col-9-->
                
            </div><!--row-->
  </div><!--container-->
</div><!--well-->
<?php
}
else {
		?>
		<!--heading-->
		<div class="container-fluid" style="background:#5bc0de; color:#fff">
		<div class="container"><h2 style="padding:15px">Login</h2></div>
		</div><!--heading-->       
  				
		<?php
  }
?>


<?php include("footer.php"); ?>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/script.js"  type="text/javascript"></script>
		<script src="js/side-menu.js" type="text/javascript"></script>
		<?php
		if (!isset($_SESSION['login'])) {

			?>
			<script>
			$('#login').modal('show');
			</script>
			<?php
		}
		?>
</body>
</html>