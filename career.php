<?php
error_reporting(0);
session_start();
include 'db/dbi.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
     <title>Opportunities at Sisoft</title>
     <meta name="description" content="Opportunities at Sisoft|  Training Institute| ERP Consultancy" />
<meta name="keywords" content="Training on iPhone, Android, Embeded Systems, Java, .Net, C/C++" />
<meta name="keywords" content="Computer Training Institute in Delhi, Noida, NCR, Gurgoan,Ghaziabad,Indirapuram" />
<meta name="keywords" content="Training of mobile application development - iPhone, Android, Blackberry, Windows8" />
<meta name="keywords" content="Project management training, PMP, MS Project" />
<meta name="keywords" content="Live Project Training or Summer Project Training" />
<meta name="keywords" content="Embedded Systems Training" />
<meta name="keywords" content="ERP Consultancy" />
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
		$page = 5;
	   include("top-header.php");
	   
	?>
         
	<?php  
		include('login_reg.php');
	?>
  
  
  
  
  
  
  
  
       
<!--heading-->
<div class="container-fluid" style="background:#5bc0de; color:#fff">
<div class="container"><h2 style="padding:15px">Careers</h2></div>
</div><!--heading-->       
  


	
<div class="container-fluid well">   
 
      <div class="container">
      
            <div class="row">
           
            <div class="col-lg-3">
            <aside class="left-sidebar">
    <div class="list-group">

  <a href="career.php?career=1" class="list-group-item <?php if($_GET['career']==1) echo "active"?>" >
    TRAINING & DEVELOPMENT
  </a>
 
  <a href="career.php?career=2" class="list-group-item <?php if($_GET['career']==2) echo "active"?>">OPENINGS @ SISOFT</a>
  <a href="career.php?career=3" class="list-group-item <?php if($_GET['career']==3) echo "active"?>">SUBMIT YOUR RESUME</a>
  <a href="career.php?career=4" class="list-group-item <?php if($_GET['career']==4) echo "active"?>">JOIN AS A TRAINER</a>

