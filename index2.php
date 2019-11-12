<?php 
session_start();
include("db/dbi.php");
if (isset($_SESSION['login'])) {

	       $logged = 1 ;  

		  }

    else {

          $logged = 0 ;      	   

    }
?>		         
<!DOCTYPE html> 
<html lang="en">
<head>
<title>Training Institue in Indirapuram, Ghaziabad, Noida, Delhi, NCR - Sisoft Learning</title>
<meta name="description" content="Computer Training Institute in Indirapuram, Ghaziabad. SMAC Center of excellence:Android, iOS, IoT,Embedded. Research and Development of mobility solutions " />
<meta name="keywords" content="Training on iPhone, Android, Embeded Systems, Java, .Net, C/C++" />
<meta name="keywords" content="Computer Training Institute in Delhi, Noida, NCR, Gurgoan,Ghaziabad,Indirapuram" />
<meta name="keywords" content="Online Self-Paced Training Institute" />
<meta name="keywords" content="Mobile application development and research - iOS, Android, Blackberry, Windows8" />
<meta name="keywords" content="Project management training, PMP, MS Project" />
<meta name="keywords" content="Live Project Training or Summer Project Training" />
<meta name="keywords" content="Embedded Systems Training" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
<META HTTP-EQUIV="EXPIRES" CONTENT="0">

<meta name="google-site-verification" content="eDtPr-M0k9e0kSPelFl_GhmVU7S-85xH5wiD5a1WKbQ" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <!-- Google Web Font Embed -->
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>


	<!--auto-change-image-start-->
		<script type="text/javascript">
            var picPaths = ['images/php-programm.jpg','images/java-program.jpg','images/programming.jpg'];
            var curPic = -1;
            //preload the images for smooth animation
            var imgO = new Array();
            for(i=0; i < picPaths.length; i++) {
                imgO[i] = new Image();
                imgO[i].src = picPaths[i];
            }

            function swapImage() {
                curPic = (++curPic > picPaths.length-1)? 0 : curPic;
                imgCont.src = imgO[curPic].src;
                setTimeout(swapImage,3000);
            }

            window.onload=function() {
                imgCont = document.getElementById('imgBanner');
                swapImage();
            }
        </script>
	<!--auto-change-image-end-->
	
	
