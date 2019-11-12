<?php
error_reporting(0);
session_start();
include("db/dbi.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <title>Sisoft - My Profile</title>
<META HTTP-EQUIV="EXPIRES" CONTENT="0">
    <meta charset="UTF-8">
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
			$email = $_SESSION['login'] ;
			$phone = $_SESSION['userphone'];
            $sql = "SELECT * from user_profile where email='$email'" ;
			$qry_result = mysqli_query($conn, $sql) ;
			$num_rows = mysqli_num_rows($result);
			if ($num_rows == 0) {
			    $operation = "I" ;   //Data need to be inserted 
				}
			else
			{
			   $operation = "U" ; // Data may be updated 
			   $row = mysqli_fetch_array($dispquery,MYSQLI_ASSOC) ;
			   $name = row['name'] ;
			   $father_name = row['father_name'] ;
			   $gender = row['gender'] ;
			   $dob = row['dob'] ;
			   $marital_status = row['marital_status'] ;
			   $cur_add = row['cur_add'] ;
 			   $perm_add = row['perm_add'] ; 
			   $citizen_country = row['citizen_country'] ;
			   $phone_alt = row['phone_alt'] ;
			   $qualification = row['qualification'] ;
			   $experience = row['experience'] ;			   
			}
			
			
?>


<div id="myprofile" >
<?php 
  if ($operation == "I") {
	echo "<h3>My Profile - New</h3>" ;
	}
	else {
	echo "<h3>My Profile - Update</h3>" ;
    }
 ?>      
<form name="online_register" method="post" action="my_profile_submit.php" onSubmit="return validate();" enctype='multipart/form-data'  class="form-horizontal">

 <div class="form-group">
  <label class="col-md-4 control-label" for="email">Email ID</label>  
  <div class="col-md-6">
  <input readonly id="email" name="email" value="<?php echo $email; ?>" class="form-control input-md" required="" type="email">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="email">Phone No.(Primary)</label>  
  <div class="col-md-6">
  <input readonly id="email" name="mobile" value="<?php echo $phone; ?>" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<?php    if ($operation == "I") { ?>

<div class="form-group">
  <label class="col-md-4 control-label" for="email">Name</label>  
  <div class="col-md-6">
    <input id="email" name="name" placeholder="Enter your name" class="form-control input-md" required="" type="text">
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="email">Date of Birth(YYYY-MM-DD)</label>  
  <div class="col-md-6">
    <input id="email" name="dob"  placeholder="Date of birth" class="form-control input-md" required="" type="text">  
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="gender">Gender</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="gender-0">
      <input name="gender" id="gender-0" value="M" checked="checked" type="radio">
      Male
    </label> 
    <label class="radio-inline" for="gender-1">
      <input name="gender" id="gender-1" value="F"  type="radio">
      Female
    </label>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="gender">Marital Status</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="gender-0">
      <input name="marital_status" id="gender-0" value="S" checked="checked" type="radio">
    Single
    </label> 
    <label class="radio-inline" for="gender-1">
      <input name="marital_status" id="gender-1" value="D" type="radio">
   Married
    </label>
  </div>
</div>

 

 <div class="form-group">
  <label class="col-md-4 control-label" for="email">Father's name</label>  
  <div class="col-md-6">
  <input id="email" name="father_name" placeholder="Fathers Name" class="form-control input-md" required="" type="text">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="email">Phone No.(Alternate)</label>  
  <div class="col-md-6">
  <input id="email" name="phone_alt" placeholder="Phone NO." class="form-control input-md" required="" type="text">
    
  </div>
</div>
 


 
 <div class="form-group">
  <label class="col-md-4 control-label" for="email">Citizen Country</label>  
  <div class="col-md-6">
  <input id="email" name="citizen_country"   class="form-control input-md" required="" type="text" value="Indian">
    
  </div>
</div>


 <div class="form-group">
  <label class="col-md-4 control-label" for="caddress">Current Address</label>
  <div class="col-md-6">                     
    <textarea class="form-control" id="caddress" name="cur_add"></textarea>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="paddress">Permanent Address</label>
  <div class="col-md-6">                     
    <textarea class="form-control" id="paddress" name="perm_add"></textarea>
  </div>
</div>
 

 <div class="form-group">
  <label class="col-md-4 control-label" for="email">Educational Qualification</label>  
  <div class="col-md-6">
  <input id="email" name="qualification" placeholder="Educational Qualification"   class="form-control input-md" required="" type="text" >
    
  </div>
</div>

 <div class="form-group">
  <label class="col-md-4 control-label" for="email">Professional Experience</label>  
  <div class="col-md-6">
  <input id="email" name="experience" placeholder="Professional Experience"   class="form-control input-md" type="text" >
    
  </div>
</div>
<?php } else { ?>

<div class="form-group">
  <label class="col-md-4 control-label" for="email">Name</label>  
  <div class="col-md-6">
    <input id="email" name="name" value=<?php $name; ?> class="form-control input-md" required="" type="text">
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="email">Date of Birth(YYYY-MM-DD)</label>  
  <div class="col-md-6">
    <input id="email" name="dob"  value=<?php $dob; ?> class="form-control input-md" required="" type="text">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="gender">Gender</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="gender-0">
      <input name="gender" id="gender-0" value="M" <?php if ($gender == 'M') echo 'checked="checked"'; ?>" type="radio">
      Male
    </label> 
    <label class="radio-inline" for="gender-1">
      <input name="gender" id="gender-1" value="F" <?php if ($gender == 'F') echo 'checked="checked"'; ?>" type="radio">
      Female
    </label>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="gender">Marital Status</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="gender-0">
      <input name="marital_status" id="gender-0" value="S" <?php if ($marital_status == 'S') echo 'checked="checked"'; ?>" type="radio">
    Single
    </label> 
    <label class="radio-inline" for="gender-1">
      <input name="marital_status" id="gender-1" value="D" <?php if ($marital_status == 'D') echo 'checked="checked"'; ?>" type="radio">
   Married
    </label>
  </div>
</div>

 

 <div class="form-group">
  <label class="col-md-4 control-label" for="email">Father's name</label>  
  <div class="col-md-6">
  <input id="email" name="father_name" value=<?php $father_name; ?> class="form-control input-md" required="" type="text">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="email">Phone No.(Alternate)</label>  
  <div class="col-md-6">
  <input id="email" name="phone_alt" value=<?php $phone_alt; ?> class="form-control input-md" required="" type="text">
    
  </div>
</div>
 


 
 <div class="form-group">
  <label class="col-md-4 control-label" for="email">Citizen Country</label>  
  <div class="col-md-6">
  <input id="email" name="citizen_country"   value=<?php $citizen_country; ?>class="form-control input-md" required="" type="text" value="Indian">
    
  </div>
</div>


 <div class="form-group">
  <label class="col-md-4 control-label" for="caddress">Current Address</label>
  <div class="col-md-6">                     
    <textarea class="form-control" id="caddress" name="cur_add" value=<?php $cur_add; ?>></textarea>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="paddress">Permanent Address</label>
  <div class="col-md-6">                     
    <textarea class="form-control" id="paddress" name="perm_add" value=<?php $perm_add; ?>></textarea>
  </div>
</div>
 

 <div class="form-group">
  <label class="col-md-4 control-label" for="email">Educational Qualification</label>  
  <div class="col-md-6">
  <input id="email" name="qualification" value=<?php $qualification; ?>   class="form-control input-md" required="" type="text" >
    
  </div>
</div>

 <div class="form-group">
  <label class="col-md-4 control-label" for="email">Professional Experience</label>  
  <div class="col-md-6">
  <input id="email" name="experience" value=<?php $experience; ?>   class="form-control input-md" type="text" >
    
  </div>
</div>
<?php } ?>

   <div class="form-group">
       <input type="hidden" id="bttn" name="operation" value="<?php echo $operation; ?>" >
    <div class="col-md-6">
    <input type="submit" id="bttn" name="submit" class="btn btn-primary" value="Submit">
  </div>
</div>       

 



</form>

</div>

</body>
</html>