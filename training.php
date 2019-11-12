<?php

error_reporting(0);
ob_start();
session_start();
include 'db/dbi.php';
$now_date = date('Y-m-d');
$query="SELECT start_date,course_name,duration FROM `trng_batches`        WHERE start_date >= '".$now_date."'        ORDER BY start_date LIMIT 0 , 10";
$resultset=mysqli_query($conn, $query);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Computer Training Institue in Indirapuram, Ghaziabad, Noida, Delhi, NCR - Sarvodaya Institute of Software</title>
<meta name="description" content="Computer training institute in Indirapuram, Ghaziabad. Learn from Experts from Industry, Live Project Training of six months or six weeks, Job oriented Courses" />
<meta name="keywords" content="Training on iPhone, Android, Embeded Systems, Java, .Net, C/C++" />
<meta name="keywords" content="Computer Training Institute in Delhi, Noida, NCR, Gurgoan,Ghaziabad,Indirapuram" />
<meta name="keywords" content="Training of mobile application development - iPhone, Android, Blackberry, Windows8" />
<meta name="keywords" content="Project management training, PMP, MS Project" />
<meta name="keywords" content="Live Project Training or Summer Project Training" />
<meta name="keywords" content="Embedded Systems Training" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
<META HTTP-EQUIV="EXPIRES" CONTENT="0">





<meta name="google-site-verification" content="eDtPr-M0k9e0kSPelFl_GhmVU7S-85xH5wiD5a1WKbQ" />


<!-- Facebook Conversion Code for Sisoft Online Training Registration Facebook Campaign 2014 -->

<script>(function() {

var _fbq = window._fbq || (window._fbq = []);

if (!_fbq.loaded) {

var fbds = document.createElement('script');

fbds.async = true;

fbds.src = '//connect.facebook.net/en_US/fbds.js';

var s = document.getElementsByTagName('script')[0];

s.parentNode.insertBefore(fbds, s);

_fbq.loaded = true;

}

})();

window._fbq = window._fbq || [];

window._fbq.push(['track', '6012642993259', {'value':'0.01','currency':'INR'}]);

</script>

<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6012642993259&amp;cd[value]=0.01&amp;cd[currency]=INR&amp;noscript=1" /></noscript>

<!-- End Facebook Conversion Code for Sisoft Online Training Registration Facebook Campaign 2014 -->


<link rel="icon" href="images/favicon(1).ico" type="image/png" />
<link href="css/header.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
<!--[if IE 5.5]><link rel="stylesheet" type="text/css" href="css/ie5.css" media="screen"/><![endif]-->





<script language="javascript" type="text/javascript" src="swfobject.js"></script>
<script language="javascript">
i = 0
var speed = 1
function scroll() {
i = i + speed
var div = document.getElementById("news")
div.scrollTop = i
if (i > div.scrollHeight - 150) {i = 0}
t1=setTimeout("scroll()",100)
}
</script></head>

<body style="width:100%;margin:0px;background:url(images/shadowtwo.png) repeat;padding:0px;" onload="scroll();">
<div style="width:1005px; height:auto;box-shadow:0px 0px 30px gray;margin:auto;">
<?php include("header.php") ?>
<div style="clear:both;"></div>
<div style="width:1005px; margin:auto;">
<?php include("header-image-area.php") ?>
<table width="100%"border="0" cellspacing="0" cellpadding="0" align="center">  
<tr>    
<td width="192" valign="top">
<div id="left-column">

  	<div class="leftbox">          
	   <div class="leftbox-hdbg">            
	   <h2>Online Training</h2>          
	   </div>          
	   <div class="inner-text">
		We deliver training in online mode removing the distance boundaries apart. This is interactive and instructor led. We follow blended MOOC with OER Courseware. The courseware is updated regularly and delivered in online modes.<br />	<br/>   
	 <div class="more-btn"><a href="online_register.php">Register for Online Classes &raquo;</a></div> 
	 			
	 	 </div>       
	  </div>  


