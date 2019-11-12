<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
<META HTTP-EQUIV="EXPIRES" CONTENT="0">
<meta property="fb:admins" content="http://www.facebook.com/sarvodaya.grp"/>

<meta property="fb:app_id" content="290643104423728"/>

<div id="fb-root"></div>

<script>(function(d, s, id) {

  var js, fjs = d.getElementsByTagName(s)[0];

  if (d.getElementById(id)) return;

  js = d.createElement(s); js.id = id;

  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=290643104423728";

  fjs.parentNode.insertBefore(js, fjs);

}(document, 'script', 'facebook-jssdk'));</script>
<link rel="icon" href="images/favicon(1).ico" type="image/png" />



<link href="css/style.css" rel="stylesheet" type="text/css">



<link href="css/header.css" rel="stylesheet" type="text/css">



<link href="css/main.css" rel="stylesheet" type="text/css">



<style type="text/css">

#Menu{font-family: Helvetica, Arial, sans-serif;  font-size: 0.9em;}
ul#Menu, ul#Menu ul {      list-style-type:none;  margin-left:-24px;  padding: 0;  width: 250px;}
ul#Menu a {  display: block;  text-decoration: none;    }
ul#Menu li {  margin-top: 1px;}
ul#Menu li a {  background: #0E6173;  color: #fff; padding: 0.5em;}
ul#Menu li a:hover {  background: #0E6173;}
ul#Menu li ul li a {  background:#F7F7F7;  color: #000;  padding-top: 3px;  padding-bottom: 3px;  line-height: 14px;  background-image: url(arrow.gif);  background-repeat: no-repeat;  padding-left: 15px;   border-bottom:0px;}
ul#Menu li ul li a:hover {  background: #BFBFBF;  border-left: 5px #006600 solid;  padding-left: 10px;}
</style>
<script>
function cvisibility() {
	document.getElementById('sql').style.visibility ='hidden';
	var d1 = document.getElementById('parentdiv');
    var d2 = document.getElementById('sql');
	d1.removeChild(d2);
	}
</script>
</head>
 <?php 
 error_reporting(1);
// $_GET["a"];
  include("db/dbi.php");
?>




<body style="width:100%;margin:0px;background:url(images/shadowtwo.png) repeat;padding:0px;">

<div style="width:1005px; height:auto;box-shadow:0px 0px 30px gray;margin:auto;">

<?php include("header.php") ?>

<div style="clear:both;"></div>

<div style="width:1005px; margin:auto;">



 <?php include("header-project-management.php") ?>



<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" border="1px" >



  <tr>

   <td valign="top" align="left" style="background-color:#000000; width:228px;" onClick="return cvisibility();">



<ul id="Menu">


<li> 



<a href="javascript:void(0)">Project Management Training</a>

<ul>                
	<li><a href="project_management.php?q=19"> MS Project</a></li>                
	<li><a href="project_management.php?q=18">PMP Certification</a></li>                
	<li><a href="project_management.php?q=30">Project Management</a></li>
        <li> <a href="project_management.php?b=4001"> Prince 2 </a></li>
        <li> <a href="project_management.php?b=5001">ITIL </a> </li>
        <li> <a href="project_management.php?b=000">Agile Scrum </a><li>
        <li> <a href="project_management.php?b=6001">Six Sigma - GB</a> </li>              
</ul>




<li> <a href=soft_skill.php> Soft Skills Training</a>

<li> <a href=coursesdetail.php> Technical Trainings </a>



</li>



</ul>



</td>



<td valign="top" style="padding-left:20px; padding-top:10px; text-align:left;" >



<div id="parentdiv">





  <div id="sql">


    <?php


if(isset($_GET['q']))


{

$d=$_GET['q'];



$sql="SELECT * FROM courses WHERE id = '$d'";


$result = mysqli_query($conn, $sql);



echo '<table>

<tr>



<td ><marquee behavior="alternate" onmouseover=stop() onmouseout=start() ><div class="register" style="background:url(images/Register-bg.png) no-repeat;"> <a href="reg_sis.php">Register For Demo Class</a> </div>



</marquee></td>



</tr>';



while($row = mysqli_fetch_array($result))



  {


  echo "<tr>";

  echo "<td>" . $row['content'] . "</td>";

  echo "</tr>";

  }



echo "</table>";

mysqli_close($conn);



}

else if(isset($_GET['b']))
	{
	
	echo '<marquee behavior="alternate" onmouseover=stop() onmouseout=start() ><div class="register" style="background:url(images/Register-bg.png) no-repeat;"> <a href="reg_sis.php">Register For Demo Class</a> </div></marquee>';
	 //$b = $_GET['b'] ;
	 
	//include 'scrum_and_agile.php' ;
	//include("Agile_Mainpage.php");
	$get=$_GET['b'];
	switch($get)
	{
	case 000:
	require("agile_mainpage.php");
	break;
case 111:
include("scrum-developer-certified.php");
break;
case 222:
include("scrum-master-certified.php");
break;
case 333:
include("scrum-product-owner-certified.php");
break;
case 444:
include("agile-expert-certified.php");
break;
case 555:
include("expert-scrum-master.php");
break;
case '4004':
include("prince2-foundation.php");
break;
case '4005':
include("prince2-practitioner.php");
break;
case '4003':
include("prince2-benifits.php");
break;
case '4001':
include("prince2-methodology-and-structure.php");
break;
case '4002':
include("why-prince2.php");
break;
case '4006':
include("prince2-combined-foundation-practitioner.php");
break;
case '5004':
include("itil_foundation.php");
break;
case '5003':
include("itil_course_outline.php");
break;
case '5002':
include("itil_course_material.php");
break;
case '5001':
include("itil_about.php");
break;
case '6001';
include("what_is_six_sigma.php");
break;
case '6008';
include("lean-six-sigma-black-belt.php");
break;
case '6007';
include("six_sigma_black_belt.php");
break;
case '6006';
include("six_sigma_green_belt.php");
break;
case '6003';
include("six_sigma_methodologies.php");
break;
case '6005';
include("six_sigma_yellow_belt.php");
break;
case '6004';
include("six_sigma_vs_traditional_qualities.php");
break;
case '6002';
include("why_get_six_sigma_certified.php");
break;
}

	}	
else
   {
	include 'project_management_home.html';
	}




?>



</div></div>

<div>&nbsp;</div><hr/>




<div class="fb-comments" data-href="http://www.sisoft.in/training/soft_skill.php?a=<?php echo $_GET['a']; ?>" data-width="750" data-numposts="5" data-colorscheme="light"></div>










	</td>


</tr>



</table>







</div>

<div style="clear:both;"></div>

<div id="orange-footer">

   <div class="orange-footer">	  

      <?php include 'footer.php';?>  

   </div>

</div>   



</div>

</body>



</html>



