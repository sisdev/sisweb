<?php 
ob_start();
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
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Training Institute | Software Dealers | Indirapuram, Ghaziabad | Sisoft</title>
<meta name="description" content="Looking for Computer Training Institute,  Software Dealers or Software Developers in Indirapuram, Ghaziabad. " />
<meta name="keywords" content="Computer Training Institute in Delhi, Noida, NCR, Gurgoan,Ghaziabad,Indirapuram" />
<meta name="keywords" content="Online Self-Paced Training Institute" />
<meta name="keywords" content="Tally Certified Partner" />
<meta name="keywords" content="End Point Security Solutions - Kaspersky anti-virus" />
<meta name="keywords" content="Mobile application development and research - iOS, Android, Blackberry, Windows8" />
<meta name="keywords" content="Project management training, PMP, MS Project" />
<meta name="keywords" content="Live Project Training or Summer Project Training" />
<meta name="keywords" content="Embedded Systems Training" />

<link href="http://www.sisoft.in/" rel="canonical" >

<!--<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">-->
<!--<META HTTP-EQUIV="refresh" CONTENT="30">-->

<meta name="google-site-verification" content="eDtPr-M0k9e0kSPelFl_GhmVU7S-85xH5wiD5a1WKbQ" />


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
	  <!-- <script src="js/jquery-2.2.0.min.js" type="text/javascript"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> -->
     <!-- <script src="js/jquery.min.js" type="text/javascript"></script> -->
      <!--   <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/script.js"  type="text/javascript"></script>
    <script src="js/side-menu.js" type="text/javascript"></script>    -->

	
	<!-- JSON-LD markup generated by Google Structured Data Markup Helper. -->
<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "Product",
  "name" : "Tally Solutions",
  "description" : "Sisoft is Partner of Tally Solution",
  "brand" : {
    "@type" : "Brand",
    "name" : "Sisoft",
    "logo" : "http://www.sisoft.in/images/logo-sisoft_2.jpg"
  }
}
</script>

<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "Sisoft",
    "url": "http://www.sisoft.in",
    "address": "SRC E7, Shipra Riviera, Near Gate#8, Gyan Khand-3, indirapuram",
    "sameAs": [
      "https://www.facebook.com/SisoftTech/",
      "https://www.linkedin.com/company/sisoft-technologies/",
	  "https://www.instagram.com/innoforian.dat/"
    ]
  }
</script>
		
<meta property="og:title" content="Training Institute | Software Dealers | Indirapuram, Ghaziabad | Sisoft" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://www.sisoft.in" />
<meta property="og:description" content="Looking for Computer Training Institute,  Software Dealers or Software Developers in Indirapuram, Ghaziabad. " />
<meta property="og:image" content="http://www.sisoft.in/images/slider_ERPconsultant.png" />
        
        <!-- Google Web Font Embed -->
<!-- <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"> -->

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>


	<!--auto-change-image-start-->
		<script>
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
                setTimeout(swapImage,5000);
            }

            window.onload=function() {
                imgCont = document.getElementById('imgBanner');
                swapImage();
            }
        </script>
	<!--auto-change-image-end-->
	
	
<!--slider js-start -->
		<script src="js/jssor.slider.min.js"></script>
		<script>
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
  <style>      
