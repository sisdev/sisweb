

<style>
	#auto_modal .modal-dialog {
	position: fixed;
	margin: auto;
	width: 250px;
	height:20px;
	-webkit-transform: translate3d(0%, 0, 0);
		    -ms-transform: translate3d(0%, 0, 0);
		     -o-transform: translate3d(0%, 0, 0);
		        transform: translate3d(0%, 0, 0);
	}


	 .close {
	color:white;
	float: right !important;
    margin-right: -15px !important;
    margin-top: -40px !important;
    opacity: 1;
	display: none;
	background-color: red !important;
    border-radius: 15px !important;
    width: 30px !important;
    height: 30px !important;
	}
	
	#auto_modal #m_content {
	overflow-y: auto;
	}
	
	.modal .modal-body {
		padding: 15px 15px 80px;
	}
	
	#auto_modal.fade .modal-dialog {
		bottom: -260px;
		-webkit-transition: opacity 0.7s linear, bottom 0.7s ease-out;
		   -moz-transition: opacity 0.7s linear, bottom 0.7s ease-out;
		     -o-transition: opacity 0.7s linear, bottom 0.7s ease-out;
		        transition: opacity 0.7s linear, bottom 0.7s ease-out;
	}
	
	#auto_modal.fade.in .modal-dialog {
		bottom: 0;
		left: 350px;
		top: -222px;
	}
	#auto_modal.fade .modal-dialog {
		bottom: 0;
		left: 550px;
		top: -222px;
	}
	
	.inner-addon {
  position: relative;
}

/* style glyph */
.inner-addon .glyphicon {
  color:#428bca;
  position: absolute;
  padding: 10px;
  pointer-events: none;
}
.left-addon input  { padding-left:  30px; }
</style>

<div class="modal fade" id="auto_modal" data-keyboard="false" data-backdrop="static" role="dialog">
    <div class="modal-dialog modal-md" style="width:650px;">
	
      <!-- Modal content-->
      <div class="modal-content" id="m_content">
        <div class="modal-header" id="modal_header1" style="background:#006699; height:52px; text-align:center;">
		<h4 id='text' class='modal-title' style='color:#FFFFFF;'>Request a Call </h4>
		<button type='button' id='close_btn' class='close' data-dismiss='modal'>&times;</button>
        </div>
        <div class="modal-body" style="height:220px;">
    <form class="form-horizontal" name="reqcall" method="POST" enctype="multipart/form-data" id="req_call_back" onSubmit="alert('Success! Query succcessfully recieved thank you.');">
		<fieldset>
			<div class="form-group">
			<div class="col-md-6 inner-addon left-addon" style="margin-left:150px;">		
			<i class="glyphicon glyphicon-user"></i>
			<input id="get_name_req" name="name"  maxlength="25" placeholder="Enter Name*" class="form-control input-md" required="required" type="text" />
			</div>
			</div>

			<div class="form-group">
			<div class="col-md-6 inner-addon left-addon" style="margin-left:150px;">		
			<i class="glyphicon glyphicon-earphone"></i>
			<input id="get_phone_req" name="phone" maxlength="10" placeholder="Enter Phone No*" class="form-control input-md" required="required" type="text">
			</div>
			</div>

			<div class="form-group">
			<div class="col-md-6 inner-addon left-addon" style="margin-left:150px;">		
			<i class="glyphicon glyphicon-question-sign"></i>
			<input type="text" id="get_query_req" maxlength="40" name="query" class="form-control input-md" placeholder="Query For?*" required="required">
			</div>
			</div>	

			<div class="form-group"> 
			<button id="call_back" name="qry_for" class="btn btn-primary col-md-3" style="margin-left:240px;">Request Now</button> 
			</div>
		</fieldset>
	</form>
        </div>       
      </div>    
    </div>
  </div>
<script>
  $(document).ready(function(){
	 
	 $("#call_back").click(function(){
		var Name= $("#get_name_req").val();

		 var Mobile=$("#get_phone_req").val();
		 var qry_for=$("#get_query_req").val();
		 
		
	$.post("req_call_back_ajax.php",	
    {
        name:Name,
		phone:Mobile,
		query:qry_for,
    },
    function(data, status){
        //alert("Data: " + data + "\nStatus: " + status);
        //alert("Success! Query succcessfully recieved thank you.");

    });
});
	 
	$("#get_name_req").val("");
	$("#get_phone_req").val("");
	$("#get_query_req").val("");
	 
		 
  $("#req_call_back").submit(function(){
	  $(".close").trigger('click');
    $("#success").html("<div class='alert alert-success fade in'><a href='#' id='close_me' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Query succcessfully recieved thank you.</div>");
return false;
}); 

});
  </script>

<script>
  $(document).ready(function(){
	setTimeout(function(){
	  $('#auto_modal').modal('show'); 
	}, 30000);
	
	setTimeout(function() {
    $("#close_btn").show();
	}, 15000);	   
  });
</script> 