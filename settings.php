<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">  
</head>
<body>   
<!--heading-->
<div class="container-fluid" style="background:#5bc0de; color:#fff">
<div class="container"><h2 style="padding:15px">Change password</h2></div>
</div><!--heading-->       
                  
<div class="container-fluid well">   
 
      <div class="container">
      
            <div class="row">
        
            
            <div class="col-lg-9">
			
			
			
			<form class="form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
<?php
  $setval = $_SESSION['login'] ;

?>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="email">Email:</label>  
  <div class="col-md-8">
  <input id="email" name="email" placeholder="" disabled value="<?php 
			echo $setval ;
			
			?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Old-Password input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="pass1">Old Password:</label>
  <div class="col-md-8">
    <input id="oldpass" name="pass1" placeholder="Enter Old Password" class="form-control input-md" type="password" required>
    
  </div>
</div>

<!-- New-Password input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="pass2">New Password:</label>
  <div class="col-md-8">
    <input id="newpass" name="pass2" placeholder="Enter New Password" class="form-control input-md"  type="password" required pattern=".{8,}" title="Password sholud be atleast 8 character long">
    
  </div>
</div>

<!-- Confirm-New-Password input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="pass2">Confirm New Password:</label>
  <div class="col-md-8">
    <input id="cnfmnewpass" name="pass2" placeholder="Confirm New Password" class="form-control input-md"  type="password" required pattern=".{8,}" title="Password should be atleast 8 character logn.">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-2 control-label" for="change"></label>
  <div class="col-md-8">
    <button id="change" type="submit" name="change" class="btn btn-success" onclick="return Validate()">Password Change</button>
    <button id="cancel" name="cancel" type="reset" class="btn btn-primary">Cancel</button>
 <?php 
 if(isset($_POST['cancel']))
 {
	 header("location:index.php?page=1");
	 
 }
if(isset($_POST['change']))
{
	?>
	<!--<div class='alert alert-success fade in'><a href='#' id='close_me' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> password changed successfully..</div>-->

	<?php
	 $email=$setval ;
	 $pass=$_POST['pass1'];
mysqli_query($conn, "update users set userpass='$pass' where username='$email' ") or die(mysqli_error($conn));	
	
}
?>
 </div>
</div>

</fieldset>
</form>

            </div><!--col-9-->
                
            </div><!--row-->
  </div><!--container-->
</div><!--well-->

 <script type="text/javascript">
    function Validate() {
        var newpassword = document.getElementById("newpass").value;
        var confirmPassword = document.getElementById("cnfmnewpass").value;
        if (newpassword != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>




        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/script.js"  type="text/javascript"></script>
		<script src="js/side-menu.js" type="text/javascript"></script>
</body>
</html>