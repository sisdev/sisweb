<?php
ob_start();
error_reporting(0);
session_start();
include("db/dbi.php");

								
							if(isset($_POST['login']) && empty($_SESSION['login']))
							{

                                    $lipadd = $_SERVER['REMOTE_ADDR'];
                                                                        

									$lemail=$_POST['lemail'];
									$lpass=$_POST['lpass'];

                                                                       
									
									$record=mysqli_query($conn,"select userlogin,userpass from users where userlogin='$lemail' and userpass='$lpass' ");
									$name=mysqli_fetch_array($record);
									$count=mysqli_num_rows($record);
									if($count==1)
									{
										$_SESSION['login']=$name['userlogin']; 
										$_SESSION['userphone'] = $name['userphone'] ;
                                        $login_log_qry ="insert into user_login_log(userlogin, userpass, login_dtm, login_ip,login_stat)values('$lemail','$lpass',  now(), '$lipadd','success')" ;
                                        mysqli_query($conn, $login_log_qry);

										?>
										
										<?php
										
										
									}
									else
									{
                                        $login_log_qry ="insert into user_login_log(userlogin, userpass, login_dtm, login_ip,login_stat)values('$lemail','$lpass',  now(), '$lipadd','failure')" ;
                                        mysqli_query($conn, $login_log_qry);

										?>
								 
								 <script>
								$(document).ready(function(){
									 $("#errorlog").prepend("<font color=red>Invalid username or password. try again:<?php echo $count; ?></font></br>");
									 $("#loginBttn").trigger('click');
									 return false;
								});
									 </script>
										<?php
										
										
									}
									
								}

								?>

						<?php 
						if(isset($_POST['reg']))
						{
							$rphone = $_POST['rphone'];
							$remail=$_POST['remail'];
							$rpass1=$_POST['rpass1'];
							$ripadd = $_SERVER['REMOTE_ADDR'];
							
						/// NEED to VERIFY IF USER IS ALREADY REGISTERED ----	  
							$insert_user="insert into users (username, userlogin, userphone,userpass, dtm_created,ip_created, role) values('$remail','$remail','$rphone','$rpass1',now(), '$ripadd', 'None')";
							if ($debug) echo $insert_user ;
							if(mysqli_query($conn, $insert_user))
							{
									echo "Records Inserted";
							}
							else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
							$record=mysqli_query($conn, "select userlogin,userphone from users where userlogin='$remail' and userpass='$rpass1' ");
							$name=mysqli_fetch_array($record);
							$count=mysqli_num_rows($record);
							if($count==1)
							{
								$_SESSION['login']=$name['userlogin']; 
								$_SESSION['userphone'] = $name['userphone'] ;
								?>
						
								<?php
								
								
							}
							
						}

						?>
									
									
									
  <!-- Modal -->
  <!-- Login modal code - Begin -->

