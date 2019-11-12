<?php

session_start();
?>
<html>
<head>
<link rel="icon" href="images/favicon(1).ico" type="image/png" />
<link href="css/header.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
<!--[if IE 5.5]><link rel="stylesheet" type="text/css" href="css/ie5.css" media="screen"/><![endif]-->




<script type="text/javascript">

function validate_email()
 {
 
   var emailID = document.myForm.email.value;
   atpos = emailID.indexOf("@");
   dotpos = emailID.lastIndexOf(".");
   if (atpos < 1 || ( dotpos - atpos < 2 )) 
   {
       alert("Please enter correct email ID")
       document.myForm.email.focus() ;
       return false;
   }
   return( true );
}

function validate()
{
    if( document.myForm.positionName.value == "" )
      {
     alert( "Please provide your PositionName!" );
     document.myForm.positionName.focus() ;
     return false;
      }


  if( document.myForm.companyName.value == "" )
   {
     alert( "Please provide your companyname!" );
     document.myForm.companyName.focus() ;
     return false;
   }

     if( document.myForm.companyweb.value == "" )
     {
     alert( "Please provide your company website!" );
     return false;
     }
   if( document.myForm.email.value == "" )
   {
     alert( "Please provide your Email!" );
     document.myForm.email.focus() ;
     return false;
   }else{
     // Put extra check for data format
     var ret = validate_email();
     if( ret == false )
     {
          return false;
     }
   }
   if( document.myForm.phone.value == "" ||
           isNaN( document.myForm.phone.value ) ||
           document.myForm.phone.value.length != 10 )
   {
     alert( "Please provide a phone " );
     document.myForm.phone.focus() ;
     return false;
   }
   if( document.myForm.experience.value == "-1" )
   {
     alert( "Please provide your country!" );
     return false;
   }


  if( document.myForm.captcha_input.value == "" )
   {
     alert( "Please Enter the captcha code!" );
     return false;
   }

  
  

  
  return( true );
   
}

</script>








</head>
<?php include("header.php") ?>

<div style="clear:both;"></div>
<div style="width:1005px; margin:auto;">

<?php include("header-image-area.php") ?>
<style>
table.err{
        margin-top: 20px;
    margin-bottom: 20px;
    margin-left: 50px ;
    
   
}
h6{font-size:20px;

}

</style>





<body background="images/m4.jpg">

<?php 
$project_url="http://www.sisoft.in/training/" ;

//include("rct_sendMail.php");



include 'db/dbi.php';




if($_SERVER["REQUEST_METHOD"] == "POST") 
 
 {
 
 $positionName = mysqli_real_escape_string($_POST['positionName']);
	
 $noposition = mysqli_real_escape_string( $_POST['noPosition']);
 $technology = mysqli_real_escape_string( $_POST['technology']);

 $experience = mysqli_real_escape_string( $_POST['experience']);
 $jobDetails = mysqli_real_escape_string( $_POST['jobDetails']);

 $recruiterName = mysqli_real_escape_string( $_POST['recruiterName']);
 $companyName = mysqli_real_escape_string( $_POST['companyName']);
 $companyweb = mysqli_real_escape_string( $_POST['companyweb']);
 $address = mysqli_real_escape_string( $_POST['address']);

$phone = mysqli_real_escape_string( $_POST['phone']);
$email = mysqli_real_escape_string( $_POST['email']);



if ($_POST["captcha_input"] == $_SESSION["pass"])
  {
	
	echo " You have Successfully Registered. <br><br>";



 



$ip=$_SERVER['REMOTE_ADDR'];
  
$query2="INSERT INTO job_details (positionName, noposition,technology,experience,
jobDetails,recruiterName,companyName,companyweb,address,phone,email,dateSubmited,requestIp,emailConfirmationStatus,
jobStatus) VALUES ( '$positionName ' , ' $noposition ' , ' $technology ' , ' $experience ' ,  ' $jobDetails ' , ' $recruiterName  ' ,  
 ' $companyName', '$companyweb' , ' $address ', ' $phone ' , ' $email ' , now() , '$ip','N','S')";



 $result=mysqli_query($conn, $query2);









  if($result)
   {
        $id = mysqli_insert_id($conn) ;

	echo "ID:". $id. "\n";

        $confirm_code=base64_encode($id) ;

	echo "Confirm Code:". $confirm_code. "\n";

	$to=$email;
        $from = "info@sisoft.in";
        $subject = "Sisoft:Job Submission Confirmation Required";
	$msg = 'Position Name:'. $_POST['positionName'] ."\n".
	'No Of Positions: ' . $_POST['noPosition'] ."\n".
	
        'Experience:'. $_POST['experience'] ."\n".
	
        'Job Details:'. $_POST['jobDetails'] ."\n".
	
        'Technologies:'. $_POST['technology'] ."\n".
	
         'Company Name:'. $_POST['companyName'] ."\n".

          
         'Company Website:'. $_POST['companyweb'] ."\n".
	
         'Phone:'.$_POST['phone'] . "\n" ;
	


// Your message
$message="Greetings from Sisoft!!!!\r\n";
$message.="Click on this link to activate your Submission \r\n";

$message.=$project_url."rct_confirmation.php?passkey=$confirm_code" ;

$message.="\r\n Job Posting Details \r\n";
$message .=$msg ;



$from_name = "Sisoft HR" ;
$headers .= 'From: <info@sisoft.in>' . "\r\n";
$headers .= 'Cc: info@sisoft.in' . "\r\n";



// send email
$sentmail = mail($to, $subject, $message, $headers);

  }


             

// if your email succesfully sent
if($sentmail)
     {
echo "Your Confirmation link Has Been Sent To Your Email Address.";
     }
else    {
echo "Cannot send Confirmation link to your e-mail address";
        }



 }



	
	 
