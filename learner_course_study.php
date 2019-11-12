



<?php
error_reporting(0);
session_start();
include("db/dbi.php");
?>

<!--start-here-->

<!DOCTYPE html> 
<html lang="en">
    <head>
<title>Computer Training Institue in Indirapuram, Ghaziabad, Noida, Delhi, NCR - Sisoft Learning</title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="google-site-verification" content="eDtPr-M0k9e0kSPelFl_GhmVU7S-85xH5wiD5a1WKbQ" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">

        
        <!-- Google Web Font Embed -->
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
       
		<link href="css/slide.css" rel="stylesheet" type="text/css">
        <link href="css/style-costum.css" rel="stylesheet" type="text/css">
		 <link href="css/style.css"  rel='stylesheet' type='text/css'>
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --> 
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="images/icon.png">
        
        
    </head>
    
    <body>

<!--end-here-->




   <?php   include("top-header.php"); ?>

       <!-- login-->
		
       <?php include('login_reg.php'); ?>


<style type="text/css">
        .table {
            display: table;
			background:#FFFFFF;
			border-top:1px solid #ddd;
			border-left:1px solid #ddd;
        }

        .tab_row {
            display: table-row;
			
        }

        .tab_column {
            display: table-cell;
            vertical-align:middle;
			border-right:1px solid #ddd;
			border-bottom:1px solid #ddd;
			padding: 10px ;
			font-size:13px;
        }
		
				
		@media screen and (max-width:1000px){
			div#enroll .table .row .column{
			display:block ;
			}
		}

		
    </style>
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js" type="text/javascript"></script>
	<script>
	function showResource(val)
	{
		var url="learner_course_content.php?R1="+val ;
		var win = window.open(url, '_blank');
		win.focus();
	}
	</script>
 
<?php 
	
	$trng_pgm_id = $_POST["pgmid"] ;
	
	$course_sql = "SELECT course_id from trng_pgms_selfpaced where trng_pgm_id=$trng_pgm_id" ;
//	echo $course_sql ;
	$course_qry = mysqli_query($conn, $course_sql);
	$num_courses = mysqli_num_rows($course_qry);
	if ($num_courses != 1){
		echo "Contact Support" ;
		error_log("No suitable course".$course_sql) ;
		exit ;
	}
	$course_fetch = mysqli_fetch_array($course_qry,MYSQLI_ASSOC) ;
	
	$course_id = $course_fetch["course_id"]; 
	
	$sel_sql =	"SELECT * FROM `tp_section` where course_id =$course_id Order By seq_num " ;
// 	echo $sel_sql ;
	$dispquery=mysqli_query($conn, $sel_sql);
	$num_rows = mysqli_num_rows($dispquery);

//	echo "query for:".$id;
//	echo "\n Number of rows:".$num_rows ;

	
?>			         
 
	<div class="container">			         
	<div id="enroll" >
	<h3>Course Content</h3>
                <div class="table">
                         <div class="tab_row" style="background:#428bca; color:#FFFFFF; text-align:center; font-size:14px;">
								<div  class="tab_column"><strong>Title</strong></div>
                                <div class="tab_column"><strong>Description</strong></div>
							    <div class="tab_column"><strong>Resources</strong></div>
                         </div>
						 <?php  
							 while($qfetch = mysqli_fetch_array($dispquery,MYSQLI_ASSOC)) { 
								$section_id = $qfetch["id"] ;
								$sel_sql2 =	"SELECT * FROM `tp_resources` where course_id =$course_id and section_id=$section_id Order By id " ;
//								echo $sel_sql2 ;
								$dispSection=mysqli_query($conn, $sel_sql2);
								$num_rows = mysqli_num_rows($dispSection);

							 ?>
                            <div class="tab_row">
							 <div class="tab_column"><?php echo $qfetch["section_title"];?></div>
							 <div class="tab_column"><?php echo $qfetch["section_desc"];?></div>
							 <div class="tab_column"><?php echo $num_rows;?></div>
						    </div>
						<?php 
							if ($num_rows > 0) {
							 while($qfetch = mysqli_fetch_array($dispSection,MYSQL_ASSOC)) {  ?>
                            <div class="tab_row">
							 <div class="tab_column"><?php echo $qfetch["res_type"].":".$qfetch["file_type"];?></div>
							 <div class="tab_column"><?php echo $qfetch["res_title"];?></div>
							 <div class="tab_column"><button type="button" onClick="showResource('<?php echo rawurlencode(base64_encode($qfetch["id"]));?>')" style="width:100px; height:30px; background:#428bca; color:#FFFFFF; border:none;">View it</button></div>
						    </div>
						<?php	
							
							}
						
						} }?>
                </div>
    </div>				
		
		</div>
		
		<!--start-here-->
				
<?php include("footer.php"); ?>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/script.js"  type="text/javascript"></script>

    </body>
</html>

<!--end-here-->