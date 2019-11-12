<?php

error_reporting(0);

session_start();

include("db/dbi.php");

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Redhat Offering in Ghaziabad </title>
<meta name="description" content="Redhat products protfoilio "/>
<meta name="keywords" content="Redhat products" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        
        <!-- Google Web Font Embed -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
        <link href="css/style.css"  rel='stylesheet' type='text/css'>
		<link href="css/slide.css" rel="stylesheet" type="text/css">
        <link href="css/style-costum.css" rel="stylesheet" type="text/css">      
        <link rel="shortcut icon" href="images/icon.png">
		
		<script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/script.js"  type="text/javascript"></script>
		<script src="js/side-menu.js" type="text/javascript"></script>

    <style type="text/css">

        .table {

            display: table;
			background:#FFFFFF;
			border-top:1px solid #ddd;
			border-left:1px solid #ddd;



        }



        .row {

            display: table-row;

			border: 1px gray;

        }



        .column {

            display: table-cell;

            vertical-align: middle;
			border-right:1px solid #ddd;
			border-bottom:1px solid #ddd;
		 	padding: 10px ;

        }  

		

		@media screen and (max-width:1000px){

			div#enroll .table .row .column{

			display:block ;

			}

		}

		

    </style>

    
</head>   
<body>

        
        <?php   
		
		$page = 3;
		include("top-header.php"); 
		
		?>

       <!-- login-->
		
       <?php include('login_reg.php'); ?>
       
  
       
<!--heading-->
<div class="container-fluid" style="background:#5bc0de; color:#fff">
<div class="container"><h2 style="padding:15px">Redhat Product Portfolio</h2></div>
</div><!--heading-->       
                  
<div class="container-fluid well">   
 
    <div class="container">
      
        <div class="row">
           
            <div class="col-lg-2">
			
				<aside class="left-sidebar">
						<div class="list-group">
								Offerings
						</div>
				</aside>

			
             </div><!--col-4-->
            
            <div class="col-lg-10">

			
			
				<div class="tab-content">
				
					<center><img src="images/redhat-logo.png" alt="redhat"/></center> 
					<p><h2><center>Sisoft is Channel Partner of redhat</center> </h2>
					<h4><center>Authorized provider of Redhat Services</center></h4></p>

				
					<div class="table" style="font-size:20px">

                         <div class="row" style="background:#428bca; color:#FFFFFF; text-align:center;">
				
							<div class="column"><strong>Offerings</strong></div>
							<div class="column"><strong>Competitive Products</strong></div>
							<div class="column"><strong>Redhat Offering</strong></div>
						</div>

						<div class="row">
							<div class="column"><strong>Operating system</strong></div>
							<div class="column">Microsoft Windows Server, Oracle Solaris, IBM AIX, HP/UX, SUSE Linux Enterprise Server, FusionSphere, Ubuntu</div>
							<div class="column">Red Hat Enterprise Linux</div>
						</div>

						<div class="row">
							<div class="column"><strong>PaaS</strong></div>
							<div class="column">Pivotal Cloud Foundry, Microsoft Azure, Amazon Web Services, Google App Engine, Salesforce Heroku</div>
							<div class="column">OpenShift by Red Hat</div>
						</div>

						<div class="row">
							<div class="column"><strong>Cloud orchestration</strong></div>
							<div class="column">VMware vRealize Suite, RightScale Cloud Management, BMC Cloud Lifecycle Management, Microsoft System Center 2012 R2</div>
							<div class="column">Red Hat CloudForms</div>
						</div>

						<div class="row">
							<div class="column"><strong>IaaS</strong></div>
							<div class="column">VMware vCloud Suite, HP Helion, Rackspace, VMware vCAC, VMware Integrated OpenStack (VIO), Mirantis</div>
							<div class="column">Red Hat Cloud Infrastructure, RHEL OpenStack Platform, Red Hat Satellite</div>
						</div>

						<div class="row">
							<div class="column"><strong>Virtualization</strong></div>
							<div class="column">VMware vSphere, Microsoft Hyper-V 2012</div>
							<div class="column">Red Hat Enterprise Virtualization</div>
						</div>

						<div class="row">
							<div class="column"><strong>Storage</strong></div>
							<div class="column">NetApp, EMC (Isilon, ScaleIO, ECS, ViPR), VMware Virtual SAN, Scality</div>
							<div class="column">Red Hat Gluster Storage, Red Hat Ceph Storage</div>
						</div>

						<div class="row">
							<div class="column"><strong>Application server</strong></div>
							<div class="column">Pivotal tc Server, VMware vFabric, Oracle WebLogic Server</div>
							<div class="column">Red Hat JBoss Enterprise Application Platform, Red Hat JBoss Web Server</div>
						</div>

						<div class="row">
							<div class="column"><strong>In-memory data grid</strong></div>
							<div class="column">IBM WebSphere eXtreme Scale, Oracle Coherence, Pivotal GemFire, Software AG Terracotta</div>
							<div class="column">Red Hat JBoss Data Grid</div>
						</div>

						<div class="row">
							<div class="column"><strong>ESB and application integration</strong></div>
							<div class="column">IBM Integration Bus, Oracle SOA Suite and ESB, MuleSoft AnyPoint Platform, Sonic ESB, Tibco ActiveMatrix</div>
							<div class="column">Red Hat JBoss Fuse</div>
						</div>
						<div class="row">
							<div class="column"><strong>Data virtualization and data services</strong></div>
							<div class="column">IBM InfoSphere Federation Server, Progress DataXtend SI, Composite Information Server, Denodo</div>
							<div class="column">Red Hat JBoss Data Virtualization</div>
						</div>
						<div class="row">
							<div class="column"><strong>Business rules and process automation</strong></div>
							<div class="column">IBM Operational Decision Manager and IBM Business Process Manager, Oracle SOA Suite and BPM Suite, Pegasystems Pega BPM, FICO Blaze Advisor</div>
							<div class="column">Red Hat JBoss BRMS, Red Hat JBoss BPM Suite</div>
						</div>
						<div class="row">
							<div class="column"><strong>Messaging</strong></div>
							<div class="column">IBM WebSphereMQ, Pivotal RabbitMQ, VMware vFabric, Tibco Enterprise Message Service</div>
							<div class="column">Red Hat JBoss A-MQ</div>
						</div>
						<div class="row">
							<div class="column"><strong>Systems management</strong></div>
							<div class="column">HP Server Automation, BMC BladeLogic, Microsoft System Center Configuration Manager</div>
							<div class="column">Red Hat Satellite</div>
						</div>
						<div class="row">
							<div class="column"><strong>Mobile</strong></div>
							<div class="column">IBM MobileFirst, SAP Mobile Platform, Kony Mobility Platform, Telerik Platform, AnyPresence</div>
							<div class="column">Red Hat Mobile Application Platform</div>
						</div>

					</div>
				</div>
			
            </div><!--col-9-->
                
        </div><!--row-->
	</div><!--container--><br>
</div><!--well-->


<?php include("footer.php"); ?>

</body>
</html>