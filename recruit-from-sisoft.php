<!DOCTYPE html>
<html lang="en">
<head>
        <title>Recruit from Sisoft</title>
        <meta name="keywords" content="" />
	<meta name="description" content="" />
        <meta charset="UTF-8">
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
        
		
		
<script>
$(document).ready(function(){
    
    $("#providing_btn").click(function(){
        
		$("#providing_div").show();
		$("#seeking_div").hide();
    });
	
	$("#seeking_btn").click(function(){
        
		$("#providing_div").hide();
		$("#seeking_div").show();
    });
});
</script>
    </head>   
<body>

      
        
        <?php 
	   
	   include("top-header.php");
	   include("db/dbi.php");
	   ?>
      <?php include('login_reg.php'); ?> 
       
       <!-- lonin-->
 
       
<!--heading-->
<div class="container-fluid" style="background:#5bc0de; color:#fff">
<div class="container"><h2 style="padding:15px">Placement @Sisoft</h2></div>
</div><!--heading-->       
                  
<div class="container-fluid well">   
 
      <div class="container">
      
            <div class="row">
           
            <div class="col-lg-3">
            <aside class="left-sidebar">
			<div class="side-menu">      

  <button class="btn btn-primary btn-block" id="seeking_btn">Seeking Placement</button>       
  <button class="btn btn-primary btn-block" id="providing_btn">Providing Placement</button>     
       
</div><!--side-menu-->	 
            </aside>

            </div><!--col-4-->
            
            <div class="col-lg-9" >
	    <?php 
if(isset($_POST['submit']))
{
	?>
<div class='alert alert-success fade in'><a href='#' id='close_me' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Recruitment request succcessfully recieved. Thank you. 

	<?php
$pos_name=$_POST['position'];	
$no_of_pos=$_POST['no_of_pos'];	
$tech=$_POST['tech'];	
$exp=$_POST['exp'];	
$job_details=$_POST['job_details'];	
$comp_name=$_POST['comp_name'];	
$website=$_POST['website'];	
$address=$_POST['address'];	
$phone=$_POST['phone'];	
$email=$_POST['email'];	
$recruiter_name=$_POST['recruiter_name'];	
$date=date("Y-m-d");
$time=date("H:i:s");
$dtm=$date." ".$time;
$ip= $_SERVER['REMOTE_ADDR'];
$query2="insert into job_details(positionName,noposition,technology,experience,jobDetails,recruiterName,companyName,companyweb,address
,phone,email,dateSubmited,requestIp,emailConfirmationStatus, jobStatus) values('$pos_name','$no_of_pos','$tech','$exp','$job_details','$recruiter_name','$comp_name','$website',
'$address','$phone','$email','$dtm','$ip','N','S')";	

//echo $query2 ;

$result=mysqli_query($conn, $query2);



  if($result)

   {

        $id = mysqli_insert_id($conn) ;



		echo "<BR/>Confirmation ID:". $id. "\n";



        $confirm_code=base64_encode($id) ;



//		echo "Confirm Code:". $confirm_code. "\n";

		$to=$email;

        $from = "info@sisoft.in";

        $subject = "Sisoft:Job Submission Confirmation Required";

		$msg = 'Position Name:'. $pos_name ."\n".

		'No Of Positions: ' . $no_of_pos ."\n".

        'Experience:'. $exp ."\n".

        'Job Details:'. $job_details ."\n".

        'Technologies:'. $tech ."\n".

         'Company Name:'. $comp_name ."\n".



          

         'Company Website:'. $website ."\n".

	

         'Phone:'.$phone . "\n" ;

	





// Your message

$message="Greetings from Sisoft!!!!\r\n";

$message.="Click on this link to activate your Submission \r\n";

 $project_url="http://www.sisoft.in/" ;  //HARD CODED VALUE

$message.="\n".$project_url."rct_confirmation.php?passkey=$confirm_code"."\n" ;



$message.="\r\n Job Posting Details \r\n";

$message .=$msg ;


$from_name = "Sisoft HR" ;

$headers .= 'From: <info@sisoft.in>' . "\r\n";

$headers .= 'Cc: info@sisoft.in' . "\r\n";


// send email

$sentmail = mail($to, $subject, $message, $headers);



  }


}