.container1 {
  position: relative;
  width: 50%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container1:hover .image {
  opacity: 1;
}

.container1:hover .middle {
  opacity: 1;
}

.text {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
</style>

        
    </head>
    
    <body>
             
       

        <?php 
		$page= 1 ;
	   include('login_reg.php');
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
        <!--<div data-u="loading" class="jssorl-oval" style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19.0px;position:relative;top:50%;width:38px;height:38px;" src="../img/loading/static-svg/oval.svg" />
        </div>
		-->
	
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1500px;height:600px;overflow:hidden;">
		
		<div class="container1">
  <img data-u="image" src="images/slider_mobile.png" alt="Data&Machine" class="image img-responsive">
  <div class="middle">
    <a href="http://www.sisoft.in/Web_Site_Design"><div class="text">Learn More</div></a>
  </div>
</div>
            
			<div class="container1">
  <img  data-u="image"src="images/slider_data&machine.png" alt="ERPconsultant" class="image">
  <div class="middle">
    <a href="TallyERP9"><div class="text">Learn More</div></a>
  </div>
</div>
  
            
			
			<div class="container1">
  <img data-u="image" src="images/slider_ERPconsultant.png" alt="bms" class="image">
  <div class="middle">
    <a href="solutions.php"><div class="text">Learn More</div></a>
  </div>
</div>
            
			
			
			<div class="container1">
  <img data-u="image" src="images/slider_BMS1.png" alt="mobile" class="image">
  <div class="middle">
    <a href="solutions.php"><div class="text">Learn More</div></a>
  </div>
</div>


<div class="container1">
  <img data-u="image" src="images/slider_mooc1.png" alt="mobile" class="image">
  <div class="middle">
    <a href="solutions.php"><div class="text">Learn More</div></a>
  </div>
</div>

<div class="container1">
  <img data-u="image" src="images/slider_crm-admin.png" alt="mobile" class="image">
  <div class="middle">
    <a href="solutions.php"><div class="text">Learn More</div></a>
  </div>
</div>
			
<!--		<div class="container1">
  <img data-u="image" src="images/slider_inter.png" alt="mobile" class="image">
  <div class="middle">
    <a href="solutions.php"><div class="text">Learn More</div></a>
  </div>
</div>	-->
			
			<!--<div>
                <img data-u="image" src="images/slider-6.jpg">
                <div style="position:absolute;top:85px;right:100px;width:600px;height:175px;z-index:0;background-color:rgba(0,0,0,0.5);">
                    <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#fff;line-height:40px; text-align:center;"></div>
                    <div style="position:absolute;top:60px;left:15px;width:570px;height:40px;z-index:0;font-size:50px;color:#fff;line-height:50px;text-align:center;">Online Assessment</div>
                </div>
               <div style="position:absolute;top:60%;right:0; left:0; margin:0 auto;width:600px;height:120px;z-index:0;">
			   		
			   		<a  class="detail" href="zexam/" style="text-decoration:none; color:#FFFFFF;" target="_blank">Read More</a>
                    <!--<div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#000000;line-height:40px;">Run slider on any device</div>
                    <div style="position:absolute;top:60px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#000000;line-height:38px;">windows, android, mac</div>
                </div>
            </div>-->

			 <!--<div>
                <img data-u="image" src="images/crm_admin.png">
               
               <div style="position:absolute;top:60%;right:0; left:0; margin:0 auto;width:600px;height:120px;z-index:0;">
            
           
                    <!--<div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#000000;line-height:40px;">Run slider on any device</div>
                    <div style="position:absolute;top:60px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#000000;line-height:38px;">windows, android, mac</div>
                </div>
            </div>-->

           <!-- <div>
                <img data-u="image" src="images/pos2.jpeg">
                <div style="position:absolute;top:85px;right:100px;width:600px;height:175px;z-index:0;background-color:rgba(0,0,0,0.5);">
                    <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#fff;line-height:40px; text-align:center;"></div>
                    <div style="position:absolute;top:60px;left:15px;width:570px;height:40px;z-index:0;font-size:50px;color:#fff;line-height:50px;text-align:center;">Try Euphoria POS</div>
                </div>
               <div style="position:absolute;top:60%;right:0; left:0; margin:0 auto;width:600px;height:120px;z-index:0;">
            
            
                    <!--<div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#000000;line-height:40px;">Run slider on any device</div>
                    <div style="position:absolute;top:60px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#000000;line-height:38px;">windows, android, mac</div>
                </div>
            </div>-->
			
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
 
 
 <style> 
.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
  
  }

.myCont:hover .image {
  opacity: 0.3;
  transform: rotateZ( -360deg );
}

.myCont:hover .middle {
  opacity: 1;
}

.text {
  background-color: transparent;
  border: 2px solid green;
  color: black;
  font-size: 14px;
  padding: 16px 32px;
}

.text:hover{
	background-color:green;
	color:white;
}
.image{
	border:1px solid #428bca;
}

</style>

<!--// use in loginreg.php -->

<style>
.inner-addon 
{
  position: relative;
}

.inner-addon .glyphicon {
	color:#428bca;
  position: absolute;
  padding: 10px;
  pointer-events: none;
}
.left-addon input  
{ 
padding-left:30px; 
}
</style>


 
<!-- <style>
.myTab{
  width:30%;
}
#myTab2, #myTab3{
  margin-left:40px;
}
.myTab tr:nth-child(odd) {
    background: #edecc0;
}