<div class="leftbox">
		          <div class="leftbox-hdbg">
				              <h2> Why Sisoft </h2>
		          </div>
		<div class="inner-text"> 
		           <ul> 
				                <li>Demo Classes </li>              
								<li>Career Counselling</li> 								            
								 <li>Placement Assistance </li>
								 <li> Project Training </li>              
								 <li>24x7 online assistance </li>   
								 <li>Guaranteed Satisfaction </li>        
				 </ul> 
		 <div class="more-btn"><a href="whySIS.php">Why Sisoft &raquo;</a> </div>
		</div>  
      </div>  


        <div class="leftbox">
          <div class="leftbox-hdbg">
	              <h2>Join as Faculty</h2>
              </div>
	   		<div class="inner-text">            
	   			<ul>              
	   			<li>Industry Experienced </li>             
	    		<li>Passion to Share Knowledge </li>              
						              
     			</ul>           
	 			
			    <div class="more-btn"><a href="trainer_registration.php">Register as Trainer &raquo;</a></div>          
	 		</div>       
	  </div>        
	  
	  <div class="leftbox">         
          <div class="leftbox-hdbg">            
  			<h2>Why Certification </h2>          
  		  </div>          
  			<div class="inner-text">           
   			              
   			 IT certifications are very useful in this competitive IT world to get a  bright future in the IT industry... 
   			            
   			<div class="more-btn"><a href="whyCerti.php">More &raquo;</a></div>
			</div>
			</div>
			
 	<div class="leftbox">          
		<div class="leftbox-hdbg">            
			<h2> Certification </h2>          
		</div>          
		<div class="inner-text">  
     	<ul>
       		<li><a href="Java_Certification">Java Certification</a></li>
       		<li><a href="Microsoft_Certification">Microsoft Certification</a></li>
       		<li><a href="PMI-PMP_certification">PMI-PMP Certification</a></li>
       		<li><a href="Zend_Certification">Zend Certification</a></li>
       		<li><a href="Red_Hat_Certification">Red Hat Certification</a></li>
     	</ul>
     	<p>&nbsp;</p>
   		</div>         
    </div>        
	</div>        
