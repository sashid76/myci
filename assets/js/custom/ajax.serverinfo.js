jQuery.noConflict()(function($){

	var cpuUsage = function(){
        $.ajax({
            beforeSend: function(jqXHR){
                //$('#loadingMsg').html('<img src="http://ss2.olympia.edu.my/assets/img/loader/loader3.gif" />');
                console.log("cpu_usage start")
                //$('#cpu_usage').html('<img src="http://127.0.0.1/newci/assets/img/custom/loader/mini-loader.gif" />');
            },                    
            type: "GET", 
            url: "info/cpu",  
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
                $("#cpu_usage").empty();
                $("#cpu_error").empty();

                if (jqXHR.readyState === 4 && jqXHR.status === 0) {
                    $("#cpu_error").append(textStatus);
                }else{
	                $("#cpu_usage").append(parseFloat(data.usage) + ' %');

	                if(parseFloat(data.usage) < 1){	                	
						$("#cpu_usage_progress").removeClass('progress-bar progress-bar-danger');
						$("#cpu_usage_progress").addClass('progress-bar progress-bar-success');						
	                }else if(parseFloat(data.usage) > 1){
						$("#cpu_usage_progress").removeClass('progress-bar progress-bar-success');
						$("#cpu_usage_progress").addClass('progress-bar progress-bar-danger');
	                }

                    drawCPUUsage(parseFloat(data.usage));

	                $("#cpu_usage_progress").css('width', parseFloat(data.usage) + '%');
	                $("#cpu_usage_progress").html(parseFloat(data.usage) + ' %');
                }
            },
            complete: function (jqXHR, textStatus) { 
                //$('#loadingMsg').hide('slow');
                console.log("cpu_usage stop");
            },
            error: function(jqXHR, textStatus, errorThrown){
                $("#cpu_usage_usage").empty();
                $("#cpu_error").empty();

                if (textStatus !== null) {
                    $("#cpu_error").append(textStatus + " : " + errorThrown);
                }else if (errorThrown !== null) {
                    $("#cpu_error").append("Exception: " + errorThrown);
                }
                else {
                    $("#cpu_error").append("Error: " + errorThrown);
                }                        
            }
        }).fail(function(jqXHR, textStatus, errorThrown){
            $("#cpu_error").append('<div class="alert alert-danger">.fail(): <br/> AJAX Request Failed<br/> textStatus='+textStatus+', errorThrown='+errorThrown+'</div>');
        }).done(function( data, textStatus, jqXHR ) {
            //alert("done");
        });		
	}

    var cpuLoad = function(){
        $.ajax({
            beforeSend: function(jqXHR){
                //$('#loadingMsg').html('<img src="http://ss2.olympia.edu.my/assets/img/loader/loader3.gif" />');
                console.log("cpu_load start")
                //$('.cpu_load').html('<img src="http://127.0.0.1/newci/assets/img/custom/loader/mini-loader.gif" />');
            },                    
            type: "GET", 
            url: "info/cpuload",  
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
                $("#cpu_load").empty();
                $("#cpu_error").empty();

                if (jqXHR.readyState === 4 && jqXHR.status === 0) {
                    $("#cpu_error").append(textStatus);
                }else{
                    //$("#cpu_load").append(data.cpu_load);

                    var cpu_load_values = [];
                    $.each(data.cpu_load, function(i, item) {
                        cpu_load_values.push(data.cpu_load[i].nvalue);
                        
                        var cpu_load_graph = function() {
                            $('.cpu_load').sparkline(cpu_load_values,{fillColor: '#c0d0f0', lineColor: 'blue', type: 'line', width: '100%', height: '50'});
                        };
                        var cpu_load_resize;

                        $(window).resize(function(e) {
                                clearTimeout(cpu_load_resize);
                                cpu_load_resize = setTimeout(cpu_load_graph, 500);
                        });
                        cpu_load_graph();
                    })

                }
            },
            complete: function (jqXHR, textStatus) { 
                //$('#loadingMsg').hide('slow');
                console.log("cpu_load stop");
            },
            error: function(jqXHR, textStatus, errorThrown){
                $("#cpu_load").empty();
                $("#cpu_error").empty();

                if (textStatus !== null) {
                    $("#cpu_error").append(textStatus + " : " + errorThrown);
                }else if (errorThrown !== null) {
                    $("#cpu_error").append("Exception: " + errorThrown);
                }
                else {
                    $("#cpu_error").append("Error: " + errorThrown);
                }                        
            }
        }).fail(function(jqXHR, textStatus, errorThrown){
            $("#cpu_error").append('<div class="alert alert-danger">.fail(): <br/> AJAX Request Failed<br/> textStatus='+textStatus+', errorThrown='+errorThrown+'</div>');
        }).done(function( data, textStatus, jqXHR ) {
            //alert("done");
        });     
    }































	var memoryUsage = function(){
        $.ajax({
            beforeSend: function(jqXHR){
                //$('#loadingMsg').html('<img src="http://ss2.olympia.edu.my/assets/img/loader/loader3.gif" />');
                console.log("memory_usage start")
                //$('#memory_total').html('<img src="http://127.0.0.1/newci/assets/img/custom/loader/mini-loader.gif" />');
                //$('#memory_free').html('<img src="http://127.0.0.1/newci/assets/img/custom/loader/mini-loader.gif" />');
                //$('#memory_usage').html('<img src="http://127.0.0.1/newci/assets/img/custom/loader/mini-loader.gif" />');
                //$('#memory_percent').html('<img src="http://127.0.0.1/newci/assets/img/custom/loader/mini-loader.gif" />');
            },                    
            type: "GET", 
            url: "info/memory",  
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
                $("#memory_total").empty();
                $("#memory_free").empty();
                $("#memory_usage").empty();
                $("#memory_percent").empty();               
                $("#memory_error").empty();

                if (jqXHR.readyState === 4 && jqXHR.status === 0) {
                    $("#memory_error").append(textStatus);
                }else{
	                $("#memory_total").append(data.total);
	                $("#memory_free").append(data.free);
	                $("#memory_usage").append( data.usage);
	                $("#memory_percent").append(parseFloat(data.percent) + ' %');
	                $("#memory_usage_progress").css('width', parseFloat(data.percent) + '%');
	                $("#memory_usage_progress").html(parseFloat(data.percent) + ' %');

                    drawMemoryUsage(parseFloat(data.percent));
                }
            },
            complete: function (jqXHR, textStatus) { 
                //$('#loadingMsg').hide('slow');
                console.log("memory_usage stop");
            },
            error: function(jqXHR, textStatus, errorThrown){
                $("#memory_total").empty();
                $("#memory_free").empty();
                $("#memory_usage").empty();
                $("#memory_percent").empty();               
                $("#memory_error").empty();

                if (textStatus !== null) {
                    $("#memory_error").append(textStatus + " : " + errorThrown);
                }else if (errorThrown !== null) {
                    $("#memory_error").append("Exception: " + errorThrown);
                }
                else {
                    $("#memory_error").append("Error: " + errorThrown);
                }                        
            }
        }).fail(function(jqXHR, textStatus, errorThrown){
            $("#memory_error").append('<div class="alert alert-danger">.fail(): <br/> AJAX Request Failed<br/> textStatus='+textStatus+', errorThrown='+errorThrown+'</div>');
        }).done(function( data, textStatus, jqXHR ) {
            //alert("done");
        });		
	}

    var memoryLoad = function(){
        $.ajax({
            beforeSend: function(jqXHR){
                //$('#loadingMsg').html('<img src="http://ss2.olympia.edu.my/assets/img/loader/loader3.gif" />');
                console.log("memory_load start")
                //$('.memory_load').html('<img src="http://127.0.0.1/newci/assets/img/custom/loader/mini-loader.gif" />');
            },                    
            type: "GET", 
            url: "info/memoryload",  
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
                $("#memory_load").empty();
                $("#memory_error").empty();

                if (jqXHR.readyState === 4 && jqXHR.status === 0) {
                    $("#memory_error").append(textStatus);
                }else{
                    //$("#memory_load").append(data.memory_load);

                    var memory_load_values = [];
                    $.each(data.memory_load, function(i, item) {
                        memory_load_values.push(data.memory_load[i].nvalue);
                        
                        var memory_load_graph = function() {
                            $('.memory_load').sparkline(memory_load_values,{fillColor: '#c0d0f0', lineColor: 'red', type: 'line', width: '100%', height: '50'});
                        };
                        var memory_load_resize;

                        $(window).resize(function(e) {
                                clearTimeout(memory_load_resize);
                                memory_load_resize = setTimeout(memory_load_graph, 500);
                        });
                        memory_load_graph();
                    })

                }
            },
            complete: function (jqXHR, textStatus) { 
                //$('#loadingMsg').hide('slow');
                console.log("cpu_load stop");
            },
            error: function(jqXHR, textStatus, errorThrown){
                $("#cpu_load").empty();
                $("#cpu_error").empty();

                if (textStatus !== null) {
                    $("#cpu_error").append(textStatus + " : " + errorThrown);
                }else if (errorThrown !== null) {
                    $("#cpu_error").append("Exception: " + errorThrown);
                }
                else {
                    $("#cpu_error").append("Error: " + errorThrown);
                }                        
            }
        }).fail(function(jqXHR, textStatus, errorThrown){
            $("#cpu_error").append('<div class="alert alert-danger">.fail(): <br/> AJAX Request Failed<br/> textStatus='+textStatus+', errorThrown='+errorThrown+'</div>');
        }).done(function( data, textStatus, jqXHR ) {
            //alert("done");
        });     
    }










	var diskUsage = function(){
        $.ajax({
            beforeSend: function(jqXHR){
                //$('#loadingMsg').html('<img src="http://ss2.olympia.edu.my/assets/img/loader/loader3.gif" />');
                console.log("disk_usage start")
                //$('#disk_total').html('<img src="http://127.0.0.1/newci/assets/img/custom/loader/mini-loader.gif" />');
                //$('#disk_free').html('<img src="http://127.0.0.1/newci/assets/img/custom/loader/mini-loader.gif" />');
                //$('#disk_usage').html('<img src="http://127.0.0.1/newci/assets/img/custom/loader/mini-loader.gif" />');
                //$('#disk_percent').html('<img src="http://127.0.0.1/newci/assets/img/custom/loader/mini-loader.gif" />');
            },                    
            type: "GET", 
            url: "info/disk",  
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
                $("#disk_total").empty();
                $("#disk_free").empty();
                $("#disk_usage").empty();
                $("#disk_percent").empty();               
                $("#disk_error").empty();

                if (jqXHR.readyState === 4 && jqXHR.status === 0) {
                    $("#disk_error").append(textStatus);
                }else{
	                $("#disk_total").append(data.total);
	                $("#disk_free").append(data.free);
	                $("#disk_usage").append(data.usage);
	                $("#disk_percent").append(parseFloat(data.percent) + ' %');
	                $("#disk_usage_progress").css('width', parseFloat(data.percent) + '%');
	                $("#disk_usage_progress").html(parseFloat(data.percent) + ' %');

                    drawDiskUsage(parseFloat(data.percent));
                }
            },
            complete: function (jqXHR, textStatus) { 
                //$('#loadingMsg').hide('slow');
                console.log("network_usage stop");
            },
            error: function(jqXHR, textStatus, errorThrown){
                $("#disk_total").empty();
                $("#disk_free").empty();
                $("#disk_usage").empty();
                $("#disk_percent").empty();               
                $("#disk_error").empty();

                if (textStatus !== null) {
                    $("#disk_error").append(textStatus + " : " + errorThrown);
                }else if (errorThrown !== null) {
                    $("#disk_error").append("Exception: " + errorThrown);
                }
                else {
                    $("#disk_error").append("Error: " + errorThrown);
                }                        
            }
        }).fail(function(jqXHR, textStatus, errorThrown){
            $("#disk_error").append('<div class="alert alert-danger">.fail(): <br/> AJAX Request Failed<br/> textStatus='+textStatus+', errorThrown='+errorThrown+'</div>');
        }).done(function( data, textStatus, jqXHR ) {
            //alert("done");
        });		
	}

	var networkUsage = function(){
        $.ajax({
            beforeSend: function(jqXHR){
                //$('#loadingMsg').html('<img src="http://ss2.olympia.edu.my/assets/img/loader/loader3.gif" />');
                console.log("network_usage start")
                //$('#network_upload').html('<img src="http://127.0.0.1/newci/assets/img/custom/loader/mini-loader.gif" />');
                //$('#network_download').html('<img src="http://127.0.0.1/newci/assets/img/custom/loader/mini-loader.gif" />');
                //$('#network_upload_total').html('<img src="http://127.0.0.1/newci/assets/img/custom/loader/mini-loader.gif" />');
                //$('#network_download_total').html('<img src="http://127.0.0.1/newci/assets/img/custom/loader/mini-loader.gif" />');
            },                    
            type: "GET", 
            url: "info/network",  
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
                $("#network_upload").empty();
                $("#network_download").empty();
                $("#network_upload_total").empty();
                $("#network_download_total").empty();               
                $("#network_error").empty();

                if (jqXHR.readyState === 4 && jqXHR.status === 0) {
                    $("#network_error").append(textStatus);
                }else{
	                $("#network_upload").append(data.upload);
	                $("#network_download").append(data.download);
	                $("#network_upload_total").append(data.upload_total);
	                $("#network_download_total").append(data.download_total);

                    drawNetworkUpload(10);
                    drawNetworkDownload(16);
                    drawChart(10, 16);

                }
            },
            complete: function (jqXHR, textStatus) { 
                //$('#loadingMsg').hide('slow');
                console.log("network_usage stop");
            },
            error: function(jqXHR, textStatus, errorThrown){
                $("#network_upload").empty();
                $("#network_download").empty();
                $("#network_upload_total").empty();
                $("#network_download_total").empty();               
                $("#network_error").empty();

                if (textStatus !== null) {
                    $("#network_error").append(textStatus + " : " + errorThrown);
                }else if (errorThrown !== null) {
                    $("#network_error").append("Exception: " + errorThrown);
                }
                else {
                    $("#network_error").append("Error: " + errorThrown);
                }                        
            }
        }).fail(function(jqXHR, textStatus, errorThrown){
            $("#network_error").append('<div class="alert alert-danger">.fail(): <br/> AJAX Request Failed<br/> textStatus='+textStatus+', errorThrown='+errorThrown+'</div>');
        }).done(function( data, textStatus, jqXHR ) {
            //alert("done");
        });		
	}
	
	var seconds = 5;

	setInterval(function(){
	    cpuUsage();
        cpuLoad();
	    memoryUsage();
        memoryLoad();
	    diskUsage();
	    networkUsage();
	}, seconds * 1000);	
});