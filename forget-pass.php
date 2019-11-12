<!DOCTYPE html>
<html lang="en">
<head>
    <title> Sisoft - Forgot Password</title>
    <meta name="description" content="Sisoft - Forgot Password" />
	<meta name="keywords" content=" Sisoft Forgot  Password" />
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
		include("db/dbi.php");
		include("top-header.php");
	   
	   ?>
       <?php include('login_reg.php'); 
	   ?>
	   <?php 
	   $show_msg=" " ;
		if(isset($_POST['change']))  {
			$email = $_POST['email'] ;
			$qry = "select userpass from users where username ='".$email."'" ;
		//	echo $qry ;
			$result = mysqli_query($conn, $qry) ;
			$rec_count = mysqli_num_rows($result);
			if ($rec_count == 0) $show_msg=" No User Record Exists" ;
			if ($rec_count > 1) $show_msg="Forgot Password Error : 4321. Contact Website Admin(web-admin@sisoft.in)" ;
			if ($rec_count == 1) {
				$fetch=mysqli_fetch_array($result,MYSQLI_NUM) ;
				$passwd=$fetch[0] ;
				
				$subject = "Sisoft: Forgot Password";				
				
				$message="Greetings from Sisoft!!!!\r\n";

                $message.="Please find below the password of userId: ".$email ;

				$message.="\r\n Password :".$passwd;
				
			//	echo $message ;
	                
				$to=$email;

				$headers .= 'From: <info@sisoft.in>' . "\r\n";

                        // send email

				$sentmail = mail($to, $subject, $message, $headers);
				
				$sentmail = mail("vijayrastogi@yahoo.com", $subject, $message, $headers);
				$show_msg="Email has been sent to userID:".$email." Please check" ;
				
			}			
		
		}		
      
  
  ?>
<!--heading-->
<div class="container-fluid" style="background:#5bc0de; color:#fff">
<div class="container"><h2 style="padding:15px">Forgot password</h2></div>
</div><!--heading-->       
                  
<div class="container-fluid well">   
 
      <div class="container">
      
            <div class="row">
           
            <div class="col-lg-3">
            <aside class="left-sidebar">
  Forgot password
	 
            </aside>

            </div><!--col-4-->
            
            <div class="col-lg-9">
			
			
			
			<form class="form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
 <?php echo $show_msg ; ?>


<!-- Text input-->
<div class="form-group">

   <label class="col-md-2 control-label" for="email">User Email ID:</label>  
  <div class="col-md-8">
  <input id="email" name="email" placeholder="" value="<?php echo $_POST['email'];?>" class="form-control input-md" type="text">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-2 control-label" for="change"></label>
  <div class="col-md-8">
    <button id="change" name="change" class="btn btn-success btn-block">Submit</button>
   
 <?php 
 
	

?>
 </div>
</div>

</fieldset>
</form>

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