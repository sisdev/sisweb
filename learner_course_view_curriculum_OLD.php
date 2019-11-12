<?php
error_reporting(0);
session_start();
include("db/db.php");
$debug=false ; //true or false 
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<script>

function showHide(shID) {
   if (document.getElementById(shID)) {
      if (document.getElementById(shID+'-show').style.display != 'none') {
         document.getElementById(shID+'-show').style.display = 'none';
 		 document.getElementById(shID+'-hide').style.display = 'inline';
         document.getElementById(shID).style.display = 'block';
      }
      else {
         document.getElementById(shID+'-show').style.display = 'inline';
         document.getElementById(shID).style.display = 'none';
		 document.getElementById(shID+'-hide').style.display = 'none';
      }
   }
}


</script>
<style type="text/css">
        .table {
            display: table; margin-bottom:0px;}
        .tab_row {
            display: table-row;
			border: 0px solid gray;
			border-bottom: #000000 solid 1px;
			/*background:#c5c1c1;	*/
			color:#000000;
			 background:linear-gradient(rgba(202,202,203,1),rgba(228,228,230,1));
        }

        .tab_column {
            display: table-cell;
            vertical-align: top;
			border: 0px solid gray;
			padding: 10px ;
			border-bottom:#666666 solid 1px;
			/*border-left:#000000 solid 1px;*/
			/*border-right:#000000 solid 1px;*/
        }
		.clear{clear:both;}
		.more {display:block;}
a.showLink, a.hideLink {text-decoration: none;}
		
		
				
		@media screen and (max-width:1000px){
			div#enroll .table .row .column{
			display:block ;
			}
			 
		}

		
    </style>
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js" type="text/javascript"></script>
	<script>
	function showResource(val)
	{
		var url="learner_course_content.php?R1="+val ;
		alert(url);
		var win = window.open(url, '_blank');
		win.focus();
	}
	
	/*read-more-start*/
	
	
/*read-more-end*/
	
	</script>
 
<?php 
	
	$course_id = $_SESSION["COURSE_ID"]; 
//		$course_id = 1; 

	$sel_sql =	"SELECT * FROM `tp_section` where course_id =$course_id Order By seq_num " ;
	if ($debug) echo $sel_sql ;
	$dispSection=mysql_query($sel_sql);
	$num_rows = mysql_num_rows($dispquery);

//	echo "query for:".$id;
//	echo "\n Number of rows:".$num_rows ;

	
?>			         
 
				         

	<div id="view_curriculum">
	<h3 style="background:#3c2cd1; text-align:center; padding:8px 0; color:#FFFFFF;">Course Content</h3>
	
                <div class="table">
				
				
                         <div class="tab_row">
								<div  class="tab_column" style="background:#428bca; text-align:center; color:#FFFFFF;"><strong>Title</strong></div>
                                <div class="tab_column" style="background:#428bca; text-align:center; color:#FFFFFF;"><strong>Description</strong></div>
							    <div class="tab_column" style="background:#428bca; text-align:right; color:#FFFFFF;"><strong>Resources</strong></div>
                         </div>
		
				
					 
						 <?php  
							 while($qfetch = mysql_fetch_array($dispSection,MYSQL_ASSOC)) { 
								$section_id = $qfetch["id"] ;
								$sel_sql2 =	"SELECT * FROM `tp_resources` where course_id =$course_id and section_id=$section_id Order By id " ;
								if ($debug) echo $sel_sql2 ;
								$dispResources=mysql_query($sel_sql2);
								$num_rows = mysql_num_rows($dispResources);
								$chapter ="ch".$section_id ;

							 ?>
							 
							 </div>
					
						 <div class="table" style=" border-top:#666666 solid 1px;">
					
                            <div class="tab_row">
								 <div class="tab_column" style="width:150px; vertical-align:middle;"><b><?php echo $qfetch["section_title"];?></b></div>
								 <div class="tab_column" style="width:500px;"><?php echo $qfetch["section_desc"];?></div>
								 <div class="tab_column"><?php echo $num_rows;?> 
								 
								 <a href="#" id="<?php echo $chapter; ?>-show" class="showLink" onclick="showHide('<?php echo $chapter; ?>');return false;">
															<button class="read_more" type="button" style="float:right; border:none; color:#000000;
															 background:none; font-size:20px;">
															<i class="fa fa-caret-down"></i>
															 </button></a>
															
								 </div> 
						    </div>
							
							
							
						  </div>
					 
										<!--	<div class="table"></div>	-->
							
								        <div id="<?php echo $chapter; ?>" class="more">
											
											<a href="#" id="<?php echo $chapter; ?>-hide" class="hideLink" onclick="showHide('<?php echo $chapter; ?>');return false;">
											<button class="read_more" type="button" style="float:right; margin-right:10px;  border:none;  
											  margin-top:-55px;  background:none; color:#000000; font-size:20px;">					                                             
											  <i class="fa fa-caret-up" aria-hidden="true"></i>
											</button> </a>
								 
								 
						<?php 
							if ($num_rows > 0) {
							 while($qfetch = mysql_fetch_array($dispResources,MYSQL_ASSOC)) { 
							   $res_type = $qfetch["res_type"] ;
							  ?>
							 
                            <div class="tab_row" style=" background:#FFFFFF; color:#000000;">
								
								
							<div class="tab_column" style="width:150px;">
							 <?php if ($res_type == "Lecture") { ?>
							 <!-- Put lecture image here-->Lecture : <img src="images/sp-video-icon.png" />
							  
							  <?php }else if ($res_type == "Reference") { ?>
							  <!-- Put reference image here-->Reference : <img src="images/sp-pdf-icon.png" />
							  
							  <?php } ?>
								
							   
							</div>
						
									
							
							
							 <div class="tab_column" style="border-right:#000000 solid 1px; width:500px;"><?php echo $qfetch["res_title"];?></div>
						<?php $free_preview = $qfetch["free_preview"] ;
                              if ($free_preview == "Y") { ?>	
							 
								
							 									 
								<div class="tab_column" style=" width:205px;">
									<button type="button" onClick="showResource(<?php echo $qfetch["id"];?>)" style="color:#fff; background:#428bca; border:none; border-radius:5px;                                    padding:8px 30px; float:right;">View it</button>
								</div>
								
								
							
								
						<?php } 
							  else { ?>		
								
						<?php } ?> 

								
						    </div>

								
						 
						<?php	
							
							}
						
						} }?>
						
						
						
					
						
                </div>
				
				
  
	
	
	</div>
	
