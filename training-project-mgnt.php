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
	$page_title= "Project Management Course Details" ;
}
if (strlen($page_desc)==0)
{
	$page_desc= "Training institute for MS Project, Project Management Certifications, PMP, ITIL, Six Sigma, Prince2, Agile, Scrum- Self Paced, Online, Instructor Led, Corporate" ;
}
if (strlen($page_keywords)==0)
{
	$page_keywords= "Project management training, PMP, MS-Project, Agile-Scrum, Six-Sigma, Prince2, ITIL " ;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $page_title; ?></title>
<meta name="description" content="<?php echo $page_desc; ?>" />
<meta name="keywords" content="<?php echo $page_keywords; ?>" />
<meta name="keywords" content="MS Project Training " />
<meta name="keywords" content="Agile, Scrum, Six Sigma, Prince2, ITIL" />
<meta name="keywords" content="Project management training, PMP, MS Project" />
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
<div class="pull-right" style="width:200px; height:80px;  margin-top:-6% ;	background: url('images/project-mgnt.png');
    background-size: 100% 100%;
    background-repeat: no-repeat;">

   </div>
</div><!--heading-->       
                  
<div class="container-fluid well">   
 
      <div class="container">
      
            <div class="row">
           
            <div class="col-sm-3">
            <aside class="left-sidebar">
      <div class="side-menu">      
<ul>


<li ><a href="training-project-mgnt.php?a=30">Project Managment</a>
<ul>                
	<li <?php if($_GET["a"]==30) { ?>  style= "background-color: black";  <?php } ?>><a href="project-management">Project Management</a></li>
	<li <?php if($_GET["a"]==19) { ?>  style= "background-color: black";  <?php } ?>><a href="ms-project"> MS Project</a></li>                
	<li <?php if($_GET["a"]==18) { ?>  style= "background-color: black";  <?php } ?>><a href="pmp-certification">PMP Certification</a></li>                
	<li <?php if($_GET["a"]==31) { ?>  style= "background-color: black";  <?php } ?>><a href="PMCO">PMCO Certification</a></li>
    <li> <a href="Prince2"> Prince 2 </a></li>
    <li> <a href="ITIL">ITIL </a> </li>
    <li> <a href="agile-scrum">Agile Scrum </a></li>
    <li> <a href="sixsigma-greenbelt">Six Sigma - GB</a> </li>              
</ul>

</ul>
  <a href="training-it-courses.php?a=1" class="btn btn-primary btn-block" role="button">IT Technologies</a>      
  <a href="training-softskills.php?a=201" class="btn btn-primary btn-block" role="button">Soft skills</a>     
  <a href="training-smac.php" class="btn btn-primary btn-block" role="button">SMAC Technologies</a>      
</div><!--side-menu-->
<form id="left-menu" action="#" method="post">
          <select onChange="javascript:window.location=''+this.value+''">
          	 <option value="">Course Details</option>
             <option value="training-project-mgnt.php?a=16">iPhone</option>
			 <option value="training-project-mgnt.php?a=17">Android App</option>
			 <option value="training-project-mgnt.php?a=66">Android Game</option>
			 <option value="training-project-mgnt.php?a=65">Android Testing</option>
			 <option value="training-project-mgnt.php?a=60">Windows</option>
			 <option value="training-project-mgnt.php?a=61">HTML5</option>
			 <option value="training-smac.php?a=80">Big Data</option>
			 <option value="training-smac.php?a=85">Cloud Computing</option> 
             <option value="training-project-mgnt.php?a=63">Ethical Hacking</option>
			 <option value="training-project-mgnt.php?a=34">Embedded System</option>
			 <option value="training-project-mgnt.php?a=67">Linux Device Drivers</option>
			 <option value="training-project-mgnt.php?a=1" >Computer Fundamentals</option>
			 <option value="training-project-mgnt.php?a=70">TallyERP.9</option>
			 <option value="training-project-mgnt.php?a=33">Advance Excel</option>
			 <option value="training-project-mgnt.php?a=2">DOEACC</option>
			 <option value="training-project-mgnt.php?a=8">Graphics Design</option>
			 <option value="training-project-mgnt.php?a=36">Web Site Design</option>
			 <option value="training-project-mgnt.php?a=32">SEO</option>
			 <option value="training-project-mgnt.php?a=3">C</option>
			 <option value="training-project-mgnt.php?a=4">C++</option>
			 <option value="training-project-mgnt.php?a=400">C++( B.Tech )</option>
			 <option value="training-project-mgnt.php?a=5">Core Java</option>
			 <option value="training-project-mgnt.php?a=38">Advance Java/J2EE</option>
			 <option value="training-project-mgnt.php?a=6">.Net</option>
			 <option value="training-project-mgnt.php?a=7">PHP &amp; MySQL</option>
			 <option value="training-project-mgnt.php?a=35">Linux</option>
			 <option value="training-project-mgnt.php?a=9">CCNA</option>
			 <option value="training-project-mgnt.php?a=12">Oracle</option>
			 <option value="training-project-mgnt.php?a=13">Siebel</option>
			 <option value="training-project-mgnt.php?a=14">SAP</option>
		     <option value="training-project-mgnt.php?a=15">Software Testing</option>           
             <option value="training-project-mgnt.php?a=30">Project Managment</option>
             <option value="training-project-mgnt.php?a=20">Soft Skill Training</option>
		  </select>
</form> 
            </aside>

            </div><!--col-4-->
            
            <div class="col-sm-9">
		
        <?php
			
if(isset($_GET['a']))
{

$d=$_GET['a'];

$sql="SELECT * FROM courses WHERE id = '$d'";

$result = mysqli_query($conn, $sql);

echo '<table>

<tr>

<td>
<marquee behavior="alternate" onmouseover=stop() onmouseout=start() >
<div class="register" style="background:url(images/Register-bg.png) no-repeat;"> <a class="btn btn-danger" href="reg_sis.php">Register For Demo Class</a> </div>

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
else if(isset($_GET['b']))
	{
	
	echo '<marquee behavior="alternate" onmouseover=stop() onmouseout=start() ><div class="register" style="background:url(images/Register-bg.png) no-repeat; margin-bottom:10px;"> 
	<a class="btn btn-danger" href="reg_sis.php">Register For Demo Class</a> </div></marquee>';
	 //$b = $_GET['b'] ;
	 
	//include 'scrum_and_agile.php' ;
	//include("Agile_Mainpage.php");
	$get=$_GET['b'];
	switch($get)
	{
		case 000:
		require("pmcourses/agile_mainpage.php");
		break;
		
		case 111:
		include("pmcourses/agile-scrum-developer-certified.php");
		break;
		
		case 222:
		include("pmcourses/agile-scrum-master-certified.php");
		break;
		
		case 333:
		include("pmcourses/agile-scrum-product-owner-certified.php");
		break;
		
		case 444:
		include("pmcourses/agile-expert-certified.php");
		break;
		
		case 555:
		include("pmcourses/agile-expert-scrum-master.php");
		break;
		
		case 4004:
		include("pmcourses/prince2-foundation.php");
		break;
		
		case 4005:
		include("pmcourses/prince2-practitioner.php");
		break;
		
		case 4003:
		include("pmcourses/prince2-benefits.php");
		break;
		
		case 4001:
		include("pmcourses/prince2-methodology-and-structure.php");
		break;
		
		case 4002:
		include("pmcourses/prince2-why.php");
		break;
		
		case 4006:
		include("pmcourses/prince2-combined-foundation-practitioner.php");
		break;
		
		case 5004:
		include("pmcourses/itil_foundation.php");
		break;
		
		case 5003:
		include("pmcourses/itil_course_outline.php");
		break;
		
		case '5002':
		include("pmcourses/itil_course_material.php");
		break;
		case '5001':
		include("pmcourses/itil_about.php");
		break;
		case '6001':
		include("pmcourses/six_sigma_what_is.php");
		break;
		case '6008':
		include("pmcourses/six-sigma-lean-black-belt.php");
		break;
		case '6007':
		include("pmcourses/six_sigma_black_belt.php");
		break;
		case '6006':
		include("pmcourses/six_sigma_green_belt.php");
		break;
		case '6003':
		include("pmcourses/six_sigma_methodologies.php");
		break;
		case '6005':
		include("pmcourses/six_sigma_yellow_belt.php");
		break;
		case '6004':
		include("pmcourses/six_sigma_vs_traditional_qualities.php");
		break;
		case '6002':
		include("pmcourses/six_sigma_why_get_certified.php");
		break;
}

}	
	
else
   {
	include 'project_management_home.html';
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