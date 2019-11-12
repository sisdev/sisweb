<!DOCTYPE html>
<html lang="en">
<head>
        <title>Course Details</title>
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

<?php 
 @$_GET["a"];
 ?>

<?php  
   include("db/dbi.php");
?>    
<body>

     
        
        <?php 
	   
	   include("top-header.php");
	   
	   ?>
       <?php include('login_reg.php'); ?>
       
       <!-- lonin-->
  
       
<!--heading-->
<div class="container-fluid" style="background:#5bc0de; color:#fff">
<div class="container"><h2 style="padding:15px">Course Details</h2>
</div>
<div class="pull-right" style="margin-top:-6%;">
<?php if($_GET["a"]==16 || $_GET["a"]==17 || $_GET["a"]==66 || $_GET["a"]==65 || $_GET["a"]==60 || $_GET["a"]==61) { ?>

<img src="images/img_tech.jpg" width="200" class="img-responsive"></img>

<?php } ?>
<?php if($_GET["a"]==63 || $_GET["a"]==34 || $_GET["a"]==67 || $_GET["a"]==1 || $_GET["a"]==70 || $_GET["a"]==33) { ?>
<img src="images/img_comp.jpg" width="200" class="img-responsive"></img>
<?php } ?>

<?php if($_GET["a"]==30)  { ?>
<img src="images/img_project.jpg" width="200" class="img-responsive"></img>
<?php } ?>
<?php if($_GET["a"]==201)  { ?>
<img src="images/img_soft.png" width="200" class="img-responsive"></img>
<?php } ?>
</div>
</div><!--heading-->       
                  
<div class="container-fluid well">   
 
      <div class="container">
      
            <div class="row">
           
            <div class="col-lg-3">
            <aside class="left-sidebar">
      <div class="side-menu">      
<ul>
<li><a href="javascript:void(0)">SMAC (Social, Mobility, Analytics, Cloud) </a>
<ul>
<li <?php if($_GET["a"]==16) { ?>  style= "background-color: black";  <?php } ?> > <a  href="coursesdetail.php?a=16">iPhone</a></li>
<li <?php if($_GET["a"]==17) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=17">Android App</a></li>
<li <?php if($_GET["a"]==66) { ?>  style= "background-color: black";  <?php } ?> > <a href="coursesdetail.php?a=66">Android Game</a></li>
<li <?php if($_GET["a"]==65) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=65">Android Testing</a></li>
<li <?php if($_GET["a"]==60) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=60">Windows</a></li>
<li <?php if($_GET["a"]==61) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=61">HTML5</a></li>
</ul>
</li>

<li >
<a href="coursesdetail.php?a=1">IT Technology</a>
<ul>
<li <?php if($_GET["a"]==63) { ?>  style= "background-color: black";  <?php } ?> ><a href="coursesdetail.php?a=63">Ethical Hacking</a></li>
<li <?php if($_GET["a"]==34) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=34">Embedded System</a></li>
<li <?php if($_GET["a"]==67) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=67">Linux Device Drivers</a></li>
<li <?php if($_GET["a"]==1) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=1" >Computer Fundamentals</a></li>
<li <?php if($_GET["a"]==70) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=70">TallyERP.9</a></li>
<li <?php if($_GET["a"]==33) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=33">Advance Excel</a></li>
<li <?php if($_GET["a"]==2) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=2">DOEACC</a></li>
<li <?php if($_GET["a"]==8) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=8">Graphics Design</a></li>
<li <?php if($_GET["a"]==36) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=36">Web Site Design</a></li>
<li <?php if($_GET["a"]==32) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=32">SEO</a></li>
<li <?php if($_GET["a"]==3) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=3">C</a></li>
<li <?php if($_GET["a"]==4) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=4">C++</a></li>
<li <?php if($_GET["a"]==400) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=400">C++( B.Tech )</a></li>
<li <?php if($_GET["a"]==5) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=5">Core Java</a></li>
<li <?php if($_GET["a"]==38) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=38">Advance Java/J2EE</a></li>
<li <?php if($_GET["a"]==6) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=6">.Net</a></li>
<li <?php if($_GET["a"]==7) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=7">PHP &amp; MySQL</a></li>
<li <?php if($_GET["a"]==35) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=35">Linux</a></li>
<li <?php if($_GET["a"]==9) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=9">CCNA</a></li>
<li <?php if($_GET["a"]==12) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=12">Oracle</a></li>
<li <?php if($_GET["a"]==13) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=13">Siebel</a></li>
<li <?php if($_GET["a"]==14) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=14">SAP</a></li>
<li <?php if($_GET["a"]==15) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=15">Software Testing</a></li>
</ul>
</li>

