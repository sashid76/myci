jQuery.noConflict()(function($){

    var ajaxLoader = function(container, type, url, datatype){
        $.ajax({
            beforeSend: function(jqXHR){
                //$('#loadingMsg').html('<img src="http://ss2.olympia.edu.my/assets/img/loader/loader3.gif" />');
                console.log(container + " start")
                $('#' + container).html('<img src="http://127.0.0.1/rpdb/assets/img/custom/loader/mini-loader.gif" />');
            },
            type: type, 
            url: url,  
            dataType: datatype,
            data : {},
            timeout: 10000,
            async: false,
            contentType : 'application/html; charset=utf-8',                 
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
                $('#' + container).empty();
                
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
                $('#' + container).empty();
                
                if (textStatus !== null) {
                    $('#' + container).append(textStatus + " : " + errorThrown);
                }else if (errorThrown !== null) {
                    $('#' + container).append("Exception: " + errorThrown);
                } else {
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

        ajaxLoader('socials', 'GET', 'socials', 'html');
        ajaxLoader('ajaxcall1', 'GET', 'home/ajaxcall1', 'html');
        ajaxLoader('ajaxcall2', 'GET', 'home/ajaxcall2', 'json');

         $("#myapp").click(function(e) {
            e.preventDefault();
            
            ajaxLoader('ajaxcall3', 'GET', 'home/ajaxcall3', 'html');            
         });

        /*
        $.ajax({
            beforeSend: function(jqXHR){
                //$('#loadingMsg').html('<img src="http://ss2.olympia.edu.my/assets/img/loader/loader3.gif" />');
                console.log("socials start")
                $('#socials').html('<img src="http://127.0.0.1/newci/assets/img/custom/loader/mini-loader.gif" />');
            },
            type: "GET", 
            url: "http://127.0.0.1/newci/socials",  
            dataType: "html",
            data : {},
            timeout: 10000,
            async: false,
            contentType : 'application/html; charset=utf-8',                    
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
                $("#socials").empty();
                if (jqXHR.readyState === 4 && jqXHR.status === 0) {                            
                    $("#socials").append(textStatus);
                }else{
                    $("#socials").append(data);
                }
            },
            complete: function (jqXHR, textStatus) { 
                //$('#loadingMsg').hide('slow');
                console.log("socials stop");
            },                    
            error: function(jqXHR, textStatus, errorThrown){
                $("#socials").empty();
                if (textStatus !== null) {
                    $("#socials").append(textStatus + " : " + errorThrown);
                }else if (errorThrown !== null) {
                    $("#socials").append("Exception: " + errorThrown);
                }
                else {
                    $("#socials").append("Error: " + errorThrown);
                }                        
            }                                      
        }).fail(function(jqXHR, textStatus, errorThrown) 
        {
            $("#socials").append('<div class="alert alert-danger">Inside fail(): <br/> AJAX Request Failed<br/> textStatus='+textStatus+', errorThrown='+errorThrown+'</div>');
        }).done(function( data, textStatus, jqXHR ) {
            //alert("done");
        });
        */

        /*
        $.ajax({
            beforeSend: function(jqXHR){
                //$('#loadingMsg').html('<img src="http://ss2.olympia.edu.my/assets/img/loader/loader3.gif" />');
                console.log("ajaxcall1 start")
                $('#ajaxcall1').html('<img src="http://127.0.0.1/newci/assets/img/custom/loader/mini-loader.gif" />');
            },
            type: "GET", 
            url: "http://127.0.0.1/newci/home/ajaxcall1",  
            dataType: "html",
            data : {},
            timeout: 10000,
            async: false,
            contentType : 'application/html; charset=utf-8',                    
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
                $("#ajaxcall1").empty();
                if (jqXHR.readyState === 4 && jqXHR.status === 0) {                            
                    $("#ajaxcall1").append(textStatus);
                }else{
                    $("#ajaxcall1").append(data);
                }
            },
            complete: function (jqXHR, textStatus) { 
                //$('#loadingMsg').hide('slow');
                console.log("ajaxcall1 stop");
            },                    
            error: function(jqXHR, textStatus, errorThrown){
                $("#ajaxcall1").empty();
                if (textStatus !== null) {
                    $("#ajaxcall1").append(textStatus + " : " + errorThrown);
                }else if (errorThrown !== null) {
                    $("#ajaxcall1").append("Exception: " + errorThrown);
                }
                else {
                    $("#ajaxcall1").append("Error: " + errorThrown);
                }                        
            }                                      
        }).fail(function(jqXHR, textStatus, errorThrown) 
        {
            $("#ajaxcall1").append('<div class="alert alert-danger">Inside fail(): <br/> AJAX Request Failed<br/> textStatus='+textStatus+', errorThrown='+errorThrown+'</div>');
        }).done(function( data, textStatus, jqXHR ) {
            //alert("done");
        });
        */

        /*
        $.ajax({
            beforeSend: function(jqXHR){
                //$('#loadingMsg').html('<img src="http://ss2.olympia.edu.my/assets/img/loader/loader3.gif" />');
                console.log("ajaxcall2 start")
                $('#ajaxcall2').html('<img src="http://127.0.0.1/newci/assets/img/custom/loader/mini-loader.gif" />');
            },                    
            type: "GET", 
            url: "http://127.0.0.1/newci/home/ajaxcall2",  
            dataType: "json",
            data : {},
            timeout: 10000,
            async: false,
            contentType : 'application/json; charset=utf-8',
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
                $("#ajaxcall2").empty();
                if (jqXHR.readyState === 4 && jqXHR.status === 0) {
                    $("#ajaxcall2").append(textStatus);
                }else{
                    $("#ajaxcall2").append(data.json);
                }
            },
            complete: function (jqXHR, textStatus) { 
                //$('#loadingMsg').hide('slow');
                console.log("ajaxcall2 stop");
            },
            error: function(jqXHR, textStatus, errorThrown){
                $("#ajaxcall2").empty();
                if (textStatus !== null) {
                    $("#ajaxcall2").append(textStatus + " : " + errorThrown);
                }else if (errorThrown !== null) {
                    $("#ajaxcall2").append("Exception: " + errorThrown);
                }
                else {
                    $("#ajaxcall2").append("Error: " + errorThrown);
                }                        
            }
        }).fail(function(jqXHR, textStatus, errorThrown) 
        {
            $("#ajaxcall2").append('<div class="alert alert-danger">Inside fail(): <br/> AJAX Request Failed<br/> textStatus='+textStatus+', errorThrown='+errorThrown+'</div>');
        }).done(function( data, textStatus, jqXHR ) {
            //alert("done");
        });
        */

        /*
        $("#myapp").click(function() {
            $.ajax({
                beforeSend: function(jqXHR){
                    //$('#loadingMsg').html('<img src="http://ss2.olympia.edu.my/assets/img/loader/loader3.gif" />');
                    console.log("ajaxcall3 start")
                    $('#ajaxcall3').html('<img src="http://127.0.0.1/newci/assets/img/custom/loader/mini-loader.gif" />');
                },                        
                type: "GET", 
                url: "http://127.0.0.1/newci/home/ajaxcall3",  
                dataType: "html",
                data : {},
                timeout: 10000,
                async: false,
                contentType : 'application/html; charset=utf-8',
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
                success: function(data, textStatus, jqXHR){
                    $("#ajaxcall3").empty();
                    if (jqXHR.readyState === 4 && jqXHR.status === 0) {
                        $("#ajaxcall3").append(textStatus);
                    }else{
                        $("#ajaxcall3").append(data);                                
                    }
                },
                complete: function (jqXHR, textStatus) { 
                    //$('#loadingMsg').hide('slow');
                    console.log("ajaxcall3 stop");
                },
                error: function(jqXHR, textStatus, errorThrown){
                    $("#ajaxcall3").empty();
                    if (textStatus !== null) {
                        $("#ajaxcall3").append(textStatus + " : " + errorThrown);
                    }else if (errorThrown !== null) {
                        $("#ajaxcall3").append("Exception: " + errorThrown);
                    }else {
                        $("#ajaxcall3").append("Error: " + errorThrown);
                    }
                }
            }).fail(function(jqXHR, textStatus, errorThrown) 
            {
                $("#ajaxcall3").append('<div class="alert alert-danger">Inside fail(): <br/> AJAX Request Failed<br/> textStatus='+textStatus+', errorThrown='+errorThrown+'</div>');
            }).done(function( data, textStatus, jqXHR ) {
                //alert("done");
            });

        });
        */

        $.ajax({
            beforeSend: function(jqXHR){
                //$('#loadingMsg').html('<img src="http://ss2.olympia.edu.my/assets/img/loader/loader3.gif" />');
                console.log("disk_space start")
                $('#disk_total_space').html('<img src="assets/img/custom/loader/mini-loader.gif" />');
                $('#disk_free_space').html('<img src="assets/img/custom/loader/mini-loader.gif" />');
                $('#disk_remaining_space').html('<img src="assets/img/custom/loader/mini-loader.gif" />');
            },                    
            type: "GET", 
            url: "statistics",  
            dataType: "json",
            data : {},
            timeout: 10000,
            async: false,
            contentType : 'application/json; charset=utf-8',
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
                $("#disk_total_space").empty();
                $("#disk_free_space").empty();
                $("#disk_remaining_space").empty();
                $("#disk_space_error").empty();

                if (jqXHR.readyState === 4 && jqXHR.status === 0) {
                    $("#disk_space_error").append(textStatus);
                }else{
                    $("#disk_total_space").append("Total disk : " + data.disk_total_space);
                    $("#disk_free_space").append("Total free  : " + data.disk_free_space);
                    $("#disk_remaining_space").append("Total used : " + data.disk_remaining_space);
                }
            },
            complete: function (jqXHR, textStatus) { 
                //$('#loadingMsg').hide('slow');
                console.log("disk_space stop");
            },
            error: function(jqXHR, textStatus, errorThrown){
                $("#disk_total_space").empty();
                $("#disk_free_space").empty();
                $("#disk_remaining_space").empty();
                $("#disk_space_error").empty();

                if (textStatus !== null) {
                    $("#disk_space_error").append(textStatus + " : " + errorThrown);
                }else if (errorThrown !== null) {
                    $("#disk_space_error").append("Exception: " + errorThrown);
                }
                else {
                    $("#disk_space_error").append("Error: " + errorThrown);
                }                        
            }
        }).fail(function(jqXHR, textStatus, errorThrown){
            $("#disk_space_error").append('<div class="alert alert-danger">.fail(): <br/> AJAX Request Failed<br/> textStatus='+textStatus+', errorThrown='+errorThrown+'</div>');
        }).done(function( data, textStatus, jqXHR ) {
            //alert("done");
        });









        function successHandler(data, textStatus, jqXHR){
            if (jqXHR.readyState === 4 && jqXHR.status === 0) {
                $("#ajaxcall3").html(textStatus);
            }else{
                $("#ajaxcall3").html(data);
            }
        };

        function errorHandler(jqXHR, textStatus, errorThrown){
            if (textStatus !== null) {
                $("#ajaxcall3").html("Error: " + textStatus + " : " + errorThrown.message);
            }else if (errorThrown !== null) {
                $("#ajaxcall3").html("Exception: " + errorThrown.message);
            }else {
                $("#ajaxcall3").html("Error: " + errorThrown.message);
            }
        };
       
    });
});