<?php
error_reporting(0);
session_start();
 include("db/dbi.php");
?>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js" type="text/javascript">
</script>

<style>
h1{color:#FFF; background:#1d6e80; padding:3px 0 3px 20px; border-radius:0px;} 
	h3{color:#000099; padding:0 0 10px 20px; border-bottom:#333333 solid 1px;}
	p{color:#000000; padding:0 0 0 20px;}
</style>

<div style="background:#e0dddd;">
	
<?php 
	
	$course_id = $_SESSION["COURSE_ID"]; 

	$sel_sql =	"SELECT * FROM `tp_course` where id =$course_id " ;
	$dispquery=mysqli_query($conn, $sel_sql);
	$num_rows = mysqli_num_rows($dispquery);
//	echo "num_rows:".$num_rows ;
	$qfetch = mysqli_fetch_array($dispquery,MYSQLI_ASSOC) ;
	
	$course_name = $qfetch["course_name"] ;
	$course_goal = $qfetch["course_goal"] ;
	$pre_requisite = $qfetch["pre_requisite"];
	$target_students = $qfetch["target_students"];
	
	$course_category = $qfetch["course_category"] ;
	$course_subcategory = $qfetch["course_subcategory"] ;
	
	
		
?>

			         
<h1 style=""> <?php echo $course_name; ?> </h1>
 
<h3> Goals </h3>


<p>
<?php
 echo $course_goal ; 
 ?>
 </p>

<h3> Pre Requisites </h3>


<p>
<?php 
echo $pre_requisite ; 
?>
</p>


<h3> Target Students </h3>


<p>
<?php echo $target_students ; ?>

</p>


<h3> Course Category </h3>



<p>
<?php echo $course_category ; ?>
</p>



<h3> Course Subcategory </h3>



<p>
<?php echo $course_subcategory ; ?>
</p>
	
</div>				
				