a{
	color: blue;
	font-weight:bold;
	font-size: 14px;
}
@media screen and (max-width: 640px) {
    .myTab{
      width:100%;

    }
   #myTab1, #myTab2, #myTab3{
  margin-left:-30px;
}
}
</style>
		 -->
  <!--  <div class="container" style="margin-top:0px">
        <h2 align="center"> Our Hot Courses</h2>
            <div class="row" style="color:#fff; margin-left:40px; margin-top:30px;">
        <table class="table table-bordered table-stripped col-xs-3 col-md-3 col-sm-3 myTab" id='myTab1'>
				<thead>
				<tr>
				<th style="color:white; background-color:#FE9A2E; text-align:center;">IT COURSES</th>
				</tr>
				</thead>
				<tbody style="text-align: center;">
				<tr><td><a href="Embedded_System">Embedded System</a></td></tr>
				<tr><td><a href="Ethical_Hacking">Ethical Hacking</a></td></tr>
				<tr><td><a href="Linux_Device_Driver">Linux Device Drivers</a></td></tr>
				<tr><td><a href="Computer_Fundamentals">Computer Fundamentals</a></td></tr>
				<tr><td><a href="Graphics_Design">Graphics Design</a></td></tr>
				<tr><td><a href="Web_Site_Design">Web Site Design</a></td></tr>
				<tr><td><a href="selenium">Selenium</a></td></tr>
				<tr><td><a href="training-it-courses.php" style='color:red;'>More...</a></td></tr>
				
				</tbody>
				</table>
				
				 <table class="table table-bordered table-stripped col-xs-3 col-md-3 col-sm-3 myTab" id='myTab2'>
				<thead>
				<tr>
				<th style="color:white; background-color:#428bca; text-align:center; font-weight: bold;">MANAGEMENT</th>
				</tr>
				</thead>
				<tbody style="text-align: center;">
				<tr><td><a href="project-management">Project Management</a></td></tr>
				<tr><td><a href="ms-project">MS Project</a></td></tr>
				<tr><td><a href="pmp-certification">PMP Certification</a></td></tr>
				<tr><td><a href="PMCO">PMCO Certification</a></td></tr>
				<tr><td><a href="Prince2"> Prince 2</a></td></tr>
				<tr><td><a href="ITIL">ITIL </a></td></tr>
				<tr><td><a href="agile-scrum">Agile Scrum </a></td></tr>
				<tr><td><a href="training-project-mgnt.php?a=30" style='color:red;'>More...</a></td></tr>
				</tbody>
				</table>
				
				
				<table class="table table-bordered col-xs-3 col-md-3 col-sm-3 myTab" id='myTab3'>
				<thead>
				<tr>
				<th style="color:white; background-color:#FA5858; text-align: center; font-weight: bold;">SOFT-SKILLS</th>
				</tr>
				</thead>
				<tbody style="text-align: center;">
				<tr><td><a href="english-communication">English Communication Course</a></td></tr>
				<tr><td><a href="personality-development"> Personality Development</a></td></tr>
				<tr><td><a href="succeed-in-interviews">Succeed in job Interview</a></td></tr>
				<tr><td><a href="time-management">Time Management</a></td></tr>
				<tr><td><a href="business-communication">Business Communication</a></td></tr>
				<tr><td><a href="organizational-behaviour">Organization Behavior</a></td></tr>
				<tr><td><a href="college-to-corporate">College To Corporate</a></td></tr>
				<tr><td><a href="training-softskills.php?a=20" style='color:red;'>More...</a></td></tr>
				</tbody>
				</table>
			</div>
   </div> -->

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
   top:120px;
    left:32%;
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
#online_div{
  margin-left:200px;
}
#soft_sol_div{
  color:#000; margin-top:30px;  margin-left:80px;
}
.soft_sol_img{
  border: 1px solid red;
  height:150px;
  width:250px;
}
@media screen and (max-width: 640px) {
   #online_div{
  margin-left:0;
}
#soft_sol_div{
  margin-top:0;
  margin-left:10px;
}
.soft_sol_img{
  
  height:100%;
  width:100%;
}
}
</style>  

   



