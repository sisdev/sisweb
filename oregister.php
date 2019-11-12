<?php



ob_start();



session_start();


error_reporting(1);
   include("db/dbi.php");



$captcha= $_POST['captcha'];



$key=substr($_SESSION['key'],0,5);







    if(($captcha == '') || ($captcha !== $key))



    {

      // header("location:contactus.php?log=new&error=invalid&sub=".$sub);



      echo"<script>alert('invalid captcha value'); window.location='online_register.php'</script>";

     } 



   else



   { 



   $course=$_POST['course'];



   $name=$_POST['name'];



   $fname=$_POST['fname'];

   

   $birth=$_POST['birth'];

     

   $country=$_POST['country'];

   

   $gender=$_POST['gender'];

   

   $marriage=$_POST['marriage'];

   

   $caddress=$_POST['caddress'];

   

   $paddress=$_POST['paddress'];

   

   $mobile=$_POST['mobile'];

   
  

   $hphone=$_POST['hphone'];



   $email=$_POST['email'];



   $qualification=$_POST['equalification'];

   

   $experience=$_POST['pexperience'];



   $ip_address=$_SERVER['REMOTE_ADDR'];

   

   $date= date("Y-m-d");
// Create a unique  activation code:
      #$status = R;
   
// Generating random confirmation code 
   $status=md5(uniqid(rand())); 


   



     $query="INSERT INTO online_training(course,name,fname,birth,country,gender,marriage,caddress,paddress,mobile,hphone,email,qualification,experience,status,date,ip_address) 

	 VALUES('".$course."','".$name."','".$fname."','".$birth."','".$country."','".$gender."','".$marriage."','".$caddress."','".$paddress."','".$mobile."','".$hphone."','".$email."','".$qualification."','".$experience."','".$status."','".$date."','".$ip_address."')";



        mysqli_query($conn, $query) or die(mysqli_error($conn));





$from = "info@sisoft.in";







$headers = "From: $from";







 $subject="Online Registration Request -". $_POST["name"];







 $mail_desc="Name:".$_POST["name"]."\nCourse:".$_POST["course"]."\nEmail:".$_POST["email"]."\nAddress :".$_POST["caddress"]."\nQualification :".$_POST["equalification"]."\nPhone number:".$_POST["mobile"]."\n IP Adress:". $ip_address;







mail('trng@sisoft.in',$subject,$mail_desc,$headers);



mail('info@sisoft.in',$subject,$mail_desc,$headers);



mail('vijayrastogi@yahoo.com',$subject,$mail_desc,$headers);







 $mail_response="Thanks for contacting us. \nTeam, Sisoft \n(Phone: +91-9540-283-283).To Confirm Your Registration Please Click on The Link Given Below\n>http://www.sisoft.in/training/onlineconform_reg.php?key=$status";



 $sentmail = mail($email, "Greeting from Sisoft Learning!!!",$mail_response, $headers) ;

 if($sentmail)
            {
   echo"<script>alert('Congratulations for Registration. Check Your Email for Cofirmation '); 
   window.location='online_register.php'</script>";
   }
   else
         {
    echo "Cannot send Confirmation link to your e-mail address";
   }



} 











?>





