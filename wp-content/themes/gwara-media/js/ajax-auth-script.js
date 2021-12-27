jQuery(document).ready(function ($) {
	// Perform AJAX login/register on form submit
	$('form#login, form#register').on('submit', function (e) {

        $('p.status', this).show().text(ajax_auth_object.loadingmessage);
		action = 'ajaxlogin';
		username = 	$('form#login #username').val();
		password = $('form#login #password').val();
		email = '';
		security = $('form#login #security').val();
		ctrl = $(this);
		$.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajax_auth_object.ajaxurl,
            data: {
                'action': action,
                'username': username,
                'password': password,
				'email': email,
                'security': security
            },
            success: function (data) {
				$('p.status', ctrl).text(data.message);
				if (data.loggedin == true) {
					setTimeout(function () {
                    	document.location.reload();
                    }, 1000);
                }
            }
        });
        e.preventDefault();
    });
	
	// Perform AJAX forget password on form submit
	$('form#forgot_password').on('submit', function(e){

		$('p.status', this).show().text(ajax_auth_object.loadingmessage);
		ctrl = $(this);
		$.ajax({
			type: 'POST',
            dataType: 'json',
            url: ajax_auth_object.ajaxurl,
			data: { 
				'action': 'ajaxforgotpassword', 
				'user_login': $('#user_login').val(), 
				'security': $('#forgotsecurity').val(), 
			},
			success: function(data){					
				$('p.status',ctrl).text(data.message);
                setTimeout(function(){
					var modalRoot = $('.modal'),
						modalWindow = $('.modal-window');
					var showTrigger = $('.show-modal'),
						closeTrigger = ['.modal-close', modalRoot];
					var HideModal = function HideModal() {
						$(modalWindow).removeClass('opened');
						setTimeout(function () {
							$(modalRoot).fadeOut('fast');
						}, 400);
					};
                    HideModal()
                }, 2000);
			}
		});
		e.preventDefault();
		return false;
	});
	

});