<div class="container-fluid" style="margin-top:10px">    
      <div class="container" style="margin-top:10px;">
        <h2 align="center">Our Software Sales Services</h2>
            <div class="row" id="soft_sol_div">
                 <p style="font-weight:bold;font-size:medium;">Sisoft is channel partner of Tally, Marg, Kaspersky, Microsoft and Redhat. We provide software and solution around these products. We also provide customized ERP and Billing Solutions. <a href="solutions.php">Check our solutions more...</a></p>
				 		<a href="bp-tally-erp9-for-gst.php"> <img class ='soft_sol_img' src="images/tally-solutions-3-star-partner.png " border="0"  alt="Tally ERP Dealer"> </a>
						&nbsp;&nbsp;&nbsp;&nbsp;
						<img class ='soft_sol_img' src="images\kaspersky_logo_300x169.png " border="0"  alt="Kaspersky Dealer ">
						&nbsp;&nbsp;&nbsp;&nbsp;
             
						<img class ='soft_sol_img' src="images\microsoft-partner.png" border="0"   alt="Microsoft Software Dealer">
						&nbsp;&nbsp;&nbsp;&nbsp;
						
						<a href="bp-redhat-offerings.php">	<img class ='soft_sol_img' src="images/redhat-business-partner.png " border="0"   alt="Redhat Software Dealer"></a>
						&nbsp;&nbsp;&nbsp;&nbsp;

            </div>
			<BR><BR>
        </div>
    </div><!--Our Major Programs-->
		
		
		   <!-- Online Course -->
	
	<div class="container-fluid well">
	<div class="container col-md-8" id='online_div'>
		<?php include("online_courses_matrix.php"); ?>	
    </div>				
    </div>				

		
<style type="text/css">
  #learn_sol_div{
    margin-left:50px;
  }
  @media screen and (max-width: 640px) {
 #learn_sol_div{
    margin:0;
     }
     #imgBanner, #skill_img{
      height: 100%;
      width: 100%;
     }
}
</style>
		
<div class="container-fluid" style=" color:#000; margin-bottom:15px;">
<div class="container" style="margin-top:10px; margin-bottom:15px;">
      <h2 align="center" style="margin:0px 0px 10px 0px">Our Satisfied Clients</h2>
      <marquee behavior='scroll'>
            <div class="row"> 
               
                <img src="images/clients/The_Saladian.png" width="100" height="70" alt="The Saladian">
              
                
                 <img src="images/clients/Talcher.jpg" width="100" height="70" style="margin-left:20px;" alt="Fertilizer Company">
               
                
                 <img src="images/clients/stylo-bug.png" width="180" height="100" style="margin-left:20px;" alt="Clothes and life style">
                
               
                 <img src="images/clients/sanjeevani.jpg" width="100" height="70" style="margin-left:20px;" alt="Pharamcy Store">
               
                 <img src="images/clients/paras-energy.png" width="150" height="80" style="margin-left:20px;" alt="Manufacturing Company">
             
                
                <img src="images/clients/make-your-brandz.jpg" width="180" height="100" style="margin-left:20px;" alt="Advertizing Company">
               
                 <img src="images/clients/madhyam-advertising.jpg" width="100" height="70" style="margin-left:20px;" alt="Advertising Company">
               
                  <img src="images/clients/astro.jpg" width="280" height="80" style="margin-left:20px;" alt="Astrology">
                
                 <img src="images/clients/excographic.png" width="280" height="100" style="margin-left:20px;" alt="Exco Graphic">
               
                <img src="images/clients/innovaccer.png" width="190" height="100" style="margin-left:20px;" alt="Innovaccer">
               
                <img src="images/clients/delhi-pharmacy.jpg" width="160" height="120" style="margin-left:20px;" alt="Delhi Pharmacy">
               
                 <img src="images/clients/gupta-collection.jpg" width="160" height="120" style="margin-left:20px;" alt="Gupta Collections">
               
                 <img src="images/clients/bhagirath-electricals.jpg" width="160" height="120" style="margin-left:20px;" alt="Bhagirath Electricals">
               
                 <img src="images/clients/gera.jpg" width="160" height="120" style="margin-left:20px;" alt="Gera Medicos">
              
            </div>
          </marquee>
           
        </div><!--Institutes-->
