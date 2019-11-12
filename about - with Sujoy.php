<?php
error_reporting(0);
session_start();
include 'db/dbi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <title>About us</title>
<meta name="description" content="About Sisoft - Vision, Mission and Team" />
<meta name="keywords" content="About Sisoft - Vision, Mission and Team" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
<META HTTP-EQUIV="EXPIRES" CONTENT="0">
    <meta charset="UTF-8">
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
	   
	   include("top-header.php");
	   
	   ?>
       <?php include('login_reg.php'); ?>
       
       <!-- lonin-->
  
       
<!--heading-->
<div class="container-fluid" style="background:#5bc0de; color:#fff">
<div class="container"><h2 style="padding:15px">About us</h2></div>
</div><!--heading-->       
                  
<div class="container-fluid well">   
 
      <div class="container">
      
            <div class="row">
           
            <div class="col-lg-3">
			
			
  <ul class="nav nav-pills nav-stacked">
    <li class="active"><a data-toggle="pill" href="#home">ABOUT US</a></li>
    <li><a data-toggle="pill" href="#menu1">VISION / MISSION / VALUES</a></li>
    <li><a data-toggle="pill" href="#menu2">QUALITY POLICY / OBJECTIVES</a></li>
    <li><a data-toggle="pill" href="#menu3">OUR TEAM</a></li>
  </ul>
			
			
            <aside class="left-sidebar">
			
			
  
	 
            </aside>

            </div><!--col-4-->
            
            <div class="col-lg-9">
			 <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>ABOUT US</h3>
      <h4><kbd>Sisoft</kbd> offers learning services and learning solutions catering to the needs of enterprise, institute and individuals. 
		   Sisoft specializes in skilling and training people in areas of IT Technical, Project Management and Soft Skills. Our modules are industry oriented and assist Business Houses/Companies
		   in improving employee productivity, enhance employee engagement, facilitate job satisfaction and retention of high performers. We provide job-oriented modules for fresh graduates.
		   <p><p>
		   
		   Sisoft provides classroom or remote instructor led training and assessment solutions. Our learning solutions include preparing cuurse content, learning management, assessment and proctoring.
		   <p>
		   Our customers includes government organization to mid sized private enterprises and institures. We have also trained few thousand students through class room and workshops and seminars. 
		   </h4>
		   </div>
    <div id="menu1" class="tab-pane fade">
      <h3>VISION</h3>
     <h4>
		   <ul type="circle"><li>
		   <kbd>To</kbd> brige the gap of demand and supply of talent pool by offering skilling and assesssing solution to individuals, academia and 
		   industry.</li>
		   
		   
		   
		   <li>
		   To assist people in being grainfully employed of being an entrepreneur.
		 </li>
		 </ul>
		     <p>
			  <center><h1>Mission</h1></center>
			   <ul type="circle">
			   <li>
			  <kbd>Develop</kbd> course curriculum based on occupational standard and industry needs.
		   </li>
		   
		   
		   <li>
		    Offer quality training solutions by skilled and industry experienced trainers.
		 </li>
		     <li>
			 Assess and certify trained people for easy benchmarking by employers Collaborate with industry and academia for suitable placements and incubation.
			</li>
</ul>			
			 <p>
			  <center><h1>Values</h1></center>
			  <ul type="circle">
			 <li><kbd>Integrity</kbd> and ethics are the integral parts of every action we take.</li>
		   
		   <p><p>
		  <li>  Strive to deliver best solutions and exceed customer expectations.</li>
		 
		     <p>
			<li> Offer quality solutions using strengths of each one of us.</li>
			
			<li>Respect customers and team</li>
			</ul>
			 <p>
		  	   </h4>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>QUALITY POLICY</h3>
      <h4>
		   <ul type="circle">
		  <li> <kbd>We</kbd> are committed to meet customers stated and needs and expectations by delivering competitive
		    services and solution through continual improvement of our systems.</li>
		   
		   <p>
		   <center><h1>Objectives</h1></center>
		   <ul type="circle">
		 <li>  <kbd>Deliver</kbd> services and solutions that meet customer requirement and expectations.</li>
		   
		   <p><p>
		  <li> Continually enhance external and internal customer satisfaction.</li>
		 
		     <p>
			<li> Continously improve systems.</li>
			 <p>
		   
		 
		  	   </h4>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>OUR TEAM</h3>
     <center><b>The knowledge and passion of the team are the most important criteria in IT Business software development and the transfer of learning. Our team approach client work with great seriousness and diligence. Our team not only provides software development but also training according to the curriculum. It also put extra efforts to help 
		   the students in getting their dream jobs. The details of our core faculties are given below: </b></center><p></br>
		   <div class="container-fluid">
		   <div class="row">
		   <div class="col-sm-3">
		   <center>
		  <h3> Vijay Rastogi</h3>
<i>CEO</i></center></br>

    B.E in Computer Science from Motilal Nehru National Institute of Technology, Allahabad
    Executive MBA from IIM Indore
    Certifications: PMP, CSQA, INS,IIBF
    25+ years of experience in industry.
    Professional Associations: Senior Life Member of CSI, Life Member of ISC
    Extensive experience in project management and technology consulting
    Worked with CSC, TCS and Nucleus <br>
	<a href="https://www.linkedin.com/in/vijay-rastogi-1b74892/">LinkedIn Profile</a>	  
		   </div>
		   <div class="col-sm-3">
		   <center>
		  <h3> Sujoy Dutta </h3>
<i>(Director - PM Consulting)</i></center></br>

     MCA, APGDSM, PMP, MCP
PMP Certfied Project Management Professional
20+ years of experience in industry.
More than 12 years in Management Positions
Work experience in US, UK, Germany and France
		   
		   </div>
		   <div class="col-sm-3">
		   <center>
		  <h3> Dinesh Kumar Khosla  </h3>
<i>(Director - Business Development)</i></center></br>
MBA(Systems), Six Sigma Green Belt, Prince2, 20+ years of experience<BR>
Managing overall profitability of operations and accountable for Business Development, Competency Development, Delivery Excellence, Operations & Maintenance<BR>
Hands on experience in Pre-Sales, Program & Account Management with exposure handling clients across g India, APAC, GULF, Europe and USA<BR>
Specialties: Pre-Sales ,Program & Account Management ,Software Testing,Quality Management

		   </div>

		   <div class="col-sm-3">
		   <center>
		  <h3> Saurabh Sharma  </h3>
<i>(Director - Consulting)</i></center></br>
B.Tech gradute from MNREC, Allahabad, with an MBA from FMS, Delhi University<BR>
A result oriented leader, with 24+ years of hands on experience in Software Product Development using Agile, turned into a full time Professional Trainer & Coach<br> 
Conducted 60+ Training cum Consulting sessions on Agile, IT,  Customer & Project Management, Aptitude & Soft Skills Development <BR>
Worked with leading IT companies - HCL, Wipro, TCS, Nucleus Software & Extramarks <br>

		   </div>

		   
		   </div>
		   
		   </div>
    </div>
  </div>
</div>
			
            </div><!--col-9-->
                
            </div><!--row-->
  </div><!--container-->
</div><!--well-->









<?php include("footer.php"); ?>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/script.js"  type="text/javascript"></script>
		<script src="js/side-menu.js" type="text/javascript"></script>
</body>
</html>