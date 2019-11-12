<?php
	error_reporting(0);
	session_start();
	include("db/dbi.php");

	if(isset($_POST['remail'])){
		$remail = $_POST['remail'];
		$sql = mysqli_query($conn, "select username from users where userlogin='$remail'");
		if(mysqli_num_rows($sql)){
			echo '<font size="2px" color="#cc0000"><STRONG>'.$remail.'</STRONG> is already in use.</font>';
		}else{
			echo 'OK';
		}
	}
?>