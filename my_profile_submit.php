<?php
ob_start();
session_start();
error_reporting(1);
include("db/dbi.php");


    $email = $_POST['email'] ;
	
	$phone = $_POST['phone'] ;

    $name=$_POST['name'];

   $father_name=$_POST['father_name'];

   $dob=$_POST['dob'];

   $citizen_country=$_POST['citizen_country'];

   $gender=$_POST['gender'];

   $marital_status=$_POST['marital_status'];

   $cur_add=$_POST['cur_add'];

   $perm_add=$_POST['perm_add'];

   $phone_alt=$_POST['phone_alt'];
   
   $qualification=$_POST['qualification'];

   $experience=$_POST['experience'];

  $operation = $_POST['operation'] ;

   $ip_address=$_SERVER['REMOTE_ADDR'];

   

   $dtm= date("Y-m-d H:i:s");

 if ($operation == "I") {


     $query="INSERT INTO user_profile(email, phone_main,name,father_name, gender, dob,marital_status,cur_add,perm_add,phone_alt,qualification,experience,update_dtm, update_ip) 

	 VALUES('$email','$phone','$name','$father_name','$gender','$dob','$marital_status','$cur_add','$perm_add','$phone_alt','$qualification','$experience','$dtm','$ip_address')";

	 echo $query ;


}
else {
    $query = "UPDATE `user_profile` SET name='$name',   `father_name`='$father_name', `gender`='$gender', `dob`='$gender', `marital_status`='$marital_status', `cur_add`=$cur_add, `perm_add`='$perm_add', `citizen_country`='citizen_country',`phone_alt`='$phone_alt',`qualification`=$qualification,   `experience`='$experience', `update_dtm`='$dtm', `update_ip`='$ip_address' WHERE email = '$email'" ;

    echo $query ;	

}

    mysqli_query($conn, $query) or die(mysqli_error($conn));




   echo "<script> window.location='mysisoft.php'</script>";



?>





