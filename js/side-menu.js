// JavaScript Document


<!-- Side Menu -->
			$(document).ready(function(){		
				jQuery("#left-menu select").change(function() {
					window.location = jQuery(this).find("option:selected").val();
				});
				});