<div class="container">

  <div class="modal fade" id="login" role="dialog" style="z-index:10000;">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header" style="background:#006699;">
          <button type="button" class="clos" data-dismiss="modal" style="color:red; float:right; font:18px bold; ">X</button>
          <h4 class="modal-title" style="color:#FFFFFF;">Login or Register</h4>
        </div>
        <div class="modal-body" style="height:380px;">
        <div class="container-fluid">
  
  <ul class="nav nav-tabs nav-justified" id="mytab">
    <li class="active" style="font-size:18px;"><a data-toggle="tab" href="#log">Login</a></li>
    <li style="font-size:18px;"><a data-toggle="tab" href="#register">Register</a></li>
    
  </ul>

  <div class="tab-content">
    <div id="log" class="tab-pane fade in active">
	  <form method="post" id="log_form">
		<p> <div class="inner-addon left-addon">
    <i class="glyphicon glyphicon-envelope"></i><input id="Lemail" name="lemail" placeholder="Email ID" class="form-control input-md" required="required" type="text"></div></p>
		<p> <div class="inner-addon left-addon">
    <i class="glyphicon glyphicon-lock"></i><input type="password"  id="Lpwd" name="lpass" class="form-control"  required=required placeholder="password" /></div></p>
		<p> <button id="bttn" name="login" class="btn btn-primary btn-block">Login</button></p>
	 </form>
	 
 	 <div id="errorlog" style="font-size:15px; color:#428bca;"><i class="fa fa-lock" style="font-size:18px; margin-left:3px;"></i><a href="forget-pass.php" style="margin-left:5px; color:red;">Forgot Password?</a></div>
	 
	</div>
	
    <div id="register" class="tab-pane fade">
	  <form method="post" id="reg_form">
	   <p><div class="inner-addon left-addon">
    <i class="glyphicon glyphicon-earphone"></i><input id="phone" name="rphone" placeholder="Phone Number" class="form-control input-md" required="" maxlength="10" type="text"></div></p>
      <p><div class="inner-addon left-addon">
    <i class="glyphicon glyphicon-envelope"></i><input type="email" id="email" name="remail" placeholder="Email ID" class="form-control input-md" required="" ></div></p>
	  <p> <div class="inner-addon left-addon">
    <i class="glyphicon glyphicon-lock"></i><input type="password" name="rpass1" class="form-control" id="pwd1" required=required placeholder="password"></div></p>
	 <p> <div class="inner-addon left-addon">
    <i class="glyphicon glyphicon-eye-open"></i><input type="password" name="rpass2" class="form-control" id="pwd2" required=required placeholder="Confirm password"></div></p>
	 <p> <button id="reg" name="reg" class="btn btn-primary btn-block">Register</button></p>
	<div id="error" ></div>
	 </form>
    </div>
    
  </div>
</div>

        </div>
        
      </div>
    </div>
  </div>

</div>
<SCRIPT type="text/javascript">

$(document).ready(function(){
	$("#email").focusout(function(){
		var username = $("#email").val();
		var msgbox = $("#error");
		var email_pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
		
		if(username.length > 4){
			
			$("#error").html('<img src="images/loader.gif" align="absmiddle">&nbsp;Checking availability...');
			$.ajax({
				type: "POST",
				url: "reg_email_check_ajax.php",
				data: "remail="+ username,  
				success: function(msg){  
						if(msg.includes('OK')){
							document.getElementById("error").style.display="block" ;
							//alert("After display");
							
			
						if(!email_pattern.test(username)){
							msgbox.html('<font color="#cc0000">Please enter valid email ID.</font>');
							$("#email").focus();
						}else{
							msgbox.html('<img src="images/available.png" align="absmiddle">');
						}
							
							
						}else{
							$("#email").removeClass("green");
							document.getElementById("error").style.display="block" ;
							msgbox.html(msg);
							$("#email").focus();
						}
					}
			});
		}else{
			
			document.getElementById("error").style.display="block" ;
			$("#error").html('<font color="#cc0000">Please enter atleast 5 letters.</font>');
			$("#email").focus();
		}
		return false;
	});
});
</SCRIPT>
<script>
	$(document).ready(function(){

		//$("#errorlog").html("<font color=red>Invalid username or password. please try again..</font>");
		 //$("#loginBttn").trigger('click');
		
		$("#pwd2").keyup(function(){
			
			var pass1=$("#pwd1").val();
			var pass2=$("#pwd2").val();
			if(pass1!=pass2)
			{
				$("#pwd2").attr("style","border:2px solid red");
			}
			else
			{
				$("#pwd2").removeAttr("style");
			}
		});	

		$("#reg_form").submit(function(){
		
			var pass1=$("#pwd1").val();
			var pass2=$("#pwd2").val();
			
			if(pass1.length < 6)
			{
				$("#error").html("<font color='red'>Password should be grater than 6 characters</font>");
				$("#pwd1").focus();
				return false;	
			}
			else if(pass1!=pass2)
			{
				$("#pwd2").attr("style","border:2px solid red");
				$("#error").html("<font color='red'>Password doesn't match please try again.</font>");
				$("#pwd2").focus();
				return false;
			}
			else
			{
				$("#pwd2").removeAttr("style");
				
				return true;
			}
		});	
	});

</script>
<!-- Login modal code - End -->
