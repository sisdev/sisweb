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
	$page_title= "Soft Skills training on Communication, Personality Development - Indirapuram, Ghaziabad, Noida, Delhi" ;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $page_title; ?></title>
<meta name="description" content="<?php echo $page_desc; ?>" />
<meta name="keywords" content="English Commuunication Training" />
<meta name="keywords" content="Personality Development Training" />
<meta name="keywords" content="Succeed In Interview tips" />
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
       
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
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
       
       <!-- lonin-->
  
       
<!--heading-->
<div class="container-fluid" style="background:#5bc0de; color:#fff">
<div class="container"><h2 style="padding:15px">Course Details</h2>
</div>
<div class="pull-right" style="width:200px; height:80px;  margin-top:-6% ;	background: url('images/soft-skills.jpg');
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

<li ><a href="training_softskills.php?a=20">Soft Skill Training</a>
<ul>



<li <?php if($_GET["a"]==201) { ?>  style= "background-color: black";  <?php } ?>><a href="English_Communication">English Communication Course</a></li> 
<li <?php if($_GET["a"]==202) { ?>  style= "background-color: black";  <?php } ?>><a href="Personality_Development"> Personality Development</a></li>
<li <?php if($_GET["a"]==206) { ?>  style= "background-color: black";  <?php } ?>><a href="Succeed_In_Interviews">Succeed in job Interview</a></li>
<li <?php if($_GET["a"]==205) { ?>  style= "background-color: black";  <?php } ?>><a href="Time_Management">Time Management</a></li>             
<li <?php if($_GET["a"]==209) { ?>  style= "background-color: black";  <?php } ?>><a href="Business_Communication">Business Commmunication</a></li>                
<li <?php if($_GET["a"]==23) { ?>  style= "background-color: black";  <?php } ?>><a href="Organizational_Behaviour">Organization Behaviour</a></li>                
<li <?php if($_GET["a"]==24) { ?>  style= "background-color: black";  <?php } ?>><a href="College_to_Corporate">College To Corporate</a></li>                


</ul>

 

</ul>

  <a href="training_it_courses.php?a=1" class="btn btn-primary btn-block" role="button">IT Technologies</a>      
  <a href="training_project_mgnt.php?a=30" class="btn btn-primary btn-block" role="button">Project Management</a>      
  <a href="training_smac.php" class="btn btn-primary btn-block" role="button">SMAC Technologies</a>      
</div><!--side-menu-->
<form id="left-menu" action="#" method="post">
          <select onChange="javascript:window.location=''+this.value+''">
          	 <option value="">Course Details</option>
             <option value="training_softskills.php?a=16">iPhone</option>
			 <option value="training_softskills.php?a=17">Android App</option>
			 <option value="training_softskills.php?a=66">Android Game</option>
			 <option value="training_softskills.php?a=65">Android Testing</option>
			 <option value="training_softskills.php?a=60">Windows</option>
			 <option value="training_softskills.php?a=61">HTML5</option>
             
             <option value="training_softskills.php?a=63">Ethical Hacking</option>
			 <option valuef="training_softskills.php?a=34">Embedded System</option>
			 <option value="training_softskills.php?a=67">Linux Device Drivers</option>
			 <option value="training_softskills.php?a=1" >Computer Fundamentals</option>
			 <option value="training_softskills.php?a=70">TallyERP.9</option>
			 <option value="training_softskills.php?a=33">Advance Excel</option>
			 <option value="training_softskills.php?a=2">DOEACC</option>
			 <option value="training_softskills.php?a=8">Graphics Design</option>
			 <option value="training_softskills.php?a=36">Web Site Design</option>
			 <option value="training_softskills.php?a=32">SEO</option>
			 <option value="training_softskills.php?a=3">C</option>
			 <option value="training_softskills.php?a=4">C++</option>
			 <option value="training_softskills.php?a=400">C++( B.Tech )</option>
			 <option value="training_softskills.php?a=5">Core Java</option>
			 <option value="training_softskills.php?a=38">Advance Java/J2EE</option>
			 <option value="training_softskills.php?a=6">.Net</option>
			 <option value="training_softskills.php?a=7">PHP &amp; MySQL</option>
			 <option value="training_softskills.php?a=35">Linux</option>
			 <option value="training_softskills.php?a=9">CCNA</option>
			 <option value="training_softskills.php?a=12">Oracle</option>
			 <option value="training_softskills.php?a=13">Siebel</option>
			 <option value="training_softskills.php?a=14">SAP</option>
		     <option value="training_softskills.php?a=15">Software Testing</option>
             
             <option value="training_softskills.php?a=30">Project Managment</option>
             <option value="training_softskills.php?a=20">Soft Skill Training</option>
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