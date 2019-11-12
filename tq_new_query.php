<html>
<head>
<?php
error_reporting(0);
session_start();
 include("db/dbi.php");
?>
 <style type="text/css">
 
.send_query{padding:15px;}
.send_query input{margin-bottom:15px; border:#999999 solid 1px; width:100%; padding:10px;}
.send_query input[type="submit"]{background:#000066; color:#FFFFFF; border:none;}
.send_query textarea{margin-bottom:15px; border:#999999 solid 1px; width:100%; padding:10px;}
.send_query label{margin-top:10px;}
    </style>

	
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

 
	<script>
	$(document).ready(function(){
    $("#submit").click(function(event){
		event.preventDefault();
		alert("Query submitted") ;
		var myForm = document.getElementById("tech_qry_form");	
	    var formData = new FormData(myForm);

	// Display the keys
		for (var key of formData.keys()) {
			console.log(key);
//				alert(key) ;
		}	
			   $.ajax({
			   url: "tq_ajax_log_query.php" ,
			   type: "post" ,
			   data: formData,
			   contentType: false,       			// The content type used when sending data to the server.
			   cache: false,             			// To unable request pages to be cached
			   processData:false,        			// To send DOMDocument or non processed data file it is set to false

			   success: function(result){
				 $("#tech_query_details").html(result) ;
			   }
			   }) ;
	} )} );
	</script>
 
<?php 
	if (isset($_SESSION['login'])) {
	       $logged = 1 ; 
		   $user_email = $_SESSION['login'] ;
		  }
    else {
          $logged = 0 ;      	   
    }
?>			         
 
</head>
<body>				         

	
	<div id="tech_query_details" >
	<h3 style="color:#0066CC; padding-bottom:10px;">Ask Question/Doubts</h3>
                <div class="send_query">
					<form id="tech_qry_form" name="tech_qry_form" method="post">
					<div class="row">
							<div class="col-sm-2 col-xs-12 col-md-2 col-lg-2">
								<label>
							  		 User  :
							   </label>
							</div>
							<div class="col-sm-5 col-xs-12 col-md-5 col-lg-5">
								<input READONLY type="query_user" value="<?php echo $user_email; ?>" name="query_user" placeholder="Enter Email Address">
							</div>
					</div>
					
					<div class="row">
							<div class="col-sm-2 col-xs-12 col-md-2 col-lg-2">
								<label>
									  Course / Topic :
							    </label>
							</div>
							<div class="col-sm-5 col-xs-12 col-md-5 col-lg-5">
								<input type="text" name="query_tag" placeholder="Enter Course / Topic">
							</div>
					</div>
					
					<div class="row">
							<div class="col-sm-2 col-xs-12 col-md-2 col-lg-2">
								<label>
							   	Query Title :
								</label>
							</div>
							<div class="col-sm-5 col-xs-12 col-md-5 col-lg-5">
								<input type="text" name="query_title" placeholder="Enter Query Title">
							</div>
					</div>
					
					<div class="row">
							<div class="col-sm-2 col-xs-12 col-md-2 col-lg-2">
								<label>
							  		Detail :
								</label>
							</div>
							<div class="col-sm-5 col-xs-12 col-md-5 col-lg-9">
								<textarea placeholder="Detail"   id="noise" name="query_text" class="widgEditor nothing"></textarea>
							</div>
					</div>

			<!--		
					<div class="row">
							<div class="col-sm-2 col-xs-12 col-md-2 col-lg-2">
								<label>
							   		Attachment :
									
								</label>
							</div>
							<div class="col-sm-5 col-xs-12 col-md-5 col-lg-5">
								<input type="file">
							</div>
					</div>
			-->
			
					<div class="row">
							<div class="col-sm-2 col-xs-12 col-md-2 col-lg-2">
							</div>
							<div class="col-sm-5 col-xs-12 col-md-5 col-lg-5">
								<input type="submit" id="submit" value="Submit Query" >
							</div>
					</div>
					
					</form>
                       
                </div>
    </div>				
	</body>
	</html>			
