<?php
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];

$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="GOUeqBV2UA";

$mihpayid=$_POST["mihpayid"] ;
$mode = $_POST['mode'] ;
$payuMoneyId=$_POST['payuMoneyId'];

$dtm = date("Y-m-d H:i:s");  
$ip_address=$_SERVER['REMOTE_ADDR'];

include("db/db.php");

$qry = "INSERT INTO trng_receipts( `enroll_id`,`prod_info`, `user_name`, `payment_mode`, `payment_dtm`, `payment_amount`, `payment_ref`, `payment_ip`, txn_status) Values ('$txnid',  
'$productinfo','$firstname','payU:$mode', '$dtm', '$amount', '$mihpayid:$payuMoneyId','$ip_address','$status')" ;

echo $qry ;

mysql_query($qry) ; 

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
        
                  }
	else {	  

        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;

         }
		 $hash = hash("sha512", $retHashSeq);
  
       if ($hash != $posted_hash) {
	       echo "Invalid Transaction. Please try again";
		   }
	   else {

         echo "<h3>Your order status is ". $status .".</h3>";
         echo "<h4>Your transaction id for this transaction is ".$txnid.". You may try making the payment by clicking the link below.</h4>";
          
		 } 
		 
	$from = "info@sisoft.in";

	$headers = "From: $from";

	$subject="Failed PayUMoney Payment -". $_POST["email"];

	$mail_desc="Failed transaction id for this transaction is: '$txnid' .The reason for Error is".$_POST["Error"];

	mail('info@sisoft.in',$subject,$mail_desc,$headers);
	 
?>
<!--Please enter your website homepagge URL -->
<p><a href=http://www.sisoft.in/mysisoft.php?opt=1> Try Again </a></p>