</div>

  <div class="container-fluid" style=" color:#000; margin-bottom:15px;">
<div class="container" style="margin-top:10px; margin-bottom:15px;">
			<h2 align="center" style="margin:0px 0px 10px 0px">Our Learning Solutions</h2>
            <div class="row"> 
				
                <div class="col-sm-3" id="learn_sol_div">
                <h5 align="center">Programming Examples</h5>
                    <a href="examples/" target="_blank">
                        <img id="imgBanner" src="images/programming.jpg" border="0" class="img-responsive img-rounded img-centered"  alt="Learning Management System">
                    </a>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-3" align="center">
          <h5 align="center">Trainer Workbench - Content Authoring Tool</h5>
            <a href="zcomasys/">
              <img src="images/cca.jpg" border="0" class="img-responsive img-rounded img-centered trainer_img"  alt="Content Authoring">
            </a>
                </div>

			  <div class="col-sm-1"></div>
				<div class="col-sm-3">
                <h5 align="center">Online Assessment</h5>
                    <a href="zexam/" target="_blank">
                        <img id='skill_img' src="images/online-testing.jpg " border="0" class="img-responsive img-centered img"  alt="Test your skills">
                    </a>
                </div>
              	
            </div>
        </div><!--Institutes-->
</div>


<!-- Our  Popular Courses -->
  <div class="container-fluid well">
   <div class="container">
        <h2 align="center">Our Popular Training Courses</h2>
            <div class="row" style="color:#fff; margin-top:30px;">


			 <div class="col-md-4 myCont">
			 <a href="TallyERP9" target="_blank" title="TallyERP9">
                        <img src="images_course/tally.png " class="img-responsive img-rounded img-centered image" alt="TallyERP9" style="height:202px;">
						<div class="middle">
						<div class="text">VIEW COURSE</div>
						</div>
			</a>
			<h4 align="center" style="color:black;">Learn Tally</h4> 
			</div>

			<div class="col-md-4 myCont">
			 <a href="SAP-FICO" target="_blank" title="SAP-Modules">
                        <img src="images_course/sap-modules.png " class="img-responsive img-rounded img-centered image" alt="TallyERP9" style="height:202px;">
						<div class="middle">
						<div class="text">VIEW COURSE</div>
						</div>
			</a>
			<h4 align="center" style="color:black;">Learn SAP</h4> 
			</div>

			<div class="col-md-4 myCont">
			 <a href="Advance-Excel" target="_blank" title="Advance-Excel">
                        <img src="images_course/advance_excel.jpg" border="0" class="img-responsive img-rounded img-centered image" alt="CPP" style="height:202px;">
						<div class="middle">
						<div class="text">VIEW COURSE</div>
						</div>
			</a>
			<h4 align="center" style="color:black;">Learn Advance_Excel</h4> 
			</div>	

			
			<div class="col-md-4 myCont">
			 <a href="java-core" target="_blank" title="Core Java">
                        <img src="images_course/java.png " class="img-responsive img-rounded img-centered image" alt="Java Core"> 
						<div class="middle">
						<div class="text">VIEW COURSE</div>
						</div>
			 </a>
			 <h4 align="center" style="color:black;">Learn Core Java</h4>
			</div>
			 
			  <div class="col-md-4 myCont">
			 <a href="android-training" target="_blank" title="Android">
                        <img src="images_course/android.jpg" class="img-responsive img-rounded img-centered image" alt="Android">
						<div class="middle">
						<div class="text">VIEW COURSE</div>
						</div>
			</a>
			<h4 align="center" style="color:black;">Learn Android</h4> 
			</div>

		<div class="col-md-4 myCont">
			 <a href="Python" target="_blank" title="Python">
                        <img src="images_course/python.png " border="0" class="img-responsive img-rounded img-centered image" alt="Python">
						<div class="middle">
						<div class="text">VIEW COURSE</div>
						</div>
			</a>
			<h4 align="center" style="color:black;">Learn Python</h4> 
			</div>
			
			 
		</div>
		<div class="row" style="margin-top:30px;">
			
			
			<div class="col-md-4 myCont">
			 <a href="php-mysql" target="_blank" title="PHP/MySQL">
                        <img src="images_course/phpmysql.png" border="0" class="img-responsive img-rounded img-centered image" alt="PHP/MySQL" style="height:200px;">
						<div class="middle">
						<div class="text">VIEW COURSE</div>
						</div>
			</a>
			<h4 align="center">Learn PHP/MySQL</h4> 
			</div>
		
		
		<div class="col-md-4 myCont">
			 <a href="data-analytics" target="_blank" title="Data Analytics">
                        <img src="images_course/data-analytics.png " border="0" class="img-responsive img-rounded img-centered image" alt="C" style="height:202px;">
						<div class="middle">
						<div class="text">VIEW COURSE</div>
						</div>
			</a>
			<h4 align="center">Learn Data Analytics</h4> 
			</div>
			
		<div class="col-md-4 myCont">
			 <a href="C_Plus_B_Tech" target="_blank" title="CPP">
                        <img src="images_course/cpp.png" border="0" class="img-responsive img-rounded img-centered image" alt="CPP" style="height:202px;">
						<div class="middle">
						<div class="text">VIEW COURSE</div>
						</div>
			</a>
			<h4 align="center">Learn C++</h4> 
			</div>
			

		</div>
			
 
  
  
  <div class="row" style="margin-top:30px;">
  <div class="col-md-4 myCont">
			 <a href="big-data-hadoop" target="_blank" title="Big-Data/Hadoop">
                        <img src="images_course/bigdata.jpg" border="0" class="img-responsive img-rounded img-centered image" alt="Big-Data/Hadoop" style="height:202px;">
						<div class="middle">
						<div class="text">VIEW COURSE</div>
						</div>
			</a>
			<h4 align="center">Big-Data/Hadoop</h4> 
			</div>
			
		<div class="col-md-4 myCont">
			 <a href="block-chain" target="_blank" title="Block Chain">
                        <img src="images_course/blockchain.png" border="0" class="img-responsive img-rounded img-centered image" alt="Block Chain" style="height:200px;">
						<div class="middle">
						<div class="text">VIEW COURSE</div>
						</div>
			</a>
			<h4 align="center">Block Chain</h4> 
			</div>
			
		
			
		<div class="col-md-4 myCont">
			 <a href="digital-marketing" target="_blank" title="Digital Marketing">
                        <img src="images_course/digital-marketing.png" border="0" class="img-responsive img-rounded img-centered image" alt="SEO" style="height:200px;">
						<div class="middle">
						<div class="text">VIEW COURSE</div>
						</div>
			</a>
			<h4 align="center">Learn Digital Marketing</h4> 
			</div>
	
	</div>
	 </div>
