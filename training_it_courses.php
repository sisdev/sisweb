<?php
error_reporting(0);
session_start();
include 'db/dbi.php';

$toc="";
$page_title="";
if(isset($_GET['a']))
{
	$d=$_GET['a'];
	$sql="SELECT * FROM courses WHERE id = '$d'";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_array($result))
	{
		$toc= $row['content'] ;
		$page_title =  $row['page_title'] ;
		$page_desc = $row['page_desc'] ;
		$page_keywords = $row['page_keywords'] ;
	}
	mysqli_close($conn);
}

//echo "Here:".$d.":".$page_title;
if (strlen($page_title)==0)
{
	$page_title= "Training institute  for Programming Languages, Search Engine Optimization, Website Design and development" ;
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $page_title; ?></title>
<meta name="description" content="<?php echo $page_desc; ?>" />
<meta name="keywords" content="<?php echo $page_keywords; ?>" />
<meta name="keywords" content="Computer Training Institute in Delhi, Noida, NCR, Gurgoan,Ghaziabad,Indirapuram" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
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
       
        <link rel="shortcut icon" href="images/icon.png">        
</head>

 
<body>
        
        <?php 
			$page = 4 ;
			include("top-header.php");
	   ?>
       <?php 
			include('login_reg.php'); 
		?>
       
       <!-- login-->
  
       
<!--heading-->
<div class="container-fluid" style="background:#5bc0de; color:#fff">
<div class="container"><h2 style="padding:15px">Course Details</h2>
</div>
<div class="pull-right" style="width:200px; height:80px;  margin-top:-6% ;	background: url('images/IT-tech.jpg');
    background-size: 100% 100%;
    background-repeat: no-repeat;">

   </div>
</div><!--heading-->       
                  
<div class="container-fluid well">   
 
      <div class="container">     
            <div class="row">           
            <div class="col-md-3">
            <aside class="left-sidebar">
      <div class="side-menu">      
<ul>


<li >
<a href="training_it_courses.php?a=1">IT Technology</a>
<ul>
<li <?php if($_GET["a"]==63) { ?>  style= "background-color: black";  <?php } ?> ><a href="Ethical_Hacking">Ethical Hacking</a></li>
<li <?php if($_GET["a"]==34) { ?>  style= "background-color: black";  <?php } ?>><a href="Embedded_System">Embedded System</a></li>
<li <?php if($_GET["a"]==67) { ?>  style= "background-color: black";  <?php } ?>><a href="Linux_Device_Driver">Linux Device Drivers</a></li>
<li <?php if($_GET["a"]==1) { ?>  style= "background-color: black";  <?php } ?>><a href="Computer_Fundamentals" >Computer Fundamentals</a></li>
<li <?php if($_GET["a"]==70) { ?>  style= "background-color: black";  <?php } ?>><a href="TallyERP9">TallyERP.9</a></li>
<li <?php if($_GET["a"]==33) { ?>  style= "background-color: black";  <?php } ?>><a href="Advance_Excel">Advance Excel</a></li>
<li <?php if($_GET["a"]==2) { ?>  style= "background-color: black";  <?php } ?>><a href="DOEACC">DOEACC</a></li>
<li <?php if($_GET["a"]==8) { ?>  style= "background-color: black";  <?php } ?>><a href="Graphics_Design">Graphics Design</a></li>
<li <?php if($_GET["a"]==36) { ?>  style= "background-color: black";  <?php } ?>><a href="Web_Site_Design">Web Site Design</a></li>
<li <?php if($_GET["a"]==32) { ?>  style= "background-color: black";  <?php } ?>><a href="SEO">SEO</a></li>
<li <?php if($_GET["a"]==3) { ?>  style= "background-color: black";  <?php } ?>><a href="C">C</a></li>
<li <?php if($_GET["a"]==4) { ?>  style= "background-color: black";  <?php } ?>><a href="C_Plus_12th">C++ - 12th Std</a></li>
<li <?php if($_GET["a"]==400) { ?>  style= "background-color: black";  <?php } ?>><a href="C_Plus_B_Tech">C++( B.Tech )</a></li>
<li <?php if($_GET["a"]==40) { ?>  style= "background-color: black";  <?php } ?>><a href="Python">Python</a></li>
<li <?php if($_GET["a"]==42) { ?>  style= "background-color: black";  <?php } ?>><a href="training_it_courses.php?a=42">Kotlin</a></li>
<li <?php if($_GET["a"]==5) { ?>  style= "background-color: black";  <?php } ?>><a href="Java_Core">Core Java</a></li>
<li <?php if($_GET["a"]==38) { ?>  style= "background-color: black";  <?php } ?>><a href="Java_J2EE">Advance Java/J2EE</a></li>
<li <?php if($_GET["a"]==6) { ?>  style= "background-color: black";  <?php } ?>><a href=".NET">.Net</a></li>
<li <?php if($_GET["a"]==7) { ?>  style= "background-color: black";  <?php } ?>><a href="PHP_MySQL">PHP &amp; MySQL</a></li>
<li <?php if($_GET["a"]==35) { ?>  style= "background-color: black";  <?php } ?>><a href="Linux">Linux</a></li>
<li <?php if($_GET["a"]==9) { ?>  style= "background-color: black";  <?php } ?>><a href="CCNA">CCNA</a></li>
<li <?php if($_GET["a"]==12) { ?>  style= "background-color: black";  <?php } ?>><a href="Oracle">Oracle</a></li>
<li <?php if($_GET["a"]==13) { ?>  style= "background-color: black";  <?php } ?>><a href="Siebel">Siebel</a></li>
<li <?php if($_GET["a"]==15) { ?>  style= "background-color: black";  <?php } ?>><a href="Software_Testing">Software Testing</a></li>
<li <?php if($_GET["a"]==27) { ?>  style= "background-color: black";  <?php } ?>><a href="selenium">Selenium</a></li>
</ul>
</li>


</ul>

  <a href="training_project_mgnt.php?a=30" class="btn btn-primary btn-block" role="button">Project Management</a>       
  <a href="training_softskills.php?a=20" class="btn btn-primary btn-block" role="button">Soft skills</a>     
  <a href="training_smac.php" class="btn btn-primary btn-block" role="button">SMAC Technologies</a>      
</div><!--side-menu-->
<form id="left-menu" action="#" method="post">
          <select onChange="javascript:window.location=''+this.value+''">
          	 <option value="">Course Details</option>
             <option value="training_it_courses.php?a=16">iPhone</option>
			 <option value="training_it_courses.php?a=17">Android App</option>
			 <option value="training_it_courses.php?a=66">Android Game</option>
			 <option value="training_it_courses.php?a=65">Android Testing</option>
			 <option value="training_it_courses.php?a=60">Windows</option>
			 <option value="training_it_courses.php?a=61">HTML5</option>
             <option value="training_it_courses.php?a=63">Ethical Hacking</option>
			 <option value="training_it_courses.php?a=34">Embedded System</option>
			 <option value="training_it_courses.php?a=67">Linux Device Drivers</option>
			 <option value="training_it_courses.php?a=1" >Computer Fundamentals</option>
			 <option value="training_it_courses.php?a=70">TallyERP.9</option>
			 <option value="training_it_courses.php?a=33">Advance Excel</option>
			 <option value="training_it_courses.php?a=2">DOEACC</option>
			 <option value="training_it_courses.php?a=8">Graphics Design</option>
			 <option value="training_it_courses.php?a=36">Web Site Design</option>
			 <option value="training_it_courses.php?a=32">SEO</option>
			 <option value="training_it_courses.php?a=3">C</option>
			 <option value="training_it_courses.php?a=4">C++</option>
			 <option value="training_it_courses.php?a=400">C++( B.Tech )</option>
  			 <option value="training_it_courses.php?a=40">Python</option>
 			 <option value="training_it_courses.php?a=42">Kotlin</option>
			 <option value="training_it_courses.php?a=5">Core Java</option>
			 <option value="training_it_courses.php?a=38">Advance Java/J2EE</option>
			 <option value="training_it_courses.php?a=6">.Net</option>
			 <option value="training_it_courses.php?a=7">PHP &amp; MySQL</option>
			 <option value="training_it_courses.php?a=35">Linux</option>
			 <option value="training_it_courses.php?a=9">CCNA</option>
			 <option value="training_it_courses.php?a=12">Oracle</option>
			 <option value="training_it_courses.php?a=13">Siebel</option>
			 <option value="training_it_courses.php?a=14">SAP</option>
		     <option value="training_it_courses.php?a=15">Software Testing</option>
             <option value="training_it_courses.php?a=27">Software Testing</option>            
			
             <option value="training_it_courses.php?a=30">Project Managment</option>
             <option value="training_it_courses.php?a=20">Soft Skill Training</option>
		  </select>
</form> 
            </aside>

            </div><!--col-4-->
            
            <div class="col-sm-9">
		
           <div class="container">
		   
		
		   
		   </div>


           <div class="container">
		   
		 
		   
		   </div>
		
            

           <div class="container">
		   
	
		   
		   </div>

<marquee behavior="alternate" onmouseover=stop() onmouseout=start() ><div class="register" style="background:url(images/Register-bg.png) no-repeat;"> <a class="btn btn-danger" href="reg_sis.php">Register For Demo Class</a> </div>

</marquee>
		   

			<?php
			
if(isset($_GET['a']))

{

?>

<table>
 <tr> 
 <td>
 <?php
 
 echo $toc ; 
 ?>
 </td>
  </tr>
</table>
<?php
}
else{
	include 'training-it-courses-home.html';
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