else 
 {

 
        echo "Sorry, you did not pass the CAPTCHA test.<br><br>";
	//echo "You said " . $_POST["captcha_input"];
	//echo " while the correct answer was " . $_SESSION["pass"];

        echo "     Please click back in your browser and try again <br><br>";

  }


}	

?>


 
<form  action="rct_enquiry.php"  method="POST" name="myForm"  onsubmit="return validate();" >


<table width="80%" class="err" border="1" cellspacing="5" cellpadding="5" >
<tr> 
<td colspan=2> <h6 style="color:lightblue" >Submit  Candidate Requirement</h6><br><br> </td> <tr>
<tr>
<td  style="color:lightgreen">Position Name</td>
<td style="width:85%"><input type="text" name="positionName" id="positionName"/>
</td>
</tr>

<tr>
<td style="color:lightgreen">Number Of Position(s)</td>
<td><input type="text" name="noPosition" id="noPosition" size=3/><br></td></tr>

<tr>
<td style="color:lightgreen">Technology(s)</td>
<td><textarea name="technology" id="technology" size=35/> </textarea>

</td></tr>


<tr><td style="color:lightgreen">Experience</td><td><select name="experience"  >
<option value="Fresher" select> Fresher</option>
<option value="1"> 1 </option>
<option value="2"> 2 </option>
<option value="3"> 3 </option>
<option value="4"> 4 </option>
<option value="5"> 5 </option>
</select>

</td></tr>



<tr><td style="color:lightgreen">Job Details</td><td><textarea name="jobDetails" id="jobDetails" /> </textarea></td></tr>


<tr><td style="color:lightgreen">Company Name</td><td><input type="text" size=40 name="companyName" id="companyName"/>

</td></tr>
<tr><td style="color:lightgreen">Company Website</td><td><input type="text" size=40 name="companyweb" id="companyweb"/>

</td></tr>


<tr><td style="color:lightgreen">Address</td><td><textarea size=40 name="address" id="address" /></textarea></td></tr>

<tr><td style="color:lightgreen">Phone Number</td><td><input  type="text" name="phone" id="phone" />

</td></tr>
<tr><td style="color:lightgreen">Recruiter Name</td><td><input type="text"  name="recruiterName" id="recruiterName"/></td></tr>


<tr><td style="color:lightgreen">Email</td><td><input type="text" size=40  name="email" id="email"/>

</td></tr>
<tr>
      <td valign="top" style="color:lightgreen"> Captcha code:</td>
      <td><img src="captcha_image.php"> <br>
        <label for='message'><p9 style="color:red">Enter the code above here :</p9></label>
        <br>
        <input id="captcha_input" name="captcha_input" type="text">
        <br>
        </td>
    </tr>


<tr>
<td> </td>
<td>
<input type="button"  style="height:20px; width:50px"  
value="cancel">

<input type="submit" style="height:20px; width:50px; margin-left:50px;" value="submit">
</td></tr>

</table>
<div style="clear:both;"></div>

<div id="orange-footer">
   <div class="orange-footer">	  
      <?php include 'footer.php'; ?>  
   </div>
</div>   
	</div>


 </form> 
 </body>
 </html>