</td>    
<!-- ************************************************************************************************************* -->    
	 <td width="570"  valign="top" title="" align="center"  style="float:center; margin:0px auto;">
	 <table width="585" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-left:8px;" >        
	 <tr>          
	 <td width="171"><div align="left"><h1 class="text6"> Mobility APPs </h1></div></td>          
	 <td width="203"><div align="left"><h1 class="text6"> Languages/Web Applications </h1></div></td>          
	 <td width="192"><div align="left"><h1 class="text6"><a href=project_management.php>Management</a></h1></div></td>        
	 </tr>        
	 <tr>          <td colspan="3"><hr height="1px" color="#CCCCCC" width="550px" title="" align="center"/></td>        </tr>        
	 <tr> 
	          <td rowspan="" align="left" valign="top">
	 <div id="div_course" class="courses_bg_tab">              
	 <ul>
	  <li><a href="Android_App">Android App</a></li>                
	 <li><a href="iPhone_App">iPhone App</a></li>
	 <li><a href="Html5">HTML5/JQUERY</a></li> 
	 <li><a href="Android_Game">Android Game</a></li>              
	 <li><a href="Android_Testing">Android Testing</a></li>
	 </ul>
	  <h1 class="text6"> Specialist Courses </h1>
      <ul>         
	 <li><a href="Ethical_Hacking">Ethical Hacking</a></li>
	 <li><a href="Embedded_System">Embedded System</a></li>
	 <li><a href="coursesdetail.php?a=67">Linux Device Driver</a></li>	 
	  <li><a href="Linux">Linux - RHCSA/RHCE/Shell Scripting</a></li>                
	 <li><a href="Oracle">Oracle</a></li>
	 <li><a href="CCNA">CCNA</a></li>                         
	 <li><a href="Software_Testing">Software Testing Concepts</a></li>
	 <li><a href="coursesdetail.php?a=151">Automated Testing</a></li>	 

	  </ul>                            
	 
	                        
	 </div>
	 </td>
	 
	           
	 <td align="left" valign="top">
	 <div id="Div_course" class="courses_bg_tab">              
	 <ul>
	 <li><a href="Core_Java">Java/J2EE</a></li>                              
	 <li><a href=".NET">.Net</a></li>                
	 
	 <li><a href="PHP_MySQL">PHP &amp; MySQL</a></li> 
	 <li><a href="C">C</a></li>                
	 <li><a href="C_Plus_12th">C++ (12<sup>th</sup> )</a></li>
	 <li><a href="C_Plus_B.Tech">C++ ( B.Tech )</a></li>
	<li><a href="coursesdetail.php?a=103">Data Structuress</a></li>                
	 <li><a href="Web_site_Design">Website Development</a></li>
	 <li><a href="Graphic_Design">Graphic Design</a></li>                 
	             
	 </ul>                           
	 <h1 class="text6">Other Courses </h1>
	 <ul>
	 <li><a href="Computer_Fundamentals">Computer basics</a></li>
	 <li><a href="TallyERP.9">TallyERP.9</a></li>                
	 <li><a href="Advance_Excel">Advance Excel</a></li>                
	 <li><a href="DOEACC">DOEACC</a></li> 
 	 <li><a href="SEO">SEO</a></li>
                             
	 
	 </ul>
	 </div>
	 </td> 
	 
	         
	<td valign="top" align="left">
	<div id="Div_course" class="courses_bg_tab">              
	<ul>                
	<li><a href="MS_Project"> MS Project</a></li>                
	<li><a href="PMP_Certification">PMP Certification</a></li>                
	<li><a href="Project_Management">Project Management</a></li>              
	</ul>              
	<ul>                
	<h1 class="text6"> <a href=soft_skill.php>Soft Skill </a></h1>
	<li><a href="coursesdetail.php?a=201">English Communication Course</a></li>                
	<li><a href="coursesdetail.php?a=202">Personality Development</a></li>
	<li><a href="coursesdetail.php?a=206">Succeed in Job Interview</a></li>

	<h1 class="text6"> HR Corporate</h1>
	<li><a href="coursesdetail.php?a=203">Performance Management</a></li>                
	<li><a href="coursesdetail.php?a=204">Tech Lead to Team Lead</a></li>                
	<li><a href="coursesdetail.php?a=205">Time Management</a></li>             
	<li><a href="coursesdetail.php?a=207">Execution Key to Success</a></li>                
	<li><a href="coursesdetail.php?a=208">Managing Mentoring Process</a></li>                
	<li><a href="coursesdetail.php?a=209">Business Commmunication</a></li>                
	<li><a href="coursesdetail.php?a=210">On-boarding/Induction programs</a></li>                
	</ul>            
	</div>           
	</td>  
	</tr>
	<tr>
	  <td style=" padding-top:10px" colspan="3">&nbsp;</td>
	</tr>
	<tr>          
	  <td colspan="3" valign="center" width="570">
	  <div id="middlebox">              
		  <div class="middlebox-hdbg">                
			  <h2>Placements</h2>              
		  </div>  
		  <div style=" font-size:14px; width:95%; margin:auto; ">            
			 <br /> <br /> We provide placement assistance to all our students. We also publish many placmenent opportunities on our <a href="http://www.facebook.com/sisofttech" target="_blank">facebook page</a> as well. Follow us to know more about placement opportunities. We assist you in selecting the right course to ensure better placement opportunities. 
		  	<br />	                
	  		</div>            
	  </div>
	  </td>        
	  </tr>      

	<tr>
	  <td style=" padding-top:10px" colspan="3">&nbsp;</td>
	</tr>

     
	 <tr>          
	  <td colspan="3" valign="top" width="570">
	  <div id="middlebox">              
	  <div class="middlebox-hdbg">                
	  <h2>Testimonials</h2>              
	  </div>              
	  <div class="testimonials-inner" align="justify">                
	  <div class="popup-msg">" I was looking for some courses for working professionals as the courses offered by other institutes are mainly designed for college students. In Sisoft, they specially designed the course curriculum which meets my requirements, also the faculty is having 19+ years of industry experience this really help as they understand the work culture of an IT industry in and out which really adds value."</div>                
	  <div class="mentor-img">                  
	  <div class="mentor-text"><span><b>Anurag Srivastav, </b>TPM, Amazon <br />
	  <a href="https://www.linkedin.com/profile/view?id=16416940">LinkedIn Profile</a></span>
	  <br /><br />                  </div>               
	  </div>                
	  <div class="more-btn"><a href="#"></a></div>              
	  </div>            
	  </div>
	  </td>        
	  </tr>   
	 
	  </table>
