<?php
include 'db/dbi.php';


// Passkey that got from link 
$passkey=$_GET['passkey'];
$jobId = base64_decode($passkey) ;

echo  " $jobId " ;
echo " $passkey " ;


// Retrieve data from table where row that match this passkey 
$sql1="SELECT * FROM job_details WHERE jobID =".$jobId;
$result1=mysqli_query($conn, $sql1);

// If successfully queried 
 
if($result1)
  {


$count=mysqli_num_rows($result1);

// if found this passkey in our database, retrieve data from 
if($count==1)
 {
  $rows=mysqli_fetch_array($result1);
  $confirm_status=$rows['emailConfirmationStatus'];
  $email = $rows['email'];

      if ($confirm_status == 'Y')
	{
   		echo "Job status has been confirmed!!" ;
	}
	else
	{
		$sql2="update job_details set  emailConfirmationStatus='Y', 
		emailConfirmationDate = now() 
		where jobId=' $jobId ' " ;
		
		$result2=mysqli_query($conn, $sql2);
		
           echo "Email Confirmed for the submitted Job" ;
                // Send email to recruiter ..
		$msg1 = "Email has been confirmed for submitted Job. Job is now under review and will 
                 be posted after approval.\n Thanks and Regards \n Sisoft Team" ;
	        $to = $email;
                $from = "info@sisoft.in";
                $subject = "Email Confirmation Done!";
                $sentmail = mail($to, $subject, $msg1);


                // send email to admin
	        $to="jobadmin@sisoft.in";
                $from = "info@sisoft.in";
                $subject = "Job Submitted for your review";
		
                $msg2= "A job has been submitted for your review. Please review and approve" ;               
                $sentmail = mail($to, $subject, $msg2);


	}
 }
 
else 
  {
	echo "Wrong Confirmation code";
   }

}

?>