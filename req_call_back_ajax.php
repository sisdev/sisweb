<?php
	error_reporting(0);
	session_start();
	include("db/dbi.php");


	  $name= $_REQUEST['name'];
	  $phone= $_REQUEST['phone'];
	  $qry= $_REQUEST['query'];
	  $ip =$_SERVER['REMOTE_ADDR'];
	  $dtm = date("Y-m-d H:i:s");
	  $qry_source="QUERY";
	  $sql_qry="INSERT INTO trng_query_log(qry_type,qry_source,name,phone_no,qry_details,req_dtm,ip_add,del_flag) VALUES('QUERY','".$qry_source."','".$name."','".$phone."','".$qry."','".$dtm."','".$ip."',DEFAULT)";
	  mysqli_query($conn, $sql_qry); 
?>