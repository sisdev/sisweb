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
.my_query table tr td a:hover{text-decoration:none;}
.my_query table tr td button{border:none; background:#428bca; width:100%; padding:5px 0; color:#FFFFFF; box-shadow:0px 4px 2px #000;}
.botton_bg{border:none; background:#428bca;  padding:5px 15px; color:#FFFFFF; box-shadow:0px 4px 2px #000;}
.title{border:#999999 solid 1px; padding:5px;}
.description{height:100px; border:#999999 solid 1px; padding:5px;}


</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js" type="text/javascript"></script>
	 
	 <script>
function edit_row(no)
{
 document.getElementById("edit_button"+no).style.display="block";
 document.getElementById("save_button"+no).style.display="block";
	

 var title=document.getElementById("qry_title"+no);
 var details=document.getElementById("qry_details"+no);
	
 
 var title_data=title.innerHTML;
 var details_data=details.innerHTML;
	
 
 title.innerHTML="<input type='text' class='title' id='title_text"+no+"' value='"+title_data+"'>";
 details.innerHTML="<textarea class='description' id='details_text"+no+"' >"+details_data+"</textarea>";
 
 
}

function save_row(no)
{

 var title_val=document.getElementById("title_text"+no).value;
 var details_val=document.getElementById("details_text"+no).value;


 document.getElementById("qry_title"+no).innerHTML=title_val;
 document.getElementById("qry_details"+no).innerHTML=details_val;

 	 $.ajax({
		   url: "tq_ajax_update_query.php" ,
			   type: "post" ,
			   data: {qry_id: no, qry_title: title_val, qry_text: details_val }, // Data in key value pair
			   success: function(result){
				 alert("Record Updated") ;
				 $("#screen_msg").html(result) ;
			   }
			   }) ;

 document.getElementById("edit_button"+no).style.display="block";
 document.getElementById("save_button"+no).style.display="block";
}

function delete_row(no)
{
 document.getElementById("row"+no+"").outerHTML="";
}

</script>
</head>
 
<?php 
	if (isset($_SESSION['login'])) {
	       $logged = 1 ;  
		  }
    else {
          $logged = 0 ;      	   
    }
	
	$user_email = $_SESSION['login'];
	$my_queries = "SELECT * FROM tq_query_details where query_user = '$user_email'  order by query_dtm desc";
	//echo $my_queries ;
	$qry_result = mysqli_query($conn, $my_queries) ;
	
	
?>			         
 
	
	<body>			         

	
	<div id="enroll" >
	<h3 style="color:#0066CC; padding-bottom:10px;">My Question/Doubts </h3>
		
<div class="my_query">
<table align='center' cellspacing=2 cellpadding=5 id="data_table" border=1 bordercolor="#ddd">
<tr style="background:#428bca; color:#FFFFFF; font-size:13px;">
<th>Date</th>
<th>Title</th>
<th>Description</th>
<th>Response</th>
<th colspan="4">Action</th>
</tr>
<?php
while($data=mysqli_fetch_array($qry_result)) {
	$qry_id = $data["query_id"] ;
	$res_count_qry = "select count(*) from tq_query_response where query_id = $qry_id  " ;
	// echo $res_count_qry ;
	$res_count_result = mysqli_query($conn, $res_count_qry) ;
	$count_fetch=mysqli_fetch_array($res_count_result,MYSQLI_NUM) ;
	$count_val = $count_fetch[0]; 
?>	
	
<tr id="row<?php echo $qry_id; ?>">
<td id="name_row<?php echo $qry_id; ?>"><?php echo $data["query_dtm"] ;?></td>
<td id="qry_title<?php echo $qry_id; ?>"><?php echo $data["query_title"] ;?></td>
<td id="qry_details<?php echo $qry_id; ?>"><?php echo $data["query_text"] ;?></td>
<td id="response_row1"><?php echo $count_val; ?></td>
<td><input  type="button" id="edit_button<?php echo $qry_id; ?>" value="Edit" class="edit botton_bg" onClick="edit_row('<?php echo $qry_id; ?>')" ></td>

<td><input type="button" id="save_button<?php echo $qry_id; ?>" value="Save" class="save botton_bg" onClick="save_row('<?php echo $qry_id; ?>')"></td>

<td>
  <form action="tq_query_view.php" target="_blank" method="GET" >
  	<input hidden name="query_id" value="<?php echo $qry_id; ?>"/>
    <input type="submit" value="View" class="botton_bg">
  </form>

</td>
</tr>

<?php } ?>





</table>
<span id="screen_msg"> </span>

</div>
						
    </div>	
	
	<script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>	
	
	</body>
	</html>			
