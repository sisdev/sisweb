<?php
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="K9W2Gnfg";


$mihpayid=$_POST["mihpayid"] ;
$mode = $_POST['mode'] ;
$payuMoneyId=$_POST['payuMoneyId'];

$dtm = date("Y-m-d H:i:s");  
$ip_address=$_SERVER['REMOTE_ADDR'];

include("db/db.php");

$qry = "INSERT INTO trng_receipts( `enroll_id`,`prod_info`, `user_name`, `payment_mode`, `payment_dtm`, `payment_amount`, `payment_ref`, `payment_ip`, txn_status) Values ('$txnid',  
'$productinfo','$firstname','payU:$mode', '$dtm', '$amount', '$mihpayid:$payuMoneyId','$ip_address','$status')" ;

mysql_query($qry) ; 


if (substr($productinfo,1,1) =="I") {  //Instructor led
       $update = "Update trng_enroll set payment_status='Paid' where enroll_id = $txnid" ;
}
else   // self paced
{
       $update = "Update trng_enroll_selfpaced set payment_status='Paid' where enroll_id = $txnid" ;
}

mysql_query($update) ;

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
           	   
          echo "<h3>Thank You. Your order status is ". $status .".</h3>";
          echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
          echo "<h4>We have received a payment of Rs. " . $amount . ".</h4>";
           
		   }         
?>	
<button type="button" onClick="location.href='mysisoft.php?opt=2'" style="width:100px; height:30px;">Back</button>