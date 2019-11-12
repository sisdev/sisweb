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
	$page_title= "Social, Mobility, Analytics and Cloud Computing Training - Indirapuram, Ghaziabad, Noida, Delhi" ;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $page_title; ?> </title>
<meta name="description" content="<?php echo $page_desc; ?>" />
<meta name="keywords" content="Training on Mobile Apps Development Using Android" />
<meta name="keywords" content="Training on Mobile Apps Development Using Cordova, PhoneGap" />
<meta name="keywords" content="Training on Mobile Apps Development Using iOS/iPhone/iPad" />
<meta name="keywords" content="Training, Big Data, Hadoop, Data Analytics and Cloud Computing" />
<meta name="keywords" content="Training on IOT - Internet of Things" />

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
       
       <!-- login-->
  
       
<!--heading-->
<div class="container-fluid" style="background:#5bc0de; color:#fff">
<div class="container"><h2 style="padding:15px">Course Details</h2>
</div>
<div class="pull-right" style="width:200px; height:80px;  margin-top:-6% ;	background: url('images/img_smac.jpg');
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
<li><a href="javascript:void(0)">SMAC (Social, Mobility, Analytics, Cloud) </a>
<ul>
<li <?php if($_GET["a"]==80) { ?>  style= "background-color: black;"  <?php } ?>><a href="data-analytics">Data Analytics</a></li>
<li <?php if($_GET["a"]==81) { ?>  style= "background-color: black;"  <?php } ?>><a href="Big_Data">Big Data - Hadoop</a></li>
<li <?php if($_GET["a"]==85) { ?>  style= "background-color: black;"  <?php } ?>><a href="Cloud_Computing">Cloud Computing</a></li>
<li <?php if($_GET["a"]==90) { ?>  style= "background-color: black;"  <?php } ?>><a href="block-chain">Block Chain</a></li>

<li <?php if($_GET["a"]==16) { ?>  style= "background-color: black;"  <?php } ?> > <a  href="iOS_App">iOS/iPhone</a></li>
<li <?php if($_GET["a"]==17) { ?>  style= "background-color: black;"  <?php } ?>><a href="Android_App">Android App</a></li>
<li <?php if($_GET["a"]==39) { ?>  style= "background-color: black;"  <?php } ?>><a href="Cordova_PhoneGap">Cordova/Phonegap</a></li>

<li <?php if($_GET["a"]==66) { ?>  style= "background-color: black;"  <?php } ?> > <a href="Android_Game">Android Game</a></li>
<li <?php if($_GET["a"]==65) { ?>  style= "background-color: black;"  <?php } ?>><a href="Android_Testing">Android Testing</a></li>
<li <?php if($_GET["a"]==60) { ?>  style= "background-color: black;"  <?php } ?>><a href="Windows_Mobile">Windows</a></li>


</ul>
</li>
</ul>

  <a href="training_it_courses.php?a=1" class="btn btn-primary btn-block" role="button">IT Technologies</a>      
  <a href="training_project_mgnt.php?a=30" class="btn btn-primary btn-block" role="button">Project Management</a>      
  <a href="training_softskills.php?a=20" class="btn btn-primary btn-block" role="button">Soft skills</a>      

</div><!--side-menu-->
<form id="left-menu" action="#" method="post">
          <select onChange="javascript:window.location=''+this.value+''">
          	 <option value="">Course Details</option>
 			 <option value="training_smac.php?a=80">Data Analytics</option>
			 <option value="training_smac.php?a=81">Big Data - Hadoop</option>
			 <option value="training_smac.php?a=85">Cloud Computing</option>
			 <option value="training_smac.php?a=90">Block Chain</option>

             <option value="training_smac.php?a=16">iOS/iPhone</option>
			 <option value="training_smac.php?a=17">Android App</option>
             <option value="training_smac.php?a=39">Cordova/Phonegap</option>
			 <option value="training_smac.php?a=66">Android Game</option>
			 <option value="training_smac.php?a=65">Android Testing</option>
			 <option value="training_smac.php?a=60">Windows</option>

             
             <option value="training_smac.php?a=63">Ethical Hacking</option>
			 <option value="training_smac.php?a=34">Embedded System</option>
			 <option value="training_smac.php?a=67">Linux Device Drivers</option>
			 <option value="training_smac.php?a=1" >Computer Fundamentals</option>
			 <option value="training_smac.php?a=70">TallyERP.9</option>
			 <option value="training_smac.php?a=33">Advance Excel</option>
			 <option value="training_smac.php?a=2">DOEACC</option>
			 <option value="training_smac.php?a=8">Graphics Design</option>
			 <option value="training_smac.php?a=36">Web Site Design</option>
			 <option value="training_smac.php?a=32">SEO</option>
			 <option value="training_smac.php?a=3">C</option>
			 <option value="training_smac.php?a=4">C++</option>
			 <option value="training_smac.php?a=400">C++( B.Tech )</option>
			 <option value="training_smac.php?a=5">Core Java</option>
			 <option value="training_smac.php?a=38">Advance Java/J2EE</option>
			 <option value="training_smac.php?a=6">.Net</option>
			 <option value="training_smac.php?a=7">PHP &amp; MySQL</option>
			 <option value="training_smac.php?a=35">Linux</option>
			 <option value="training_smac.php?a=9">CCNA</option>
			 <option value="training_smac.php?a=12">Oracle</option>
			 <option value="training_smac.php?a=13">Siebel</option>
			 <option value="training_smac.php?a=14">SAP</option>
		         <option value="training_smac.php?a=15">Software Testing</option>
             
                         <option value="training_smac.php?a=30">Project Managment</option>
                         <option value="training_smac.php?a=20">Soft Skill Training</option>
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
	include 'training-smac-home.html';
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