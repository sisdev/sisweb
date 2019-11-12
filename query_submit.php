<?php

ob_start();

session_start();

include 'db/dbi.php';

$captcha= $_POST['captcha'];

$key=substr($_SESSION['key'],0,5);

if($_POST['bttn']=='Apply now')

  {

   /* if(($captcha == '') || ($captcha != $key))

    {

      // header("location:contactus.php?log=new&error=invalid&sub=".$sub);

      echo"<script>alert('invalid captcha value');</script>";

      

     } 

   else

   { */

   $qry_source = "Info-C" ;
 
   $center=$_POST['center'];

   $query=$_POST['applyfor'];

   $name=$_POST['name'];

   $email=$_POST['email'];

   $monumber=$_POST['mob'];

   $address=$_POST['address'];

   $detail=$_POST['query'];

   $date=date("Y-m-d H:i:s");

   $ipp=$_SERVER['REMOTE_ADDR'];







//         $query="INSERT INTO trng_query_log(qry_type,qry_source, center,name,address,emailId,phone_no,qry_details,req_dtm,ip_add)        VALUES('".$query."','".$qry_source."','".$center."','".$name."','".$address."','".$email."','".$monumber."','".$detail."','".$date."','".$ipp."')";

//         mysql_query($query);





$ip=$_SERVER['REMOTE_ADDR'];



$from = "info@sisoft.in";



$headers = "From: $from";



$subject="Query -". $_POST["name"];



$mail_desc="Center:".$_POST["center"]."\nCourse:".$_POST["applyfor"]."\nAddress :".$_POST["address"]."\nDetail :".$_POST["query"]."\nEmail:".$_POST["email"]."\nPhone number:".$_POST["mob"]."\n IP Adress:". $ip;



mail('trng@sisoft.in',$subject,$mail_desc,$headers);

mail('info@sisoft.in',$subject,$mail_desc,$headers);

mail('vijayrastogi@yahoo.com',$subject,$mail_desc,$headers);



$mail_response="Thanks for contacting us. \nTeam, Sisoft \n(Phone: 0120-6481595)";

mail($email, "Greeting from Sisoft",$mail_response, $headers) ;
 
echo"<script>alert('Your query has been submitted!');</script>";

 





?>



<?php header("Location:contact-us.php?ok=1") ?>










</html>

<?php 
}
?>