<!--slider js-start -->
		<script src="js/jssor.slider.min.js" type="text/javascript"></script>
		<script type="text/javascript">
        jssor_1_slider_init = function () {
            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
		
		<!--slider js-end-->
        
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

			  echo "3333333"; include('login_reg2.php'); echo "4444444444";?>

        <?php 
		$page= 1 ;
	   include("top-header.php");
	   
	   if(@$_GET['session']==1)
	   {
		   session_destroy();
		   unset($_SESSION['login']);
	  echo"<script>window.location='index.php'</script>";
	   }
	   
	   ?>
       <!--slider-start-->
       
	   
          <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1500px;height:530px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-oval" style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19.0px;position:relative;top:50%;width:38px;height:38px;" src="../img/loading/static-svg/oval.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1500px;height:600px;overflow:hidden;">
            <div>
                <img data-u="image" src="images/banner-bg.jpg" class="img-responsive" style="width:100%;">
                <div style="position:absolute;top:85px;right:100px;width:600px;height:180px;z-index:0;background-color:rgba(0,0,0,0.5);">
                    <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#ffffff;line-height:40px; text-align:center">Want to become a</div>
                    <div style="position:absolute;top:60px;left:15px;width:570px;height:40px;z-index:0;font-size:50px;color:#ffffff;line-height:48px; text-align:center">Web Designer & Web Developer</div>
                </div>
                <div style="position:absolute;top:60%;right:0; left:0;width:600px;height:120px;z-index:0; margin:0 auto;">
						<a  class="detail" href="http://localhost/sis-website/training_it_courses.php?a=36" style="text-decoration:none; color:#FFFFFF;">Read More</a>
                    <!--<div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#000000;line-height:40px;">Run slider on any device</div>
                    <div style="position:absolute;top:60px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#000000;line-height:38px;">windows, android, mac</div>-->
                </div>
            </div>
            <div>
                <img data-u="image" src="images/slider-3.jpg" />
                <div style="position:absolute;top:85px;left:100px;width:600px;height:120px;z-index:0;background-color:rgba(0,0,0,0.5);">
                    <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#ffffff;line-height:40px; text-align:center;">Want to become a</div>
                    <div style="position:absolute;top:60px;left:15px;width:570px;height:40px;z-index:0;font-size:50px;color:#ffffff;line-height:38px;text-align:center;">Android Developer</div>
                </div>
               <div style="position:absolute;top:60%;left:0; right:0; margin:0 auto;width:600px;height:120px;z-index:0;">
			   		
			   		<a  class="detail" href="http://sisoft.in/training_smac.php?a=17" style="text-decoration:none; color:#FFFFFF;">Read More</a>
                    <!--<div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#000000;line-height:40px;">Run slider on any device</div>
                    <div style="position:absolute;top:60px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#000000;line-height:38px;">windows, android, mac</div>-->
                </div>
            </div>
            <div>
                <img data-u="image" src="images/slider-2.jpg" />
                <div style="position:absolute;top:85px;left:100px;width:600px;height:120px;z-index:0;background-color:rgba(0,0,0,0.5);">
                    <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#ffffff;line-height:40px;text-align:center;">Want To Become a</div>
                    <div style="position:absolute;top:60px;left:15px;width:570px;height:40px;z-index:0;font-size:50px;color:#ffffff;line-height:38px;text-align:center;">Data Analyst</div>
                </div>
               <div style="position:absolute;top:60%;left:0; right:0; margin:0 auto; width:600px;height:120px;z-index:0;">
			  		<a  class="detail" href="http://sisoft.in/Big_Data" style="text-decoration:none; color:#FFFFFF;">Read More</a>
                    <!--<div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#000000;line-height:40px;">Run slider on any device</div>
                    <div style="position:absolute;top:60px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#000000;line-height:38px;">windows, android, mac</div>-->
                </div>
            </div>
			
			
			<div>
                <img data-u="image" src="images/slider-5.jpg" />
                <div style="position:absolute;top:75px;left:100px;width:600px;height:175px;z-index:0;background-color:rgba(0,0,0,0.5);">
                    <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#fff;line-height:40px; text-align:center;">Learn</div>
                    <div style="position:absolute;top:60px;left:15px;width:570px;height:40px;z-index:0;font-size:50px;color:#fff;line-height:50px;text-align:center;">Self Paced-Online Training</div>
                </div>
               <div style="position:absolute;top:60%;left:0; right:0; margin:0 auto;width:600px;height:120px;z-index:0;">
			   		
			   		<a  class="detail" href="http://sisoft.in/online_courses.php?option=1" style="text-decoration:none; color:#FFFFFF;">Read More</a>
                    <!--<div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#000000;line-height:40px;">Run slider on any device</div>
                    <div style="position:absolute;top:60px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#000000;line-height:38px;">windows, android, mac</div>-->
                </div>
            </div>
			
			
			<div>
                <img data-u="image" src="images/slider-6.jpg">
                <div style="position:absolute;top:85px;right:100px;width:600px;height:175px;z-index:0;background-color:rgba(0,0,0,0.5);">
                    <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#fff;line-height:40px; text-align:center;"></div>
                    <div style="position:absolute;top:60px;left:15px;width:570px;height:40px;z-index:0;font-size:50px;color:#fff;line-height:50px;text-align:center;">Online Assessment</div>
                </div>
               <div style="position:absolute;top:60%;right:0; left:0; margin:0 auto;width:600px;height:120px;z-index:0;">
			   		
			   		<a  class="detail" href="zexam/" style="text-decoration:none; color:#FFFFFF;" target="_blank">Read More</a>
                    <!--<div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#000000;line-height:40px;">Run slider on any device</div>
                    <div style="position:absolute;top:60px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#000000;line-height:38px;">windows, android, mac</div>-->
                </div>
            </div>
			
			
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:22px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
	<script type="text/javascript">jssor_1_slider_init();</script>
	
	
	   <!--slider-end-->  
      
<!-- Automatic Modal -->

<?php include('auto-modal.php'); ?> 
  
 
<div id="success">

  
  </div>
  
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.1/js/bootstrap-dialog.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.1/js/bootstrap-dialog.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.1/css/bootstrap-dialog.min.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.1/css/bootstrap-dialog.css" type="text/css">
  

  
   <div class="container-fluid well" style="margin-top:0px">    
      <div class="container" style="margin-top:0px">
        <h2 align="center" >Our Training Programs</h2>
            <div class="row" style="color:#fff;">
                <div class="col-md-5">
				<style>
div.scroll {
	padding-left:8px;
    background-color: #FA5858;
    height: 200px;
    overflow: scroll;
}</style>
                    <a href="online_courses.php?option=1" style="color:white">
                    <p><strong><font color=black>Self Paced - Online Training(View/Register)</font></strong></p>
                    <p>
					<div class="scroll">
					<?php $query=mysqli_query($conn,"select distinct course_subcategory from trng_pgms_selfpaced"); 
					while($news=mysqli_fetch_array($query))
					{
					?>
											
					<?php echo $news['course_subcategory']; echo "<br/>" ; } ?>
					
					
					</div>
					</p></a>
             
                </div>
                 <div class="col-md-2"></div>
				 
				 <a href="new_batches.php" style="color:white">
                <div class="col-md-5">
                   <p><strong><font color=black>Instructor Led (Class Room/Online) Batches (View/Register)</font></strong></p>
                   <p>
				   
				   <div class="table-responsive scroll" style="background-color:#FE9A2E">      
	<marquee direction=up onMouseOver="this.setAttribute('scrollamount', 0, 0);" onMouseOut="this.setAttribute('scrollamount', 5, 0);"  behavior="alternate" scrolldelay="450">				   
  <table class="table">
   
    <tbody>

	 <?php      $count=1;  
	 $now_date=date("Y-m-d");
$query="SELECT start_date,course_name,duration FROM `trng_batches` WHERE start_date >= '".$now_date."' ORDER BY start_date LIMIT 0 , 10";
$resultset=mysqli_query($conn, $query);				  
	  while($row=mysqli_fetch_array($resultset)) { ?>
	   <tr>
	   <td><strong><?php echo $count; ?></strong></td>
	   <td ><strong><?php echo $row["start_date"];?></strong></td>
	                        
	 <td ><strong> <?php echo $row["course_name"];?></strong></td>                     
	                        
	 <td ><strong> <?php echo $row["duration"];?></strong></td>
	  
	   </tr>
	
	
	            
	  <?php $count++; }  ?> 

   </tbody>
	
  </table>
  </marquee>   
  </div>
				   </p>
      
                </div></a>
                
               
            </div>
        </div><!--Our Major Programs-->
</div><!--well-->
  
  
  
  
  
  
  <div class="container-fluid" style=" color:#000; margin-bottom:15px;">
<div class="container" style="margin-top:10px; margin-bottom:15px;">
			<h2 align="center" style="margin:0px 0px 10px 0px">Our Learning Solutions</h2>
            <div class="row">               
				<div class="col-sm-4">
                <h5 align="center">Online Courses</h5>
                    <a href="Free_Courses_Online" target="_blank">
                        <img src="images/online-learning.jpg " border="0" class="img-responsive img-rounded img-centered"  alt="Learn Online">
                    </a>
                </div>
                <div class="col-sm-4">
                <h5 align="center">Programming Examples</h5>
                    <a href="examples/" target="_blank">
                        <img id="imgBanner" src="images/programming.jpg" border="0" class="img-responsive img-rounded img-centered"  alt="Learning Management System">
                    </a>
                </div>
				<div class="col-sm-4">
                <h5 align="center">Online Assessment</h5>
                    <a href="zexam/" target="_blank">
                        <img src="images/online-testing.jpg " border="0" class="img-responsive img-centered img"  alt="Test your skills">
                    </a>
                </div>
              	
            </div>
        </div><!--Institutes-->
</div>
  
  
  
  
  
  
  <div class="container-fluid well" style="margin-top:-10px">    
      <div class="container" style="margin-top:-20px">
        <h2 align="center">Our Major Programs</h2>
            <div class="row" style="color:#fff;">
                <div class="col-md-3 blue">
                    <p><strong>Training - IT Courses</strong></p>
                    <p>Get orientation on Basic Computer Courses, Computer Language(C, C++, Java, Objective C, Python), Web Application Development(PHP, JSP, .Net), Finacial Accounting (Tally), Digital Marketing(SEO, SMM) Oracle, ERP, CRM </p>
                    <a class="btn btn-black" href="training_it_courses.php" role="button">Read More</a>
                </div>
                
                <div class="col-md-3 orange" style="background-color:#FE9A2E">
                   <p><strong>Management & Quality</strong></p>
                   <p>Improving Predictability and perfection thru course in project management (PMP, PMCO, MS Project, Prince2, Agile/SCRUM, ITIL), Quality Management (ISO-9001, Six Sigma),  and Many More.</p>
                   <a class="btn btn-black" href="training_project_mgnt.php?a=30" role="button">Read More</a>
                </div>
                
                <div class="col-md-3 red" style="background-color: #FA5858;">
                    <p><strong>Soft Skills</strong></p>
                    <p>Making you effective and efficient improving Soft Skills(English Communcation(Verbal and Written, Personality Development, Succeed In Interview, Performance Development and Plannning, Managing People (Tech Lead to Team Lead).</p>
                    <a class="btn btn-black" href="training_softskills.php?a=20" role="button">Read More</a>
                </div>
                
                <div class="col-md-3 green">
                    <p><strong>SMAC - Social, Mobility, Analytics, Cloud</strong></p>
                    <p>Upcoming and hot technical course. This program covers mobile application development(iOS, Android, Cordova)  Big Data (Hadoop and System R), Cloud Computing, Embedded, IOT, Block Chain and Many More.</p></p>
                    <a class="btn btn-black" href="training_smac.php?a=16" role="button">Read More</a>
                </div>
            </div>
        </div><!--Our Major Programs-->
</div>
  
  
<div class="container-fluid" style=" color:#000; margin-bottom:10px;">
	<div class="container" style="margin-top:10px; margin-bottom:10px;">
			<h2 align="center" style="margin:0px 0px 0px 0px">Trainer Area</h2>
			<div class="row">   
                <div class="col-sm-4" align="center">
					<h5 align="center">Trainer Workbench - Content Authoring Tool</h5>
						<a href="zcomasys/">
							<img src="images/cca.jpg " border="0" class="img-responsive img-rounded img-centered"  alt="Content Authoring">
						</a>
                </div>
				<div class="col-md-3"></div>
                <div class="col-sm-4" align="center">
					<h5 align="center">Join our Trainer team</h5>
						<a href="career.php?career=4"">
							<img src="images/join-trainer-team2.png " border="0" class="img-responsive img-rounded img-centered"  alt="Join our Trainer team">
						</a>
                </div>

            </div>    	
	</div>
</div>
  
  
    
  <div class="container-fluid well" style="margin-top:-10px">    
      <div class="container" style="margin-top:-20px">
        <h2 align="center">Sisoft for Corporates</h2>
            <div class="row" style="color:#fff;">
                <div class="col-md-5 blue">
                    <p><strong>Corporate Training</strong></p>
                    <p>In the increasingly competitive market scenario when you consider training is crucial to top- up the capability of your team, but moving away focus from the business strategies is next to impossible, unravel the dilemma loop partnering with Sisoft.</p>
					
					<a class="btn btn-black" href="reg_sis.php" role="button">Reqest Proposal</a> 
              
                </div>
                 <div class="col-md-2"></div>
                <div class="col-md-5 orange" style="height:28vh;">
                   <p><strong>Recruitment from sisoft</strong></p>
                   <p>Sisoft provides trained candidates who are well informed technically and have worked on sample projects and this make them being productive from day one. Looking to hire productive people</p>
         <a class="btn btn-black" href="recruit-from-sisoft.php" role="button" style="margin-top:25px;">Submit Placement Request</a>
                </div>
                
               
            </div>
        </div><!--Our Major Programs-->
</div><!--well-->

  
  
        
       
      <script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>


 
<div class="container-fluid well" style="margin-top:-40px">    
      <div class="container" style="margin-top:-30px">
        <h2 align="center">Sisoft for Institutes</h2>
            <div class="row" style="color:#fff;">
                <div class="col-md-5 red" style="background-color: #FA5858;">
                    <p><strong>Workshops / Seminars</strong></p>
                    <p>Regular courses do not keep pace with evolving technical trends in the industry. We collaborate with Academia to bring
these technical trends and industry expectation among students. we can assist in research areas and work together on these.</p>
		
			<a class="btn btn-black" href="reg_sis.php" role="button">Request Proposal</a>
          
                </div>
                 <div class="col-md-2"></div>
                <div class="col-md-5 green" style="height:32vh;">
                   <p><strong>Internship @ sisoft</strong></p>
                   <p>We provide internship to MTech and Researchers students in areas of SMAC technologies esp mobile app development, Big Data Analytics and IoT. If you are working on these areas and looking for Industry Internship.</p>
        <a class="btn btn-black" href="reg_sis.php" role="button" style="margin-top:40px;">Apply Now</a> 
		
                </div>
                
               
            </div>
        </div><!--Our Major Programs-->
</div><!--well-->



<div class="container-fluid well" style="margin-top:-40px">    
      <div class="container" style="margin-top:-30px">
        <h2 align="center">Software Solutions and Consulting</h2>
            <div class="row" style="color:#000;">
                 <p style="font-weight:bold;font-size:medium;">Sisoft is channel partner of Tally Solutions and Redhat. We provide software and solution around these products. </p>
				 		<a href="bp-tally-erp9-for-gst.php"> <img src="images/tally-solutions-3-star-partner.png " height="150" width="300" border="0"  alt="Tally Solutions Certified Partner"> </a>
							&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="bp-redhat-offerings.php">	<img src="images/redhat-business-partner.png " height="150" width="300" border="0"   alt="Redhat Business Partner"></a>
						&nbsp;&nbsp;&nbsp;&nbsp;
						<img src="images/logo-redington-cloud-solutions.png " height="150" width="300" border="0"   alt="Redington Cloud Solutions ">
                </div>
                
               
            </div>
        </div><!--Our Major Programs-->
</div><!--well-->


  

<?php include("footer.php"); ?>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/script.js"  type="text/javascript"></script>

    </body>
</html>