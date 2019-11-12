<?php
include("db/db.php");

if(isset($_REQUEST['name']))
{
 $name=$_REQUEST['name'];
 $email=$_REQUEST['email'];
 $mobile=$_REQUEST['mobile'];
 $course=$_REQUEST['course'];
 $org=$_REQUEST['org'];
 $from=$_REQUEST['text_title'];
$ip=$_SERVER['REMOTE_ADDR'];
$date=date("d-m-Y");
$time=date("h:i:sa");
$dtm=$date." ".$time;
mysql_query("insert into training_corp (name,email,mobile,course,organisation,req_dtm,ip_add) values ('$name','$email','$mobile','$course','$org','$dtm','$ip')") or die(mysql_error());

}

?>