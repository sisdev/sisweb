<div class="container-fluid footer">
<div class="container" style="margin-top:30px; margin-bottom:30px; font-size:13px">
			
            <div class="row">
                <div class="col-sm-3">
                <h5>About us</h5>
                  <p>Sisoft offers training and software solutions catering to the needs of enterprise, institute and individuals. Sisoft specializes in skilling and training people in areas of IT Technical, Project Management and Soft Skills.    </div>
                
                <div class="col-sm-3">
               <h5>Useful Link</h5>
                  <ul class="footer-nav">
                    <li style="margin-bottom:8px;"><a  href="index.php?page=1" >Home</a></li>
                    <li style="margin-bottom:8px;"><a href="about.php?page=2">About us</a></li>
                    <li style="margin-bottom:8px;"><a href="training-it-courses.php">Course Catalog</a></li>
                    <li style="margin-bottom:8px;" ><a href="career.php?career=1">Careers</a></li>
					<li style="margin-bottom:8px;"><a href="certifications.php">Certifications</a></li>
                    <li style="margin-bottom:8px;"><a href="contact-us.php?page=6">Contact us</a></li>
					<li style="margin-bottom:8px;"><a href="career.php?career=4" >Join as a Trainer</a></li>
                </ul>
                </div>
                
                
                <div class="col-sm-3">
                <h5>follow us</h5>
                  <ul class="list-inline">
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/SisoftTech/">
                                        <span class="social-icon-fb"></span>
                                    </a>
                                </li>
                                
                                <li>
                                    <a target="_blank" href="https://twitter.com/vrastogi1064">
                                        <span class="social-icon-twitter"></span>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.linkedin.com/company/sisoft-technologies">
                                        <span class="social-icon-linkedin"></span>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.youtube.com/channel/UCGnBLUUJqyXfzF1xEvoiCUg">
                                        <span class="social-icon-you"></span>
                                    </a>
                                </li>
                            </ul>
                            <p>Newsletter Subscribe</p>
                <form method="post">
                <input type="email" name="emailid" required placeholder="Enter Your Email" class="form-control">
                <input type="submit" name="submitletter" class="btn btn-orange" value="Submit" style="margin-top:10px; float:right">
            </form>
			<?php
			date_default_timezone_set('Asia/Kolkata');
			if(isset($_POST['submitletter']))
			{
			 $str_news_letter="insert into newsletter_subscribe (email,date_time,ip_address) values ('".$_POST['emailid']."','".date("Y-m-d H:i:s")."','".$_SERVER['REMOTE_ADDR']."') " ;
			// echo $str_news_letter ;
			mysqli_query($conn, $str_news_letter) or die(mysqli_error($conn));
			?>
			<script>
			alert("Newsletter successfully Subscribed: Thank you");
			</script>
			<?php
			}
			?>
			<div class="clearfix"></div>
                </div>
                
                <div class="col-sm-3">
                <h5>Contact us</h5>
                <p class="a">SRC E7-E8, Shipra Riviera, Gyan Khand-3,Indirapuram, Ghaziabad - 201012</p>
                <p class="p">+91-9540-283-283, +91-9999-283-283</p>
                <p class="w"><span class="txt_orange">www.sisoft.in  <i class="e"> info@sisoft.in</i></span></p>
               
                </div>
              <!--  <div align="right"><a class="btn" href="#" role="button" id="btn-back-to-top">Back To Top</a></div>-->
            </div>
        </div>

</div><!--footer--> 

<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1041332334;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1041332334/?guid=ON&amp;script=0"/>
</div>
</noscript>


 

<div class="footer_bottom_content">
                        	&copy; <strong>Sisoft Technologies</strong> 2015 All right reserved.</div>  