</td>    
	  <td width="233" valign="top">
	  <div id="right-column">        
	  <div class="rightbox">          
	  <div class="rightbox-hdbg">            
	  <h2>ClassRoom Trainings</h2>          
	  </div>          
	            
	  <div class="register" style="background:url(images/Register-bg.png) no-repeat;margin-top:10px;"> 
	  <a href="reg_sis.php">Register For Demo Class</a> 
	  </div>          
	  <div>            
	  <div class="border-baches">              
	  <div class="register" style="background:url(images/Register-bg.png) no-repeat;"> <a href="nextbatches.php">Up Coming Batches </a></div>
	  <marquee direction="up" height="200px;" align="middle" behavior="alternate" width="200px;" scrolldelay="450" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 5, 0);">              
	   <table width="100%" cellpadding="0px" cellspacing="5px;">
	  <?php                  
	  while($row=mysql_fetch_array($resultset)) { ?>
	   <tr>
	   <td style="width:33%;font-size:12px;"><strong><?php echo $row["start_date"];?></strong></td>
	                        
	 <td style="width:36%;font-size:12px;"><strong> <?php echo $row["course_name"];?></strong></td>                     
	                        
	 <td style="width:27%;font-size:12px;"><strong> <?php echo $row["duration"];?></strong></td>
	  
	   </tr>
	
	
	            
	  <?php }  ?> 
	  </table>                     
	          </marquee>
	  </div>          
	  </div>        
	  </div>      
	  </div>      
	  <div id="right-column">        <!--login area start-->        <!--login area end-->        
	  <?php          
	  if (!empty($errormsg)) {              
	  echo '<div class="loginerrors">';              
	  formerr($errormsg);              
	  echo '</div>';			            
	  }		  
	  ?>      
	  </div>      
	  <table width="220" height="140" border="0" cellpadding="0" cellspacing="0">        
	  
	   <tr>          
	<td colspan="" align="left" style="padding-top:5px;">
	  <div class="border-baches">            

	  <div class="register" style="background:url(images/Register-bg.png) no-repeat;"> <a href="distance_education.php">Distance Education</a></div>		  
	
	<a href="distance_education.php"><img src="images/courses.JPG" width="220px" height="60px"  style="border:none;" /></a> 
        </div>
	</td>       
	 </tr>



	 <tr>          
	  <td width="220" valign="top" style="padding-top:5px">
	  <div class="border-baches">            
	  <div class="register" style="background:url(images/Register-bg.png) no-repeat;"> <a href="">Our Partners</a></div>		  
	  <marquee direction="up" height="140px;" align="middle" class="text-9" loop="-1" width="200px;" scrolldelay="250" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 5, 0);" style="cursor:pointer;">		  
	  <a href="http://www.sunmitra.com/" target="_blank"> <img src="images/sunmitra.png" border="0" /></a>			  		  		  
	   <br />		  <br />		  <br />
	  <a href="http://www.pmstudy.com/" target="_blank"> <img src="images/PMstudy.png" border="0" /></a>			  		  		  
	   <br />		  <br />		  <br />		  

	  <a href="http://www.scrumstudy.com/" target="_blank"> <img src="images/SCRUMstudy.png" border="0" /></a>			  		  		  
	   <br />		  <br />		  <br />		  

	  <a href="http://www.scrumstudy.com/" target="_blank"> <img src="images/SCRUMstudy_ATP.png" border="0" /></a>			  		  		  
	   <br />		  <br />		  <br />		  
		  
	   <a href="http://www.pcti.pctiltd.com/" target="_blank"><img src="images/pcti-logo.jpg" border="0" /></a>
	   <br />		  <br />		  <br />
	   <a href="http://www.bytecode.in/" target="_blank"><img src="images/bytecode_logo.png" border="0" /></a>

<br />		  <br />		  <br />

	   <a href="http://www.skillineers.com/" target="_blank"><img src="images/skillineers_logo.png" border="0" /></a>		  
	   </marquee>		  
	   </div>
	   </td>        
	   </tr>     
           
	 <tr>          
	  <td width="220" valign="top" style="padding-top:5px">
	  <div class="border-baches">            
	  <div class="register" style="background:url(images/Register-bg.png) no-repeat;"> <a href="">Customers</a></div>		  
	  <marquee direction="up" height="140px;" align="middle" class="text-9" loop="-1" width="200px;" scrolldelay="250" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 5, 0);" style="cursor:pointer;">		  
	  <img src="images/DRDO.png" border="0" />			  		  		  
	   <br />		  <br />		  <br />
	  <img src="images/CDAC.png" border="0" />			  		  		  
	   <br />		  <br />		  <br />
	  <img src="images/ventureWeb.png" border="0" />			  		  		  
	   <br />		  <br />		  <br />
	   </marquee>		  
	   </div>
	   </td>        
	   </tr>     


	   </table>
	</td>    
 </tr>

</table>
<div style="clear:both;"></div>

<div id="orange-footer">
   <div class="orange-footer">	  
      <?php include 'footer.php'; ?>  
   </div>
</div>   
	</div>
</div>		
  </body>
</html>