</div>
	 
            </aside>

            </div><!--col-4-->
            
            <div class="col-lg-9">
			<?php 
			if($_GET['career']==1)
			{
			?>
           <center><h1>Career</h1></center>
		   <h4><kbd>Sisoft</kbd> believe in the work life balance and ensure a working environment that provides opportunities that demand learning, thinking and innovation. We are an organization which desires to transfer the innovative technological development from academia to industry, and in this process our people have to upgrade their technical skill sets.we have a Knowledge Sharing Process in place, where, various technical and non technical lecture sessions are organized within the organization. These sessions are held based on 
		   the demand and requirement of the members of the Sisoft Technologies<p><p>
		   
		   </h4>
			<?php } ?>
			
			<?php 
			if($_GET['career']==2)
			{
			?>
           <center><h1>Openings @ Sisoft</h1></center>
		   <h4><center>At present we are looking for young talents and experienced professionals to work on. </center><p>
		     <h3>Position- Web developer</h3>
		   <p>
		   > Code - SISoft-wd</br>
> Skills Required JavaScript, Dreamweaver, Photoshop, CSS, PHP</br>
> Experience: 0-1 years</br>
		   </p>
		   
		   <h3> Position - Sale Executive</h3>
		   <p>
		  > Code - SISoft-se</br>
> Skill Required BBA, BCA</br>
> Experience: 0-1 years</br>
		   </p>

		   <h3>Position- Intern</h3>
		   <p>
		   > Code - SISoft-Intern</br>
 	           > Skills- None </br>
                   > Experience: Fresher</br>
                   > Salary: Stipend </br>
                   > Duration: Six Months </br> 
                   > Bond : YES for Six Months</br>

		   </p>

		   
		   </h4>
			<?php } ?>
			
			
			<?php
			if($_GET['career']==3)
			{ ?>
		<h3><center><u>Career @ Sisoft</u></center></h3></br>

		<h3><center><u>Form working suspended. Send your resume on jobs@sisoft.in with subject line as Position Code.</u></center></h3></br>

		<form class="form-horizontal" id="form" name="applyform" method="post" enctype="multipart/form-data">
<fieldset>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name:</label>  
  <div class="col-md-4">
  <input id="name" name="name" onkeypress="return onlyAlphabets(event,this);" maxlength="20" placeholder="xyz" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Email ID:</label>
  <div class="col-md-4">
    <input id="passwordinput" name="email" placeholder="xyz@gmail.com" class="form-control input-md" required="" type="email">
    
  </div>
</div>

<!-- Select Basic -->
 <div class="form-group">
  <label class="col-md-4 control-label" for="applyfor">Interested in:</label>
  <div class="col-md-4">
    <select id="applyfor" name="applyfor" class="form-control">
	 <option value="internship">Internship</option>
      <option value="php">PHP developer</option>
      <option value="android">android developer</option>
      <option value="seo">SEO</option>
     
     
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label"  for="mob">Mobile:</label>  
  <div class="col-md-4">
  <input id="mob" name="mob" onkeypress="return isNumber(event)" maxlength="10" placeholder="9457109062" class="form-control input-md" required="" type="text">
    
  </div>
</div>




<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="resume">Upload Resume</label>
  <div class="col-md-4">
    <input id="resume" name="resume" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="bttn"></label>
  <div class="col-md-4">
    <input type="submit" id="bttn" name="bttn" class="btn btn-primary" value="Apply now">
  </div>
</div>

</fieldset>
</form>
		
			<?php } ?>
			
			<?php
			include("db/dbi.php");
		
			if($_GET['career']==4)
			{ 
 
		?>
		<?php 
		if(isset($_POST['t_bttn']))
		{
		?>
<div class='alert alert-success fade in'><a href='#' id='close_me' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Query succcessfully recieved thank you.</div>
<?php 		
$t_center=$_POST['t_center'];
$t_name=$_POST['t_name'];
$t_email=$_POST['t_email'];
$t_course=$_POST['t_course'];
$t_mob1=$_POST['t_mob1'];
$t_mob2=$_POST['t_mob2'];
$t_addr=$_POST['t_addr'];
$t_profile=$_POST['t_profile'];
$date=date("Y-m-d");
$time=date("H:i:s");
$dtm=$date." ".$time;

mysqli_query($conn, "insert into trainer (tcenter,tname,address,phone1,phone2,emailid,courses,profile,update_dtm) values('$t_center','$t_name','$t_addr','$t_mob1','$t_mob2',
'$t_email','$t_course','$t_profile','$dtm'
)") or die(mysqli_error($conn));


							

                            $message="Greetings from Sisoft!!!!\r\n";

                            $message.="Thanks for registering with us as trainer. We look ahead for beneficial partnership\r\n" ;

							$message.="\r\n Thanks \r\n";

							$message.="\r\n Team Sisoft \r\n";
			                
							$to=$t_email;

							$headers .= 'From: <info@sisoft.in>' . "\r\n";

                            $headers .= 'Cc: info@sisoft.in' . "\r\n";

							$subject = "Sisoft: Trainer Registration Confirmation";

                        // send email

							$sentmail = mail($to, $subject, $message, $headers);


		}
		?>
		<center><h3>JOIN AS A TRAINER</h3></center></br>
		<form class="form-horizontal" id="form" name="applyform" method="post" enctype="multipart/form-data" >
<fieldset>

<!-- Select Basic -->
 <div class="form-group">
  <label  class="col-md-3 control-label" for="applyfor">Select Training Center:</label>
  <div class="col-md-5">
    <select id="applyfor" name="t_center" class="form-control">
		<option value="indirapuram">Indirapuram</option>
		<option value="Online">Online Trainer</option>
     
     
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="name">Name:</label>  
  <div class="col-md-5">
  <input id="name" name="t_name"  maxlength="20" placeholder="xyz" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="passwordinput">Email ID:</label>
  <div class="col-md-5">
    <input id="passwordinput" name="t_email" placeholder="xyz@gmail.com" class="form-control input-md" required="" type="email">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-3 control-label" for="name">Courses:</label>  
  <div class="col-md-5">
  <input id="name" name="t_course"  maxlength="20" placeholder="PMP, Testing" class="form-control input-md" required="" type="text">
    
  </div>
</div>




<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label"  for="mob">Mobile 1:</label>  
  <div class="col-md-5">
  <input id="mob" name="t_mob1"  maxlength="10"  class="form-control input-md" required="" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-3 control-label"  for="mob">Mobile 2:</label>  
  <div class="col-md-5">
  <input id="mob" name="t_mob2"  maxlength="10" class="form-control input-md" required="" type="text">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-3 control-label"  for="mob">Address:</label>  
  <div class="col-md-5">
  <textarea id="mob" name="t_addr"   class="form-control input-md" required=""></textarea>
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-3 control-label"  for="mob">Profile Details:</label>  
  <div class="col-md-5">
  <textarea id="mob" name="t_profile"   class="form-control input-md" required=""></textarea>
    
  </div>
</div>



<!-- Button -->
<div class="form-group">
  <label class="col-md-3 control-label" for="bttn"></label>
  <div class="col-md-5">
    <input type="submit" id="bttn" name="t_bttn" class="btn btn-primary" value="Apply now">
  </div>
</div>

</fieldset>
</form>
		
		
		
		
		
		
		
		
		
		
		
		
			<?PHP } ?>
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