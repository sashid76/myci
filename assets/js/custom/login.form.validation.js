jQuery.noConflict()(function($){

    var ajaxFormSubmit = function(container, type, url, formData){
        $.ajax({
            beforeSend: function(jqXHR){
                //$('#loadingMsg').html('<img src="http://ss2.olympia.edu.my/assets/img/loader/loader3.gif" />');
                console.log(container + " start")
                $('#' + container).html('<img src="http://localhost/ci304/assets/img/custom/loader/mini-loader.gif" />');
            },
            type: type, 
            url: url,
            data : formData,
            timeout: 10000,
            async: false,
            statusCode: {
                400: function(){
                    alert("Request cannot be fulfilled due to bad syntax!");
                },
                401: function(){
                    alert("Authentication is possible but has failed!");
                },
                402: function(){
                    alert("Payment required, reserved for future use!");
                },
                403: function(){
                    alert("Server refuses to respond to request!");
                },
                404: function(){
                    alert("Requested resource/page could not be found!");
                },
                405: function(){
                    alert("Request method not supported by that resource!");
                },
                406: function(){
                    alert("Content not acceptable according to the Accept headers!");
                },
                407: function(){
                    alert("Client must first authenticate itself with the proxy!");
                },                                                                                                                                                
                408: function(){
                    alert("Server timed out waiting for the request!");
                }, 
                409: function(){
                    alert("Request could not be processed because of conflict!");
                },                         
                410: function(){
                    alert("Resource is no longer available and will not be available again!");
                }, 
                411: function(){
                    alert("Request did not specify the length of its content!");
                }, 
                412: function(){
                    alert("Server does not meet request preconditions!");
                }, 
                413: function(){
                    alert("Request is larger than the server is willing or able to process!");
                }, 
                414: function(){
                    alert("URI provided was too long for the server to process!");
                }, 
                415: function(){
                    alert("Server does not support media type!");
                }, 
                416: function(){
                    alert("Client has asked for unprovidable portion of the file!");
                }, 
                417: function(){
                    alert("Server cannot meet requirements of Expect request-header field!");
                }, 
                418: function(){
                    alert("I'm a teapot!");
                }, 
                420: function(){
                    alert("Twitter rate limiting!");
                }, 
                422: function(){
                    alert("Request unable to be followed due to semantic errors!");
                }, 
                423: function(){
                    alert("Resource that is being accessed is locked!");
                }, 
                424: function(){
                    alert("Request failed due to failure of a previous request!");
                }, 
                426: function(){
                    alert("Client should switch to a different protocol!");
                }, 
                428: function(){
                    alert("Origin server requires the request to be conditional!");
                }, 
                429: function(){
                    alert("User has sent too many requests in a given amount of time!");
                }, 
                431: function(){
                    alert("Server is unwilling to process the request!");
                }, 
                444: function(){
                    alert("Server returns no information and closes the connection!");
                }, 
                449: function(){
                    alert("Request should be retried after performing action!");
                }, 
                450: function(){
                    alert("Windows Parental Controls blocking access to webpage!");
                }, 
                450: function(){
                    alert("The server cannot reach the client's mailbox.!");
                }, 
                499: function(){
                    alert("Connection closed by client while HTTP server is processing!");
                }, 
                500: function(){
                    alert("Generic error message!");
                }, 
                501: function(){
                    alert("Server does not recognise method or lacks ability to fulfill!");
                }, 
                502: function(){
                    alert("Server received an invalid response from upstream server!");
                }, 
                503: function(){
                    alert("Server is currently unavailable!");
                }, 
                504: function(){
                    alert("Gateway did not receive response from upstream server!");
                }, 
                505: function(){
                    alert("Server does not support the HTTP protocol version!");
                }, 
                506: function(){
                    alert("Content negotiation for the request results in a circular reference!");
                }, 
                507: function(){
                    alert("Server is unable to store the representation!");
                }, 
                508: function(){
                    alert("Server detected an infinite loop while processing the request!");
                }, 
                509: function(){
                    alert("Bandwidth limit exceeded!");
                }, 
                510: function(){
                    alert("Further extensions to the request are required!");
                }, 
                511: function(){
                    alert("Client needs to authenticate to gain network access!");
                }, 
                598: function(){
                    alert("Network read timeout behind the proxy !");
                }, 
                599: function(){
                    alert("Network connect timeout behind the proxy!");
                } 
            },                                                                         
            success: function(data, textStatus, jqXHR) {
    

                //setTimeout(function(){ 
                //    $('#' + container).empty();
                //}, 3000);

                //window.myAlertMsg('success', 'You have successfully logged into Resource Person Database. Every action on this site will be logged!');


                //alert('test');

                var obj = jQuery.parseJSON(data);
                alert(data.isLoggedIn);

                //alert(data.json);
                //console.log('my form data : ' + data.json);

                /*
                if (data.json == true)
                    alert('TRUE');
                else if (data.json == false)
                    alert('FALSE');
                else
                    alert('DONT KNOW');
                */                    

                if (jqXHR.readyState === 4 && jqXHR.status === 0) {                            
                    $('#' + container).append(textStatus);
                }else{
                    //datatype
                    if(datatype == 'html'){
                        $('#' + container).append(data);
                    }else if(datatype == 'json'){
                        $('#' + container).append(data.json);
                    }
                }
            },
            complete: function (jqXHR, textStatus) { 
                //$('#loadingMsg').hide('slow');
                console.log(container + " stop");
            },                    
            error: function(jqXHR, textStatus, errorThrown){
                //window.myAlertMsg('danger', 'Unsuccessfull login attempt, please try again!');
                $('#' + container).empty();
                if (textStatus !== null) {
                    $('#' + container).append(textStatus + " : " + errorThrown);
                }else if (errorThrown !== null) {
                    $('#' + container).append("Exception: " + errorThrown);
                }
                else {
                    $('#' + container).append("Error: " + errorThrown);
                }                        
            }                                      
        }).fail(function(jqXHR, textStatus, errorThrown){
            $('#' + container).append('<div class="alert alert-danger">.fail(): <br/> AJAX Request Failed<br/> textStatus='+textStatus+', errorThrown='+errorThrown+'</div>');
        }).done(function( data, textStatus, jqXHR ) {
            //alert("done");
        });        
    };

    $(document).ready(function(){

        if (jQuery.validator) {
            jQuery.validator.setDefaults({
              debug: true,
              errorClass: 'has-error',
              validClass: 'has-success',
              ignore: "",
              highlight: function (element, errorClass, validClass) {
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
              },
              unhighlight: function (element, errorClass, validClass) {
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                $(element).closest('.form-group').find('.help-block').text('');
              },
              errorPlacement: function (error, element) {
                $(element).closest('.form-group').find('.help-block').text(error.text());
              },
              submitHandler: function (form) {
                //if ($(form).valid()) {
                //  form.submit();
                //  //console.log("submitting form");
                //}
              }
            });
        }

//------------------------------------------------------------------------------------------------------------
    (function($) {
    $.fn.serializeFormJSON = function() {

       var o = {};
       var a = this.serializeArray();
       $.each(a, function() {
           if (o[this.name]) {
               if (!o[this.name].push) {
                   o[this.name] = [o[this.name]];
               }
               o[this.name].push(this.value || '');
           } else {
               o[this.name] = this.value || '';
           }
       });
       return o;
    };
    })(jQuery);

//------------------------------------------------------------------------------------------------------------
// Login form
        function loginForm(){

            var EmailAddress = $("#txtEmailAddress");
            var Password = $("#txtPassword");
            var LoginForm = $('#user_login_form');
            var SubmitBtn = $('#btnSignin');        

            LoginForm.validate({
              submitHandler: function(form) {
                if ($(form).valid()) {
                    form.submit();

                    //alert('start submit');

                    var myEmailAddress = $("#txtEmailAddress").val();
                    var myPassword = $("#txtPassword").val();
                    var cct = $("input[name=csrf_test_name]").val();
                    //var formData = {'csrf_test_name': cct, txtEmailAddress : myEmailAddress, txtPassword : myPassword};
                  
                    //var formData = {
                    //    name: $('#txtEmailAddress').val(),
                    //    email: $('#txtPassword').val()
                    //};

                    //var $form = $(this);
                    //var myData = $form.serializeFormJSON();

                    var myData = $('#user_login_form').serialize();
                    console.log(myData);

                    //var myData = $('#user_login_form').serializeArray();
                    //var myData = {'csrf_test_name': cct, txtEmailAddress : myEmailAddress, txtPassword : myPassword};
                    //var myData = JSON.parse(JSON.stringify(jQuery('#user_login_form').serializeArray()));
                    //console.log(formData);
                    //alert(formData);

                    //var MyData = JSON.parse(JSON.stringify(jQuery('#user_login_form').serializeArray())) // store json object

                    //alert(myEmailAddress);
                    //alert(myPassword);
                    //alert(cct);
                    //alert(formData);

                    //$("#login_data").text(formData);
                    //ajaxFormSubmit('login_data', 'POST', 'login', 'json', formData);
                    //alert('end submit');

                    //$.parseJSON(myData);
                    //alert(myData);
                    ajaxFormSubmit('login_data', 'POST', 'login', myData);

                    
                    //$.ajax({
                    //    type: "POST",
                    //    dataType: "json",
                    //    url: "login",
                    //    data: myData,
                    //    success: function(data, status) {
                    //      $('#login_data').html("Successfull!");
                    //    },
                    //    error: function(jqXHR, textStatus, errorThrown) { 
                    //        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    //    }                         
                    //  });


                    //$.ajax({                        
                    //    type: "POST",
                    //    dataType: "json";
                    //    url: "login",
                    //    data: myData, 
                    //    success: function(){  
                    //        $('#login_data').html("Successfull!");  
                    //    },
                    //    error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    //        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    //    }       
                    //});


                    //form.submit();
                    //alert('end submit');
                }
              }
            });

            EmailAddress.rules("add", {
              required: true,
              rangelength: [3, 20],
              email: true,
              messages: {
                required: "This is a required field, kindly provide a valid email address..",
                rangelength: "The range must be between 3 and 20 characters in length."
              }
            });

            Password.rules("add", {
              required: true,
              rangelength: [3, 20],
              messages: {
                required: "This is a required field, kindly provide a valid password.",
                rangelength: "The range must be between 3 and 20 characters in length."
              }
            });

            $('#user_login_form').submit(function () {
              if ($(this).valid()) {
                $('#btnSignin').prop('disabled', true);
                return true;
              }
              return false;
            });                
        };

        $("#btnSignin").click(function() {
            loginForm();
            var $btn = $(this);
            $btn.button('loading');
            // Then whatever you actually want to do i.e. submit form
            // After that has finished, reset the button state using
                setTimeout(function () {                    
                    $btn.button('reset');                            
            },  1000);           
        });
//------------------------------------------------------------------------------------------------------------



        /*
        var Username = $("#Username");
        var Password = $("#Password");
        var LoginForm = $('#LoginForm');
        var SubmitBtn = $('#SubmitBtn');
     
        LoginForm.validate();
     
        Username.rules("add", {
          required: true,
          rangelength: [3, 20],
          messages: {
            required: "You must provide your username.",
            rangelength: "The user name must be between 3 and 20 characters in length."
          }
        });
        Password.rules("add", {
          required: true,
          rangelength: [3, 20],
          messages: {
            required: "You must provide your password.",
            rangelength: "The user name must be between 3 and 20 characters in length."
          }
        });
     
        $('#LoginForm').submit(function () {
          if ($(this).valid()) {
            $('#SubmitBtn').prop('disabled', true);
            return true;
          }
          return false;
        });
        */

    });
});