?>

</div>

<div class="col-md-9" id="seeking_div" style="margin-top:-30px;">
<h3 align='center' style="margin-right:30px; font-weight:bold;">Seeking Placement</h3>
<h4>Please Login and View <strong>Job Listing</strong> on <strong>MySisoft</strong>!</h4>
<p style="font-size:16px">Sisoft helps companies to let them Recruit from the sisoft and 
	provide skilled and talented people who are already trained
and aware to the environment of the companies.</p>
<img src="images/placement.jpg " border="0" class="img-responsive img-rounded img-centered image" alt="Placement" style="height:350px; width:700px;">
</div>

<div class="col-md-9" id="providing_div" style="display:none; margin-left:300px; margin-top:-90px;">
<p style="font-size:16px; margin-top:20px;">Sisoft helps companies to let them Recruit from the sisoft and 
	provide skilled and talented people who are already trained
and aware to the environment of the companies.</p>
<h3 align='center' style="font-weight:bold;">Submit Requirement</h3>

<form class="form-horizontal" method="post">
	<fieldset>
<!-- Form Name -->

<h4 style="margin-left:15px; font-weight:bold;">About Position:</h4>
<div class="form-group">
  <label class="col-md-2 control-label" for="postition">Position Name:</label>  
  <div class="col-md-4">
  <input id="postition" name="position" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>


<!-- Text input-->

  <label class="col-md-2 control-label" for="no_of_pos">No of Postions:</label>  
  <div class="col-md-4">
  <input id="no_of_pos" name="no_of_pos" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-2 control-label" for="tech">Technologies:</label>
  <div class="col-md-4">                     
    <input type="text" class="form-control" id="tech" name="tech" placeholder="php, android, java etc"/>
  </div>


<!-- Select Basic -->

  <label class="col-md-2 control-label" for="exp">Experience:</label>
  <div class="col-md-4">
    <select id="exp" name="exp" class="form-control">
      <option value="0">Fresher</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
    </select>
  </div>
</div>

<div class="form-group">
<label class="col-md-2 control-label" for="job_details">Job Details:</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="job_details" name="job_details"></textarea>
  </div>
 </div>
<h4 style="margin-left:-5px; font-weight:bold;">Company Details:</h4>
<!-- Textarea -->
<div class="form-group">
  


<!-- Text input-->

  <label class="col-md-2 control-label" for="Comp_name">Company Name:</label>  
  <div class="col-md-4">
  <input id="Comp_name" name="comp_name" placeholder="xyz technologies pvt ltd" class="form-control input-md" required="" type="text">
  </div>
  
   <label class="col-md-2 control-label" for="website">Company website:</label>  
  <div class="col-md-4">
  <input id="website" name="website" placeholder="www.xyz.com" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
 


<!-- Textarea -->

  <label class="col-md-2 control-label" for="address">Address:</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="address" name="address"></textarea>
  </div>
</div>


<h4 style="margin-left:7px; font-weight:bold;">Contact Details:</h4>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="phone">Phone No:</label>  
  <div class="col-md-4">
  <input id="phone" name="phone" placeholder="" maxlength="10" class="form-control input-md" required="" type="text">  
  </div>

  <label class="col-md-2 control-label" for="email">Email:</label>  
  <div class="col-md-4">
  <input id="email" name="email" placeholder="" class="form-control input-md" required="" type="text"> 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="recruiter_name">Recruiter Name:</label>  
  <div class="col-md-4">
  <input id="recruiter_name" name="recruiter_name" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-2 control-label" for="submit"></label>
  <div class="col-md-8" style="margin-left:325px;">
    <button id="submit" name="submit" class="btn btn-success" style="padding:10px 7%;">Submit Request</button>
	<button id="reset" name="reset" class="btn btn-danger" type="reset" style="padding:10px 7%;">Reset</button>
  </div>
</div>

</fieldset>
</form>
</div>

			
            </div><!--col-9-->
                
            </div><!--row-->
  </div><!--container-->
</div><!--well-->



<?php include("footer.php"); ?>

        <!-- <script src="js/jquery.min.js" type="text/javascript"></script> -->
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/script.js"  type="text/javascript"></script>
		<script src="js/side-menu.js" type="text/javascript"></script>
</body>
</html>