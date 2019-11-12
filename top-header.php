<?php
error_reporting(0);
session_start();
include("db/dbi.php");
$debug=false ;
if (!(isset($page))){
  $page=1 ;
}
  
?>
 <!--<script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>-->
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js" type="text/javascript">
</script>
 <script type="text/javascript" >
  function searchCourses(course)
  {
    if (course.length>1) 
    {
    $.ajax({  
      url: "search_courses.php",
      type: "post",
      data: {course:course} ,
      success: function (response) {         
         $("#searchOutput").html(response);
         $("#searchOutput").css("display","block"); 
      },
      error: function(jqXHR, textStatus, errorThrown) {
         console.log(textStatus, errorThrown);
      }
  
  
    });
    }
    else
    {
         $("#searchOutput").html("");
         $("#searchOutput").css("display","none");  
    }
  }
 </script>
 
 <!-- Google Analytics Code -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-101953780-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- End Google Analytics Code -->

 
 <style>
  .clear{clear:both;}
  
  div.query_btn {
    background: #08167c;
    color: #fff;
    font-size: 18px;
    font-weight: 40;
    height: auto;
    position: fixed;
    left: 0;
    text-align: center;
    text-decoration: none;
    top: 190px;
    width: 35px;
    z-index: 99;
    border-radius: 6px 0 0;
    -moz-border-radius: 6px 0 0;
    -webkit-border-radius: 6px 0 0;
}


.callActbtn{width:100%;float:left}
.phone_icon{
  background-color: #e87014;
    border-radius: 0 0 0 6px;
    display: block;
    height: 32px;
    right: 0;color:#fff;
    position: relative;
    top: 0px;
    width: 35px;
  font-size:22px;
  padding:1px;
  }
  .templatemo-top-menu{
    top:0px; position: relative;
  }
  .dropbtn{
    background: white;
    color:black;
    padding: 8px 10px;
  }
  .dropbtn:hover{
    background-color: #ff7600;
    color: white;
    font-weight: bold;
  }
  .dropbtn:focus{
    background-color: #ff7600;
    color: white;
    font-weight: bold;
  }
 </style>
<script>
$(document).ready(function(){
$('.callActbtn').click(function(){
  if(!$('.ph_num').is(":visible")){
    $('.ph_num').show();
        $(this).html('<i class="fa arrow_up">&#xf062;</i>');
  }else{
    $('.ph_num').hide();
        $(this).html('<i class="fa arrow_down">&#xf063;</i>');
  }
  return false;
});
});

</script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="query_btn">
<div class="phone_icon">
  <i class="fa icon_phone">&#xf095;</i>
</div>
<div class="query_contact">
<span class="ph_num">
9</br>9</br>9</br>9</br>2</br>8</br>3</br>2</br>8</br>3
</span>

<a href="" class="callActbtn" style="font-size:14px;color:#f26e09">
<i class="fa arrow_up">&#xf062;</i>
</a>

</div>
</div>
 <div class="templatemo-top-bar" id="templatemo-top">
            <div class="container">
                <div class="subheader">
    <div class="pull-left">
    <span class="glyphicon glyphicon-hand-right"></span>
                            Group Services: <a target="_blank" href="http://www.innoforia.com/" style="color:orange; font-weight:normal; font-size:12px;">Technology Consulting </a>
                    
                    </div>
                    <div class="pull-right">
                            <img src="images/phone.png" alt="phone">
                             +91-9999-283-283/9540-283-283
                    </div>
                    <div class="pull-right" >
                            <img src="images/email.png" alt="email">
                             info@sisoft.in
                    </div>
                </div>
            </div>
 </div>
 <div class="templatemo-top-menu">
            <div class="container">
                <!-- Static navbar -->
                <nav class="navbar navbar-default" >
                    <div class="container">
          
            <div class="row" style="display:block;">
                    <div class="navbar-header">
                                <button type="button" id="nav_icon_div" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="margin-top:70px;">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
								<span class="icon-bar"></span>
							
                                </button>
                                <a href="index.php" class="navbar-brand"><img src="images/logo-sisoft_2.jpg" class="d-sm-none d-md-block" alt="Sisoft Learning" title="Sisoft Learning" style="width:100%; height:auto;"/></a>
								<span style="font-size:5vw;color:#0C5394;"> Sisoft </span>
                    </div>
            
                    <div class="col-xm-12 col-sm-12 col-md-12 col-lg-5">
                        <div class="navbar-collapse collapse" id="templatemo-nav-bar">
                            <ul class="nav navbar-nav navbar-right" >
                              <li style="width: 100px; margin-right: 10px;"><a  href="index.php">HOME</a></li>
                <li style="width: 100px; margin-right: 10px;">
                <div class="dropdown">
                <button class="btn dropdown-toggle dropbtn" type="button" data-toggle="dropdown">TRAINING
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li ><a href="training-it-courses.php">IT Training</a></li>
                  <li ><a href="training-project-mgnt.php?a=30">Project Management Training</a></li>
                  <li ><a href="training-smac.php">Latest Technologies Training</a></li>
                  <li ><a href="training-softskills.php?a=201">Soft Skills Training</a></li>
                  <li ><a href="online_courses.php">Online Training</a></li>
                </ul>
              </div></li>                                
                        <li style="width: 100px; margin-right: 10px;"> <a href="solutions.php">SOLUTIONS</a></li>
                        <li style="width: 100px; margin-right: 10px;"> <a href="recruit-from-sisoft.php">PLACEMENT</a></li>
                </ul>
              </div>
			  <br>
			  <div id='search_div'>
                <Input id="searchCourse" type ="text" placeholder="Search here for courses" style="float: right; width:300px; padding:5px 4px; margin-top:3px;margin-left: 50px" onKeyUp="searchCourses(this.value)">
                <div id="searchOutput" style="float: right; width:300px; height:auto; display:none; z-index:1; border:1px solid gray;margin-left: 50px">
				</div>                
              </div>

              </div>
			  
			  <div class="col-xm-12 col-sm-12 col-md-12 col-lg-3" style="margin-left:5%;">
              <?php  if($_SESSION['login'])  {  ?>
                <li class="click pull-right" style="background:none; list-style:none;">
				 <button type="button" class="btn btn-primary" style="background:none; color:#262525; border:none; text-align:right; padding-left:0px; margin-top:1px;  margin-left:3%;">
                 <?php echo $_SESSION['login']; ?></button>
				 
                  <ul style="list-style:none; margin-top:-5px;  padding-left:0px; text-align:center; width:100%;">
				    <li style="float:right; background:#129608; padding:5px;margin-left:5px;"><a href="index.php?session=1">Log Out</a></li>

                    <li style="float:right; background:#129608; padding:5px; margin-right:5px;"><a href="mysisoft.php">My Sisoft</a></li>
                      <div class="clear"></div>
                  </ul>
                </li>
              
              <?php  } else {  ?>
                 <li class="click" style="text-align:right; background:none; list-style:none; padding-top:12px;  width:auto;"> 
                <button  type="button"  id="loginBttn" class="btn btn-primary btn-md" data-toggle="modal" data-target="#login">Login</button></li>
      <?php  }  ?>
                
				<br>
               <div class="pull-right">
                  <a href="reg-sis.php"><span style="background:#CC6600; color:#FFFFFF; padding:5px 8px 5px 8px; margin-top:3px; font-size:15px;margin-bottom:5px; ">Request for more information</span></a>
                </div>

				
</div>

               
                </div><!--/.navbar -->
            </nav> <!-- /container -->
        </div>
</div>