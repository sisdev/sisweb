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
	
 </style>
<!--
.form-group{
  position:relative;
width:0%;
  min-width:60px;
height:60px;
overflow:hidden;
transition: width 1s;
backface-visibility:hidden;
}
.form-group input.form-control{
  position:absolute;
  
  
  
  width:100%;
  height:60px;
  margin:0;
  z-index:10;
}

.form-control-submit,
.search-label{
  width:60px;
  height:60px;
  position:absolute;
  right:0;
  top:0;
  padding:0;
  margin:0;
  text-align:center;
  cursor:pointer;
  line-height:60px;
  background:white;
}
.form-control-submit{
  background:#fff; /*stupid IE*/
    opacity: 0;
  color:transparent;
  border:none;
  outline:none;
  z-index:-1;
}
.search-label{
  z-index:90;
}
.form-group.sb-search-open,
.no-js .sb-search-open{
  width:40%;
}
.form-group.sb-search-open .search-label,
.no-js .sb-search .search-label {
	background: #da6d0d;
	color: #fff;
	z-index: 11;
}
.form-group.sb-search-open .form-control-submit,
.no-js .form-control .form-control-submit {
	z-index: 90;
}
 
<script>
$(document).ready(function(){
  $('#search').on("click",(function(e){
  $(".form-group").addClass("sb-search-open");
    e.stopPropagation()
  }));
   $(document).on("click", function(e) {
    if ($(e.target).is("#search") === false && $(".form-control").val().length == 0) {
      $(".form-group").removeClass("sb-search-open");
    }
  });
    $(".form-control-submit").click(function(e){
      $(".form-control").each(function(){
        if($(".form-control").val().length == 0){
          e.preventDefault();
          $(this).css('border', '2px solid red');
        }
    })
  })
})
</script>-->
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
 <div class="templatemo-top-menu" style="top;0px; position: relative;">
            <div class="container">
                <!-- Static navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
					
						<div class="row" style="display:block;">
                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <a href="index.php" class="navbar-brand"><img src="images/logo.png" alt="Sisoft Learning" title="Sisoft Learning" width="230" /></a>
                        </div>
						
                        <div class="col-xm-12 col-sm-12 col-md-12 col-lg-7" style="padding-right:0px;">
                        <div class="navbar-collapse collapse" id="templatemo-nav-bar">
                            <ul class="nav navbar-nav navbar-right" style="margin-top:16px;">
                                <li <?php if($page==1) echo "class=active"; ?> ><a  href="index.php">HOME</a></li>
								<li  <?php if($page==4 ||  isset($_GET['a'])) echo "class=active"; ?>><a href="training-it-courses.php">ALL COURSES</a></li>
                                <li <?php if($page==3 ) echo "class=active"; ?>><a href="online_courses.php">ONLINE COURSES</a></li>
                                <li> <a href="recruit-from-sisoft.php">PLACEMENT</a></li>
								</ul>
							</div>
							</div>
							<?php
							 if($_SESSION['login'])  {
								?>
								<div class="col-xm-12 col-sm-12 col-md-12 col-lg-2" style="margin-left:6%;">
								<li class="click" style="background:none; list-style:none;"><button type="button" class="btn btn-primary" style="background:none; color:#262525; border:none; text-align:center; padding-left:0px; margin-top:1px;  margin-left:3%;">
								<?php echo $_SESSION['login']; ?></button>
									<ul style="list-style:none; margin-top:-5px;  padding-left:0px; text-align:center; width:100%;">
										<li style="float:left; background:#129608; padding:5px; margin-right:5px;"><a href="mysisoft.php">My Sisoft</a></li>
										<li style="float:left; background:#129608; padding:5px;"><a href="index.php?session=1">Log Out</a></li>
											<div class="clear"></div>
									</ul>
								</li>
							</div>
                                 <?php 																 
							 }
							 else
							 {
							 ?>
							  <div class="col-xm-12 col-sm-12 col-md-12 col-lg-2">
                                <li class="click" style="float:right; background:none; list-style:none; padding-top:12px;  width:auto;"> 
								<button  type="button"  id="loginBttn" <?php if(isset($_POST['login']) || isset($_POST['reg']) || isset($_SESSION['login'])) echo "style=display:none"; ?>  class="btn btn-primary btn-md" data-toggle="modal" data-target="#login">Login</button></li>
								

</div>
			<?php 
			}
			 ?>
</div> 
							 
						<!--paste code will goes here-->
						<!--<div style="text-align:center;">-->
						<div class="row" style="display:block;">
						
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
						</div>
		<!--				<form class="search-form" role="search">
        <div class="form-group pull-right" id="search">
          <input type="text" class="form-control" placeholder="Search">
          <button type="submit" class="form-control form-control-submit">Submit</button>
          <span class="search-label"><i class="glyphicon glyphicon-search"></i></span>
        </div>
      </form> -->
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
								<Input id="searchCourse" type ="text" placeholder="Search here for courses" style="width:300px; padding:5px 4px; margin-top:3px;" onKeyUp="searchCourses(this.value)">
								<div id="searchOutput" style="width:300px; height:auto; display:none; z-index:1; border:1px solid gray;"></div>
								
						<!--</div>-->
							</div>
							
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
								<div class="more-information pull-right">
									<a href="reg_sis.php"><p style="background:#CC6600; color:#FFFFFF; padding:5px 8px 5px 8px; margin-top:3px; font-size:15px; font-family:Arial; margin-bottom:12px;">Request for more information</p></a>
								</div>
						    </div>
						</div>
						
						
						
                   <!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>
</div>