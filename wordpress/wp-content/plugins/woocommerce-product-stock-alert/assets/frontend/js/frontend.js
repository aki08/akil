jQuery(document).ready(function($) {
	var register_html;
	$(window).bind('woocommerce_variation_has_changed', function() {
	  $('.alert_container').css('display', 'none');
	  var child_data = {
	  	action: 'alert_box_ajax',
	  	child_id: $('.variation_id').val()
	  };
	  $.post(woocommerce_params.ajax_url, child_data, function(response) {
	  	if( response == 'true' ) {
	  		$('.alert_container').css('display', 'block');
	  	} else if( response == 'false' ) {
	  		$('.alert_container').css('display', 'none');
	  	}
	  });
	  initStockAlertVariation();
	});
	initStockAlert();
	
	function initStockAlert() {
		$('.stock_alert_button').off('click').on('click', function() {
			cus_email = $(this).parent().find('.stock_alert_email').val();
			pro_id = $(this).parent().find('.current_product_id').val();
			pro_title = $(this).parent().find('.current_product_name').val();
			register_box = $('.alert_container').html();
			
			alert_success = form_submission_text.alert_success;
			alert_email_exist = form_submission_text.alert_email_exist;
			valid_email = form_submission_text.valid_email;
			
			alert_success = alert_success.replace( '%product_title%', pro_title );
			alert_success = alert_success.replace( '%customer_email%', cus_email );
			
			alert_email_exist = alert_email_exist.replace( '%product_title%', pro_title );
			alert_email_exist = alert_email_exist.replace( '%customer_email%', cus_email );
			
			if( cus_email && validateEmail(cus_email) ) {
				var stock_alert = {
					action: 'alert_ajax',
					email: cus_email,
					product_id: pro_id
				}
				$.post(woocommerce_params.ajax_url, stock_alert, function(response) {
						
					if( response == '0' ) {
						$('.alert_container').html('<div class="registered_message">Some error occurs, Please <a href="'+window.location+'">Try again</a></div>');
					} else if( response == '/*?%already_registered%?*/' ) {
						$('.alert_container').html('<div class="registered_message">'+alert_email_exist+'</div>');
					} else {
						$('.alert_container').html('<div class="registered_message">'+alert_success+'</div>');
					}
				});
			} else {
				$('.alert_container').html('<div class="registered_message">'+valid_email+'</div>');
			}
		});
	}
	
	function initStockAlertVariation() {
		$('.stock_alert_button').off('click').on('click', function() {
			cus_email = $(this).parent().find('.stock_alert_email').val();
			variation_id = $(this).parent().parent().parent().find('.variation_id').val();
			pro_title = $(this).parent().find('.current_product_name').val();
			register_html = $('.alert_container').html();
			
			alert_success = form_submission_text.alert_success;
			alert_email_exist = form_submission_text.alert_email_exist;
			valid_email = form_submission_text.valid_email;
			
			alert_success = alert_success.replace( '%product_title%', pro_title );
			alert_success = alert_success.replace( '%customer_email%', cus_email );
			
			alert_email_exist = alert_email_exist.replace( '%product_title%', pro_title );
			alert_email_exist = alert_email_exist.replace( '%customer_email%', cus_email );
			
			if( cus_email && validateEmail(cus_email) ) {
				var stock_alert = {
					action: 'alert_ajax',
					email: cus_email,
					product_id: variation_id
				}
				$.post(woocommerce_params.ajax_url, stock_alert, function(response) {
						
					if( response == '0' ) {
						$('.alert_container').html('<div class="registered_message">Some error occurs, Please <a href="'+window.location+'">Try again</a></div>');
					} else if( response == '/*?%already_registered%?*/' ) {
						$('.alert_container').html('<div class="registered_message">'+alert_email_exist+'</div>');
					} else {
						$('.alert_container').html('<div class="registered_message">'+alert_success+'</div>');
					}
				});
			} else {
				$('.alert_container').html('<div class="registered_message">'+valid_email+'</div>');
			}
		});
	}
	
	function validateEmail(sEmail) {
		var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
		if (filter.test(sEmail)) {
			return true;
		} else {
			return false;
		}
	}
		
});