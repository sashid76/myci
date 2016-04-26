jQuery.noConflict()(function($){
    $(document).ready(function() {    

        $(document).ajaxStart(function() {
                $('#loadingMsg').html('<img src="http://localhost/assets/img/loader/loader3.gif" />');
                $('#loadingMsg').show();
            }).ajaxSend(function() {
               //jqXHR.abort();
            }).ajaxComplete(function() {
                //setTimeout(function() {
                    $('#loadingMsg').hide();
                //},2000);
            }).ajaxStop(function() {
                //setTimeout(function() {
                    $('#loadingMsg').hide();
                //},2000);
            }).ajaxSuccess(function() {
                //setTimeout(function() {
                    $('#loadingMsg').hide();
                //},2000);
            }).ajaxError(function() {
                //setTimeout(function() {
                    $('#loadingMsg').hide();
                //},2000);
            });
    });
});