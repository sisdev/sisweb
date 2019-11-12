<?php

error_reporting(0);

session_start();

 include("db/dbi.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <title>Register Your Request @ Sisoft Learning</title>
<meta name="description" content="Register Your Request @ Sisoft Learning:Computer training institute in Indirapuram, Ghaziabad."/>
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
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
        <link href="js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
        <link href="css/style.css"  rel='stylesheet' type='text/css'>
		<link href="css/slide.css" rel="stylesheet" type="text/css">
        <link href="css/style-costum.css" rel="stylesheet" type="text/css">
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
<div class="container"><h2 style="padding:15px">Register Your Request</h2></div>
</div><!--heading-->       
                  
<div class="container-fluid well">   
      <div class="container">     
            <div class="row">         
            <div class="col-lg-3">		
            <aside class="left-sidebar">		
			Register your request	 
            </aside>
            </div><!--col-4-->
            
            <div class="col-lg-9">
		 
  <?php 
if(isset($_POST['Submit'])){ 
	/*  $captcha= $_POST['captcha'];
     $key=substr($_SESSION['key'],0,5);
        if(($captcha == '') || ($captcha != $key))
       {
         echo"<script>alert('please fill the correct captcha value');window.location='reg_sis.php';</script>";
        exit; 
       }
*/
     $ip =$_SERVER['REMOTE_ADDR'];
	 $dtm      = date("Y-m-d H:i:s");
   	 $from     = "info@sisoft.in";
	 $subject  = "Register:-". $_REQUEST["fname"];
	 $serv_category = $_REQUEST["category"];
     $serv_desc = $_REQUEST["serv_desc"];
	 $qry_source="info"; 
	 $center = $_REQUEST["center"];
     $name = $_REQUEST["fname"];
     $email = $_REQUEST["email"];
     $phone = $_REQUEST["mobile"];
     $address = $_REQUEST["address"];
     $headers  = "From:". $from."\r\n";
     $headers .= "MIME-Version: 1.0". "\r\n";
     $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
     $message = '<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head><body>';
     $message .= '<table  style="background-color:#EEE; font-family:Verdana, Geneva, sans-serif;" align="center" >';
     $message .= "<tr><td><strong>Training Center</strong> </td><td>" .$center . "</td></tr>";
     $message .= '<tr><td width="250"><strong>Service Category</strong> </td><td>'.$serv_category.'</td></tr>';
     $message .= "<tr><td><strong>Service Description</strong> </td><td>" .$serv_desc . "</td></tr>";
	 $message .= "<tr><td><strong>Name</strong> </td><td>" . $name . "</td></tr>";
     $message .= "<tr><td><strong>Email</strong> </td><td>" . $email . "</td></tr>";
     $message .= "<tr><td><strong>Phone</strong> </td><td>" . $phone . "</td></tr>";
     $message .= "<tr><td><strong>Address</strong> </td><td>" .$address . "</td></tr>";
     $message .= "<tr><td><strong>IP Address</strong> </td><td>" .$ip . "</td></tr>";
	 $message .= "<tr><td><strong>date</strong> </td><td>" .$dtm . "</td></tr>";
     $message .= "</table>";
     $message .= "</body></html>";
	 mail('trng@sisoft.in',$subject,$message,$headers);
     mail('info@sisoft.in',$subject,$message,$headers);
     mail('vijayrastogi@yahoo.com',$subject,$message,$headers);
	  
  $std_subject="Greetings from Sisoft Learning";
     $std_headers  = "From:". $from."\r\n";
	 $std_headers .= "MIME-Version: 1.0". "\r\n";
     $std_headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
	 $std_message = '<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head><body>';
     $std_message .= '<table  style="background-color:#EEE; font-family:Verdana, Geneva, sans-serif;" align="center" >'; 
	 $std_message.="<tr><td>Hello ".$name.",</td><tr> <tr><td>Thanks for registering your request with us. Your request is successfully logged and will be responded by Sisoft team soon. </td></tr>";

$std_message.="<tr><td>Thanks </td></tr>" ;
$std_message.="<tr><td>Team-Sisoft Learning<BR> SRC E7-E8, Shipra Riviera,
Gyan Khand-3,<BR>Indirapuram, Ghaziabad - 201014 </td></tr> <tr><td>Phone Numbers:9540-283-283,
9999-283-283</td></tr>";
	 $std_message.="</table>";

	 $std_message.="</body></html>";
  
mail($email,$std_subject,$std_message,$std_headers);

$sql="INSERT INTO trng_query_log(qry_type,qry_source,center,name,address,emailId,phone_no,qry_details,req_dtm,ip_add,del_flag)



      VALUES('".$serv_category."','".$qry_source."','".$center."','".$name."','".$address."','".$email."','".$phone."','".$serv_desc."','".$dtm."','".$ip."',DEFAULT)";

	  
	mysqli_query($conn, $sql);  
	  
?>
<div class='alert alert-success fade in'><a href='#' id='close_me' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Thank you <?php echo $name ?> !</strong>You have successfully registerd for <?php echo $serv_category; ?>. Our executive will call you within  24 hrs to get more information and assist you further on this.</div>

<?php	 
}
?>


        <form id="reg_form" class="form-horizontal" name="reg_form" method="post"  style="margin-left:10px">


		 <div class="form-group">
  <label  class="col-md-3 control-label" for="applyfor">Select Training Center:</label>
  <div class="col-md-5">
    <select id="applyfor" name="center" class="form-control">
	 <option value="indirapuram" selected>Indirapuram</option>
      <option value="gurgoan">Online</option>
      <option value="north-delhi">North Delhi</option>
       
     
    </select>
  </div>
</div>
	
 <div class="form-group">
  <label  class="col-md-3 control-label" for="applyfor">Register for:</label>
  <div class="col-md-5">
    <select id="applyfor" name="category" class="form-control">
     <option value="Demo Class">Demo Class</option>
	 <option value="Workshop/Seminar" selected>Seminar:Blockchain</option>	
	 <option value="Corp Training">Corporate Training</option>	
     <option value="Career Counselling">Career counselling</option>	
     <option value="Tally ERP9">Tally ERP9</option>	
     <option value="redhat">redhat Services</option>	
    </select>
  </div>
</div>	
		
	

<div class="form-group">
  <label class="col-md-3 control-label"  for="mob">Course Details:</label>  
  <div class="col-md-5">
  <input type="text" id="ser" name="serv_desc"   class="form-control input-md" placeholder="Android, MS Project, English Comm etc"  value="Blockchain" required="">
    
  </div>
</div>	

<div class="form-group">
  <label class="col-md-3 control-label" for="name">Name:</label>  
  <div class="col-md-5">
  <input id="name" name="fname"  maxlength="32"  class="form-control input-md" required="" type="text">
    
  </div>
</div>
  
<div class="form-group">
  <label class="col-md-3 control-label" for="mob">Mobile:</label>  
  <div class="col-md-5">
  <input id="mob" name="mobile"  maxlength="12"  class="form-control input-md" required="" type="text">
    
  </div>
</div>
		
		
<div class="form-group">
  <label class="col-md-3 control-label" for="email">Email:</label>  
  <div class="col-md-5">
  <input id="email" name="email"  maxlength="128"  class="form-control input-md" required="" type="email">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-3 control-label"  for="add">Address:</label>  
  <div class="col-md-5">
  <textarea id="add" name="address"   rows="1" class="form-control input-md" required=""></textarea>
    
  </div>
</div>	
		
	
	
	<div class="form-group">
  <label class="col-md-3 control-label" for="cap">Word verification:</label>  
  <div class="col-md-5">
  <input id="cap" name="captcha"  maxlength="20"  class="form-control input-md"  type="text" style="background-position: right; background-image:url('PHP-CAPTCHA/php_captcha.php'); background-size:20% 100%;
    background-repeat: no-repeat;">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-3 control-label" for="bttn"></label>
  <div class="col-md-5">
    <input type="submit" id="bttn" name="Submit" class="btn btn-primary" value="Apply now">
  </div>
</div>
		<input type="hidden" name="id" value="" />
		<input type="hidden" name="course_name" value="" />
      </form>
</div>
   
</div>
</div>

</div>
                
<?php include("footer.php"); ?>

        <!-- <script src="js/jquery.min.js" type="text/javascript"></script> -->
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/script.js"  type="text/javascript"></script>
		<script src="js/side-menu.js" type="text/javascript"></script>
</body>
</html>