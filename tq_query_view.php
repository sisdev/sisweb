<?php
error_reporting(0);
session_start();
include 'db/dbi.php';
	if (isset($_SESSION['login'])) {
	       $logged = 1 ;  
		  }
    else {
          $logged = 0 ;      	   
    }
 
    if (isset($_GET["query_id"])){
			$query_id = $_GET["query_id"] ;
	}
	else
	{
		echo "Please select particular query to view" ;
		exit(1) ;
	}
	
	$particular_queries = "SELECT * FROM tq_query_details where query_id = $query_id";
//	echo $particular_queries ;
	$qry_result = mysqli_query($conn, $particular_queries) ;

	while($data=mysqli_fetch_array($qry_result)) {
		$qry_id = $data["query_id"] ;
		$qry_title=$data["query_title"] ;
		$qry_text = $data["query_text"] ;
		$qry_topic = $data["query_tag"];
		 
	}
		$response_qry = "select * from tq_query_response where query_id = $qry_id  " ;
//		echo $response_qry ;
		$response_details = mysqli_query($conn, $response_qry) ;
		$count_val = mysqli_num_rows($response_details); 



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $qry_topic.":".$qry_title; ?></title>
    <meta name="description" content="<?php echo $qry_topic.":".$qry_title; ?>" />
	<meta name="keywords" content="<?php echo $qry_topic.":".$qry_title; ?>" />
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
		
		<script src="zcomasys/ckeditor/ckeditor.js"></script>

        
    </head>   
	<style>
	.response textarea{margin-top:25px; margin-bottom:25px; border:none; width:50%; border:#999999 solid 1px; padding:8px;}
	.response input[type="submit"]{border: none;background: #428bca;padding: 5px 15px;color: #FFFFFF;box-shadow: 0px 4px 2px #000; margin-bottom:15px}
	
.botton_bg{border:none; background:#428bca;  padding:5px 15px; color:#FFFFFF; box-shadow:0px 4px 2px #000;}
.question_header{border-bottom:#666666 solid 1px; padding-bottom:25px; margin-bottom:35px;}

	</style>
<body>
 
        
    <?php 
		$page = 5;
	   include("top-header.php");
	   
	?>
         
	<?php  
		include('login_reg.php');
	?>
 
<?php


?>
       
<!--heading-->
<div class="container-fluid" style="background:#5bc0de; color:#fff">
<div class="container"><h2 style="padding:15px"><?php echo $qry_topic.":".$qry_title; ?></h2></div>
</div><!--heading-->       
  	<div class="container">
		<div class="question_header">
	 		<h3><?php echo $qry_title; ?></h3>
			<P><?php echo $qry_text; ?></P>
		</div>
		
		<div class="row">
			<div class="col-lg-12 response">
				<h4>Answers : <?php echo $count_val; ?></h4>
				<?php 
					while($response_data=mysqli_fetch_array($response_details)) {
						$response_text = $response_data["response_text"] ;
						$responded_by=$response_data["responded_by"] ;
						$response_dtm = $response_data["query_text"] ;
						$print_user = substr($responded_by, 0, strpos($responded_by, '@'));
				?>
			
				<div style="background:#E6E6E6; padding:5px 10px; margin-bottom:20px;">
				<p><?php echo $response_text; ?></p>
				<p style="color:#c76c0d;"> Responded by: <?php echo $print_user; ?></p>
				</div>
				
				<?php } ?>
				

				<?php if ($logged == 1) {   // Only logged users will get chance to respond ?> 
				<form action="tq_submit_response.php" method="POST">
					<input hidden name="query_id" value="<?php echo $qry_id; ?>"/>
					<textarea name="query_response" id="editor1" placeholder="Your Response" rows="8"></textarea><br>
			<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
					CKEDITOR.replace( 'editor1', { enterMode: CKEDITOR.ENTER_BR });
            </script>
					<input type="submit" value="Post Your Answer">
				</form>
				<?php } ?> 
				 
			</div>
		</div>
	</div>



<?php include("footer.php"); ?>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/script.js"  type="text/javascript"></script>
		<script src="js/side-menu.js" type="text/javascript"></script>
</body>
</html>