<li ><a href="coursesdetail.php?a=30">Project Managment</a>
<ul>                
	<li <?php if($_GET["a"]==19) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=19"> MS Project</a></li>                
	<li <?php if($_GET["a"]==18) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=18">PMP Certification</a></li>                
	<li><a href="coursesdetail.php?a=30">Project Management</a></li>
        <li > <a href="coursesdetail.php?b=4001"> Prince 2 </a></li>
        <li> <a href="coursesdetail.php?b=5001">ITIL </a> </li>
        <li> <a href="coursesdetail.php?b=000">Agile Scrum </a></li>
        <li> <a href="coursesdetail.php?b=6001">Six Sigma - GB</a> </li>              
</ul>

<li ><a href="coursesdetail.php?a=20">Soft Skill Training</a>
<ul>



<li <?php if($_GET["a"]==201) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=201">English Communication Course</a></li> 
<li <?php if($_GET["a"]==202) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=202"> Personality Development</a></li>
<li <?php if($_GET["a"]==206) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=206">Succeed in job Interview</a></li>
<li <?php if($_GET["a"]==205) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=205">Time Management</a></li>             
<li <?php if($_GET["a"]==209) { ?>  style= "background-color: black";  <?php } ?>><a href="coursesdetail.php?a=209">Business Commmunication</a></li>                


</ul>
</ul>

</div><!--side-menu-->
<form id="left-menu" action="#" method="post">
          <select>
          	 <option value="">Course Details</option>
             <option value="coursesdetail.php?a=16">iPhone</option>
			 <option value="coursesdetail.php?a=17">Android App</option>
			 <option value="coursesdetail.php?a=66">Android Game</option>
			 <option value="coursesdetail.php?a=65">Android Testing</option>
			 <option value="coursesdetail.php?a=60">Windows</option>
			 <option value="coursesdetail.php?a=61">HTML5</option>
             
             <option value="coursesdetail.php?a=63">Ethical Hacking</option>
			 <option valuef="coursesdetail.php?a=34">Embedded System</option>
			 <option value="coursesdetail.php?a=67">Linux Device Drivers</option>
			 <option value="coursesdetail.php?a=1" >Computer Fundamentals</option>
			 <option value="coursesdetail.php?a=70">TallyERP.9</option>
			 <option value="coursesdetail.php?a=33">Advance Excel</option>
			 <option value="coursesdetail.php?a=2">DOEACC</option>
			 <option value="coursesdetail.php?a=8">Graphics Design</option>
			 <option value="coursesdetail.php?a=36">Web Site Design</option>
			 <option value="coursesdetail.php?a=32">SEO</option>
			 <option value="coursesdetail.php?a=3">C</option>
			 <option value="coursesdetail.php?a=4">C++</option>
			 <option value="coursesdetail.php?a=400">C++( B.Tech )</option>
			 <option value="coursesdetail.php?a=5">Core Java</option>
			 <option value="coursesdetail.php?a=38">Advance Java/J2EE</option>
			 <option value="coursesdetail.php?a=6">.Net</option>
			 <option value="coursesdetail.php?a=7">PHP &amp; MySQL</option>
			 <option value="coursesdetail.php?a=35">Linux</option>
			 <option value="coursesdetail.php?a=9">CCNA</option>
			 <option value="coursesdetail.php?a=12">Oracle</option>
			 <option value="coursesdetail.php?a=13">Siebel</option>
			 <option value="coursesdetail.php?a=14">SAP</option>
		     <option value="coursesdetail.php?a=15">Software Testing</option>
             
             <option value="coursesdetail.php?a=30">Project Managment</option>
             <option value="coursesdetail.php?a=20">Soft Skill Training</option>
		  </select>
</form> 
            </aside>

            </div><!--col-4-->
            
            <div class="col-lg-9">
			<?php if($_GET["a"]==30) { ?>
           <div class="container">
		   
		   <img src="images/project-mgnt.png" class="img-responsive" width="800" alt="image not load"></img>
		   
		   </div>
			<?php } ?>
			<?php if($_GET["a"]==1) { ?>
           <div class="container">
		   
		   <img src="images/IT-tech.jpg" class="img-responsive" width="800" alt="image not load"></img>
		   
		   </div>
			<?php } ?>
            
<?php if($_GET["a"]==20) { ?>
           <div class="container">
		   
		   <img src="images/soft-skills.jpg" class="img-responsive" width="800" alt="image not load"></img>
		   
		   </div>
			<?php } ?>

			<?php
			
if(isset($_GET['a']))

{

$d=$_GET['a'];

$sql="SELECT * FROM courses WHERE id = '$d'";

$result = mysqli_query($conn, $sql);

echo '<table>

<tr>

<td>
<marquee behavior="alternate" onmouseover=stop() onmouseout=start() ><div class="register" style="background:url(images/Register-bg.png) no-repeat;"> <a class="btn btn-danger" href="reg_sis.php">Register For Demo Class</a> </div>

</marquee></td>

</tr>';

while($row = mysqli_fetch_array($result))
  {

  echo "<tr>";
  echo "<td>" . $row['content'] . "</td>";
  echo "</tr>";

  }
echo "</table>";
mysqli_close($conn);
}
else{
	include 'Chtml.php';
	}
?>
           
            </div><!--col-8-->
                
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