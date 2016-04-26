    jQuery.noConflict()(function($){
    	$(document).ready(function(){

		    window.showAndDismissAlert = function(type, message){
		        var htmlAlert = '<div class="alert alert-' + type + ' fade in"><button type="button" class="close" data-dismiss="alert">&times;</button><strong><i class="fa fa-check-circle"></i></strong> ' + message + '</div>';

		        // Prepend so that alert is on top, could also append if we want new alerts to show below instead of on top.
		        $(".alert-messages").prepend(htmlAlert);

		        // Since we are prepending, take the first alert and tell it to fade in and then fade out.
		        // Note: if we were appending, then should use last() instead of first()
		        $(".alert-messages .alert").first().hide().fadeIn(200).delay(2000).fadeOut(1000, function () { $(this).remove(); });
		    };
    
    	});	
    });
    