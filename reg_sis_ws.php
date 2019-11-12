<?php
error_reporting(0);
session_start();
include("db/dbi.php");
?>

<?php 

	 $dtm      = date("Y-m-d H:i:s");

	 $serv_category = "Training";

 	 $qry_source="Phone";

 	 $center = "Indirapuram";

	 $ip =$_SERVER['REMOTE_ADDR'];
	 
     $phone = $_REQUEST["phone"];

     $name = $_REQUEST["name"];

     $serv_desc = $_REQUEST["course"];
	 
	 $address = $_REQUEST["address"];	 
     
	 $email = $_REQUEST["email"];

	 $sql="INSERT INTO trng_query_log(qry_type,qry_source,center,name,address,emailId,phone_no,qry_details,req_dtm,ip_add,del_flag)
      VALUES('".$serv_category."','".$qry_source."','".$center."','".$name."','".$address."','".$email."','".$phone."','".$serv_desc."','".$dtm."','".$ip."',DEFAULT)";
 
	 mysqli_query($conn, $sql);  

	 $query_id = mysqli_insert_id($conn) ;
	
	 echo "Query Log Id:".$query_id ;
	 
?>