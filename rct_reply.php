<?php 
ob_start();
session_start();
include ("db/dbi.php");
?>

<html>
<head>
<title>Submit Resume</title>
<link rel="shortcut icon" href="images/icon.png"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="css/style.css"  rel='stylesheet' type='text/css'>
<link href="css/style-costum.css" rel="stylesheet" type="text/css">
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"  type="text/javascript"></script>
<script src="js/stickUp.min.js"  type="text/javascript"></script>
<script src="js/script.js"  type="text/javascript"></script>
</head>


<?php 

if($_SERVER["REQUEST_METHOD"] == "GET")
 {
 
	$jobId = $_GET["jobId"];

	$mysql="SELECT  jobId, positionName,  companyName, email FROM job_details where jobId = '$jobId' " ; 
	$result = mysqli_query($conn, $mysql);
	if (!$result)
	{
  		echo 'Could not run query:'. mysqli_error($conn) ;
  		exit ;
	}

	while ($row = mysqli_fetch_row($result)) 
	{   
		$recruiter_email = $row[3] ;
           $recruiter_company = $row[2] ;
           $recruiter_positionname = $row[1] ;
	}
}

  

if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    
      $to=$_POST['email'];
      $message = $_POST['message'];
      $subject = $_POST['subject'];      
   
  


$from ='info@sisoft.in';
$from_name = 'Sisoft HR' ;
$replyto='info@sisoft.in';

$mime_boundary = "--Multipart_Boundary_x" . md5(mt_rand())."x";


if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
     
        {
            
 
    $target = $_SERVER['DOCUMENT_ROOT'] ."/upload/"; // TARGET LOCATION ..

    $target = $target . basename( $_FILES['userfile']['name']);
     echo "$target";
      
       

      $fileName = $_FILES['userfile']['name'];
       $tmpName  = $_FILES['userfile']['tmp_name'];
      $fileSize = $_FILES['userfile']['size'];
        $fileType = $_FILES['userfile']['type'];
     


        $fp      = fopen($tmpName, 'rb');
        $content = fread($fp, filesize($tmpName));
        $content = addslashes($content);
        fclose($fp);


        move_uploaded_file($tmpName , "$target");


      


       if(!get_magic_quotes_gpc())
             {
            $fileName = addslashes($fileName);
             }
         echo '<script language="javascript">';
         echo 'alert("file successfully uploaded")';
         echo '</script>';
         //echo("File $fileName Successfully  uploaded");
 
    


       
 }    
  
    $content = chunk_split(base64_encode($content));
    
    $header = "From: ".$from_name." <".$from.">\r\n";
    $header .= "Reply-To: ".$replyto."\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: multipart/mixed;\n" . "boundary=\"".$mime_boundary."\"\r\n\r\n";
   // $header .= "This is a multi-part message in MIME format.\r\n";
    
   //message
    
    $header .= "--".$mime_boundary."\r\n";
    $header .= "Content-type:text/plain; charset=iso-8859-1\r\n";
    $header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $header .=  $message."\r\n\r\n";
 
    //attachment

    $header .= "--".$mime_boundary."\r\n";
    $header .= "Content-Type: application/octet-stream; name=\"".$content."\"\r\n"; 
    $header .= "Content-Transfer-Encoding: base64\r\n"  ;
  
    //$header .="Content-Disposition: attachment   filename=\"".$fileName."\"\r\n\r\n";  
    $header .= $content."\r\n\r\n";

    $header .= "--".$mime_boundary."--";
    


//     $sentmail =smtpmailer($to,$from,$from_name, $body, $header);
$sentmail =mail($to,$from,null, $header);


    if ($sentmail) {
	        echo "Message sent!";
	    } else {
	        echo "ERROR sending message.";
	    }
     

  exit();

}
 

?>
<body>
<?php include("top-header.php") ?>

<div class="container-fluid" style="background:#5bc0de; color:#fff">
<div class="container"><h3 style="padding:15px; text-align:center;">Submit Your Resume</h3></div>
</div><!--heading--> 
<div class="container" style="margin-top:20px; margin-bottom:5px;">


<form class="form-horizontal" action="rct_reply.php" method="POST" enctype="multipart/form-data" style="margin-left:300px;">

     <div class="form-group row"> 
     <label class="control-label col-md-2"  for="email">Mail To:</label>
     <input type="text" class="form-control-static col-md-4" value="<?php echo htmlspecialchars($recruiter_email);?>" id= "email" name= "email"/> 
     </div>
       
	 <div class="form-group row"> 
     <label class="control-label col-md-2"  for="subject">Subject:</label>
     <input type="text" class="form-control-static col-md-4" value="<?php echo "Applying For:";
                echo htmlspecialchars($recruiter_company); 
                echo ":";
                echo htmlspecialchars($recruiter_positionname);
                 echo " position";
                 ?>" name="subject"/>
     </div>
	
     <div class="form-group row"> 
     <label class="control-label col-md-2"  for="message">Message:</label>
     <textarea name="message" class="form-control-static col-md-4" id ="message" rows="10" cols="50" /> </textarea>
	 </div>
	 	 
     <div class="form-group row"> 
     <label class="control-label col-md-2"  for="userfile">Upload Resume:</label>
     <input type="file" class="form-control-static col-md-4" name="userfile" id="userfile"/> 
	 </div>
	 
	  <div class="form-group row"> 
      <label class="control-label col-md-2" for="captcha_input">Captcha Code:</label>
      <img src="captcha_image.php">
	  </div>
	  
	  <div class="form-group row">
	  <div class="col-md-2"></div>
      <input id="captcha_input" placeholder="Enter the code above here" class="form-control-static col-md-4" style="height:25"; name="captcha_input" type="text">
	  </div>
	  
	  <div class="form-group row">
	  <div class="col-md-2"></div>
	  <input class="btn btn-primary col-md-2" type="submit" id="upload" name="upload" value="Submit"/>
	  <input type="reset"  name="Reset" class="btn col-md-2" value="Cancel" onClick="location.href = 'rct_listJobs.php';" style="margin-left:5px;"/>
	  </div>
    </form>
</div>

<?php include 'footer.php'; ?> 
</body>
</html>