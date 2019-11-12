<?php
error_reporting(0);
session_start();
include("db/dbi.php");
?>
<head>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet">
<link href="css/style.css"  rel='stylesheet' type='text/css'>
<style>
.my_query table{width:100%; padding:5px;}

.my_query table tr td,th{padding:8px; text-align:center;}
.my_query table tr td button{border:none; background:#428bca; width:100%; padding:5px 0; color:#FFFFFF; box-shadow:0px 4px 2px #000;}
.botton_bg{border:none; background:#428bca;  padding:5px 15px; color:#FFFFFF; box-shadow:0px 4px 2px #000;}



</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js" type="text/javascript"></script>
</head>

 
<?php 
	if (isset($_SESSION['login'])) {
	       $logged = 1 ;  
		  }
    else {
          $logged = 0 ;      	   
    }
	
	$my_queries = "SELECT * FROM tq_query_details  order by query_dtm desc";
//	echo $my_queries ;
	$qry_result = mysqli_query($conn, $my_queries) ;

	$seq_no = 1;
	
	
	
?>			         
 
	<body>			         

	
	<div id="enroll" >
	<h3 style="color:#0066CC; padding-bottom:10px;">Open Quetions/Doubts</h3>
 
   </div>
 	
		<div class="my_query">
<table align='center' cellspacing=2 cellpadding=5 id="data_table" border=1 bordercolor="#ddd">
<tr style="background:#428bca; color:#FFFFFF; font-size:13px;">
<th>Sr. No.</th>
<th>Date</th>
<th>Topic</th>
<th>Title</th>
<th>Description</th>
<th>Response</th>
<th>Action</th>
</tr>

<?php
while($data=mysqli_fetch_array($qry_result)) {
	$qry_id = $data["query_id"] ;
	$res_count_qry = "select count(*) from tq_query_response  where query_id = $qry_id" ;
//	echo $res_count_qry ;
	$res_count_result = mysqli_query($conn, $res_count_qry) ;
	$count_fetch=mysqli_fetch_array($res_count_result,MYSQLI_NUM) ;
	$count_val = $count_fetch[0]; 
?>	


<tr id="row1">
<td><?php echo $seq_no ; ?></td>
<td id="name_row<?php echo $qry_id; ?>"><?php echo $data["query_dtm"] ;?></td>
<td id="qry_topic<?php echo $qry_id; ?>"><?php echo $data["query_tag"] ;?></td>
<td id="qry_title<?php echo $qry_id; ?>"><?php echo $data["query_title"] ;?></td>
<td id="qry_details<?php echo $qry_id; ?>"><?php echo $data["query_text"] ;?></td>
<td id="response_row<?php echo $qry_id; ?>"><?php echo $count_val; ?></td>
<td>
  <form action="tq_query_view.php" target="_blank" method="GET" >
  	 <input hidden name="query_id" value="<?php echo $qry_id; ?>"/>
     <input type="submit" value="View/Respond" class="botton_bg">
  </form>
</td>

</tr>
<?php 
 $seq_no = $seq_no + 1 ;

} ?>





</table>
</div>
						
    </div>	
	
			<script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>	
	
	</body>
	</html>			