</div>	

<!-- Popular courses --> 
  
<style type="text/css">
 .blue{
  margin-left:60px;
 }
  @media screen and (max-width: 640px) {
.blue{
  margin-left:0;
 }
}
</style>
    
  <div class="container-fluid well" style="margin-top:-10px">    
      <div class="container" style="margin-top:-20px">
        <h2 align="center">Sisoft for Corporates/Institutes</h2>
            <div class="row" style="color:#fff; margin-top:35px;">
                <div class="col-md-3 blue">
                    <p><strong>Corporate Training/ Workshops / Seminars</strong></p>
                    <p>In the increasingly competitive market scenario when you consider training is crucial to top- up the capability of your team, but moving away focus from the business strategies is next to impossible, unravel the dilemma loop partnering with Sisoft.</p>
					
					<a class="btn btn-black" href="reg-sis.php" role="button">Reqest Proposal</a> 
              
                </div>
                 <div class="col-md-1"></div>
                <div class="col-md-3 orange" >
                   <p><strong>Recruitment from sisoft</strong></p>
                   <p>Sisoft provides trained candidates who are well informed technically and have worked on sample projects and this make them being productive from day one. Looking to hire productive people</p>
         <a class="btn btn-black" href="recruit-from-sisoft.php" role="button" style="margin-top:42px;">Submit Placement Request</a>
                </div>
                <div class="col-md-1"></div>
				<div class="col-md-3 green">
                   <p><strong>Internship @ sisoft</strong></p>
                   <p>We provide internship to MTech and Researchers students in areas of SMAC technologies esp mobile app development, Big Data Analytics and IoT. If you are working on these areas and looking for Industry Internship.</p>
        <a class="btn btn-black" href="reg-sis.php" role="button" style="margin-top:30px;">Apply Now</a> 
		
                </div>
               
            </div>
        </div><!--Our Major Programs-->
