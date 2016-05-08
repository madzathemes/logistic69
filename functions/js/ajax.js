
jQuery.noConflict(); 
jQuery(document).ready(function($) {
	"use strict";
	function contact_ajax(){
        var fname = jQuery('#fname').val();
		var email = jQuery('#email').val();
		var phone = jQuery('#phone').val();
		var message = jQuery('#message').val();
		var cost_calculator_email = $('#cost_calculator_email').val();
		var more_info = jQuery('#cost_calculator_content').val();
		var cost = jQuery('#cost').val();
		var data = {
		  		action: 'contact_ajax',
		  		security : MyAjax.security,
		  		fname: fname,
		  		email: email,
		  		phone: phone,
		  		message: message,
		  		cost: cost,
		  		cost_calculator_email: cost_calculator_email,
		  		more_info: more_info
		 };
		 
		 $.post(MyAjax.ajaxurl, data, function(response) {
				var parsed_json = jQuery.parseJSON(response);
				jQuery('.contact_ajax').hide();
				jQuery(".contact_ajax_response").html(parsed_json);
				
		});
		return false;
		
	}
	
	jQuery('#contact').submit( function(){
		jQuery('.contact_ajax').show();
		jQuery(".contact_ajax_response").html('');
		contact_ajax();
		return false;
	});
});