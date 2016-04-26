jQuery.noConflict()(function($){
    $(document).ready(function(){

        $.ajax({
            beforeSend: function(jqXHR){
                //$('#loadingMsg').html('<img src="http://ss2.olympia.edu.my/assets/img/loader/loader3.gif" />');
                console.log("ajxStart")
            },                 
            type: "GET", 
            url: "site.json",  
            dataType: "json",
            data: {},
            timeout: 10000,
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
                //data['site']['title']
                if (jqXHR.readyState === 4 && jqXHR.status === 0) {
                    //$("#ajaxcall1").html(textStatus);
                }else{
                    //$("#ajaxcall1").html(data);


                    //$('#myModal').modal('show');


                    if (data.site.maintenance == true)
                    {
                        var url = "maintenance.php";    
                        $(location).attr('href',url);                            
                        //alert("site under maintenance now!")                            
                    }
                    else
                    {      
                        $("#title").append(data.site.title + " :: " + data.site.name);
                        $("#name").append(data.site.name);
                        $("#lastupdate").append(data.settings.lastupdate);
                        $("#currentyear").append(data.settings.currentyear);
                        $("#currentversion").append(data.settings.currentversion);
    
                        $("#facebook").append(data.social.facebook);
                        $("#twitter").append(data.social.twitter);
                        $("#linked-in").append(data.social.linkedin);
                        $("#youtube").append(data.social.youtube);
                        $("#gplus").append(data.social.gplus);
     
                    }
                }
                //alert("json loaded successfully.")
            },
            complete: function (jqXHR, textStatus) { 
                //$('#loadingMsg').hide('slow');
                console.log("ajxStop");
            },                    
            error: function(jqXHR, textStatus, errorThrown){
                if (textStatus !== null) {
                    //$("#ajaxcall1").html("Error: " + textStatus);
                } else if (errorThrown !== null) {
                    //$("#ajaxcall1").html("Exception: " + errorThrown.message);
                }
                else {
                    alert("ERROR! Unable to load system settings," + errorThrown.messag + "!");
                }                       
            }                                      
        });

        //Cookies
        if($.cookies.test()){
            //var mycookie = $.cookies.get('isLoggedIn', { path: strPath, domain: strHostname });
            console.log('Cookies supported : Yes');                    
            var mycookie = $.cookies.get('isLoggedIn', { path: strPath, domain: strHostname });
            $("#mycookie").text(mycookie);

            if(mycookie === null){                        

                <?php if(!isActive($pageName, "login")){ ?>
                    $('#notification').html('<div class="alert alert-warning fade in"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Notice!</strong> You are not logged in, <a href="<?php echo base_url('login'); ?>">login</a> now to use this application!</div>');
                <?php }else{ ?>
                    $('#notification').html('<div class="alert alert-warning fade in"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Notice!</strong> You are not logged in, login now to use this application!</div>');
                <?php } ?>
                
                console.log(mycookie);                        
            }else if(mycookie == true){
                $('#notification').html('<div class="alert alert-success fade in"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Welcome!</strong> Welcome student portal. Every of your action on this portal will be recorded.</div></div>');
                console.log(mycookie);
            }else if(mycookie == false){                        
                $('#notification').html('<div class="alert alert-danger fade in"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Warning!</strong> Invalid login attempt, please try again!</div>');
                console.log(mycookie);
            }
            console.log($.cookies.get('ci_session'));
        }

    });
}); 