</div><!--well-->

<div class="container" style="margin-top:0px">
        <h2 align="center">Upcoming Batches</h2>
           
                
        <style>
div.scroll {
  padding-left:8px;
    
    height: 200px;
    overflow: scroll;
}
</style>
                  
             
               
                
        
         <a href="new_batches.php" style="color:white">
                <div class="col-md-12">
                  
                   <p>
           
           <div class="table-responsive scroll">      
  <marquee direction=up onMouseOver="this.setAttribute('scrollamount', 0, 0);" onMouseOut="this.setAttribute('scrollamount', 5, 0);"  behavior="alternate" scrolldelay="450">          
  <table class="table" style="color:blue;">
   
    <tbody>

   <?php      $count=1;  
   $now_date= date("Y-m-d");
$query="SELECT DATE_FORMAT(start_date,'%d-%b-%Y'),course_name,duration FROM `trng_batches` WHERE start_date >= '".$now_date."' ORDER BY start_date LIMIT 0 , 10";
$resultset=mysqli_query($conn, $query); 
//echo $query;        
    while($row=mysqli_fetch_array($resultset,MYSQLI_NUM)) { ?>
     <tr>
     <td><strong><?php echo $count; ?></strong></td>
     <td ><strong><?php echo $row[0];?></strong></td>
                          
   <td ><strong> <?php echo $row[1];?></strong></td>                     
                          
   <td ><strong> <?php echo $row[2];?></strong></td>
    
     </tr>
  
  
              
    <?php $count++; }  ?> 

   </tbody>
  
  </table>
  </marquee>   
  </div>
           </p>
         <div id="fb-root"></div>
        <script async defer src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2"></script>
        <iframe style="float:right; margin: 10px;" src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fwww.sisoft.in%2Fnew_batches.php&layout=button_count&size=large&mobile_iframe=true&width=91&height=28&appId" width="91" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
        </div></a>
                
               
           
        </div><!--Upcoming Batches-->
        
        <!-- <script src="js/jquery.min.js" type="text/javascript"></script> -->
       <!--  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/script.js"  type="text/javascript"></script>
		<script src="js/side-menu.js" type="text/javascript"></script>   --> 

 
<?php include("footer.php"); ?>
    </body>
</html>