<?php  
ob_start();
include("db/dbi.php");

    $count=1;  
   $now_date=date("Y-m-d");
$query="SELECT start_date,course_name,duration FROM `trng_batches` WHERE start_date >= '".$now_date."' ORDER BY start_date LIMIT 0 , 10";
$resultset=mysqli_query($conn, $query); 
//echo $query;
$trng_cal = "" ;        
    while($row=mysqli_fetch_array($resultset)) { 
    	$trng_cal = $trng_cal."<tr ><td><strong>".$count."</strong></td><td ><strong>".$row['start_date']."</strong></td><td ><strong>".$row['course_name']."</strong></td></tr>";
    	$count++;
}
//echo $trng_cal;
    	?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<body>
<script type="text/javascript">
const {body} = document

const canvas = document.createElement('canvas')
const ctx = canvas.getContext('2d')
canvas.width = canvas.height = 500

const tempImg = document.createElement('img')
tempImg.addEventListener('load', onTempImageLoad)
// tempImg.src = 'data:image/svg+xml,' + encodeURIComponent('<svg xmlns="http://www.w3.org/2000/svg" width="500" height="400"><foreignObject width="100%" height="100%"><div xmlns="http://www.w3.org/1999/xhtml"><div style="font-weight:bold;"><h2 align="center">Sisoft Learning Calander</h2><table class="table table-bordered" border="1" style="text-align:center;" width="300" align="center"><thead><tr><td>#</td><td>Date</td><td>Course</td></tr></thead><tbody><tr ><td><strong>1</strong></td><td ><strong>03-04-2019</strong></td><td ><strong>Java</strong></td></tr></tbody></table></div></div></foreignObject></svg>')
tempImg.src = 'data:image/svg+xml,' + encodeURIComponent('<svg xmlns="http://www.w3.org/2000/svg" width="500" height="400"><foreignObject width="100%" height="100%"><div xmlns="http://www.w3.org/1999/xhtml"><div style="font-weight:bold;"><h2 align="center">Sisoft Learning Calander</h2><table class="table table-bordered" border="1" style="text-align:center;" width="300" align="center"><thead><tr><td>#</td><td>Date</td><td>Course</td></tr></thead><tbody><?php echo $trng_cal; ?></tbody></table></div></div></foreignObject></svg>')
const targetImg = document.createElement('img')
body.appendChild(targetImg)

function onTempImageLoad(e){
  ctx.drawImage(e.target, 0, 0)
  targetImg.src = canvas.toDataURL()
}
</script>
	</body>
</html>