<?php
	error_reporting(0);
	
	include("db/dbi.php");
   
   $search_key = $_POST["course"] ;
   $result=mysqli_query($conn, "select * from courses where name like '%".$search_key."%'");
   ?>
   <ul id="search" style="list-style: none;">
   <?php
   $recCount= 0 ;
   while($row=mysqli_fetch_assoc($result))
   {
   $recCount=$recCount+1 ;
   	?>
	<li>
		<a href="<?php echo $row['toc_url']; ?>"><?php echo $row['name']; ?></a>
	</li>
	
	<?php
   }	
   if ($recCount == 0)
    {
	 echo "<li> No relevant course found for keyword :".$search_key."</li>" ; 
   }
?>
	</ul>