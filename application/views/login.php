<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="../../favicon.ico">-->

    <title>Login :: AIBD :: Resource Person Database</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(CSS . "bootstrap.min.css"); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(CSS . "new-sticky-footer.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url(CSS . "custom.css"); ?>" rel="stylesheet">    

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- google font -->
    <link href='https://fonts.googleapis.com/css?family=Margarine' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css' />
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
    <link href='https://fonts.googleapis.com/css?family=Quattrocento+Sans:400,700,400italic,700italic|Doppio+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Bowlby+One+SC' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Days+One|Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Exo:800' rel='stylesheet' type='text/css'>    
    <!-- //google font -->

    <!-- fav and touch icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(ICO . "/favicon/apple-icon-57x57.png"); ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(ICO . "/favicon/apple-icon-60x60.png"); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(ICO . "/favicon/apple-icon-72x72.png"); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(ICO . "/favicon/apple-icon-76x76.png"); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(ICO . "/favicon/apple-icon-114x114.png"); ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(ICO . "/favicon/apple-icon-120x120.png"); ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(ICO . "/favicon/apple-icon-144x144.png"); ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(ICO . "/favicon/apple-icon-152x152.png"); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(ICO . "/favicon/apple-icon-180x180.png"); ?>">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url(ICO . "/favicon/android-icon-192x192.png"); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(ICO . "/favicon/favicon-32x32.png"); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(ICO . "/favicon/favicon-96x96.png"); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(ICO . "/favicon/favicon-16x16.png"); ?>">
    <link rel="shortcut icon" href="<?php echo base_url(ICO . "/favicon/favicon.png"); ?>">
    <link rel="manifest" href="<?php echo base_url(ICO . "/favicon/manifest.json"); ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo base_url(ICO . "/favicon/ms-icon-144x144.png"); ?>">
    <meta name="theme-color" content="#ffffff">
    <!-- //fav and touch icons -->

    <script type="text/javascript">
        var start = Date.now();
    </script>

    <script type="text/javascript">
        if (navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i)) {
            var viewportmeta = document.querySelector('meta[name="viewport"]');
            if (viewportmeta) {
                viewportmeta.content = 'width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0';
                document.body.addEventListener('gesturestart', function () {
                    viewportmeta.content = 'width=device-width, minimum-scale=0.25, maximum-scale=1.6';
                }, false);
            }
        }
    </script>

    <script type="text/javascript">
        var protocol =  self.location.protocol;
        var strhost = "//" + self.location.host;

        var startTime = (new Date()).getTime();

        var strHostname = window.location.hostname;
        var strPath ="";

        if(strHostname == 'localhost'){
            strPath = "/";
            console.log(strHostname);
        }else if(strHostname == window.location.hostname){
            strPath = "/";
            console.log(strHostname);
        }        
    </script>

    <style>
		.jumbotron {
		  position: absolute;
		  top: 50%;
		  left:50%;
		  transform: translate(-50%,-50%);
		  border: 1px dashed deeppink;
		}

        .wrapper {    
            margin-top: 80px;
            margin-bottom: 20px;
        }

        .form-signin {
          max-width: 420px;
          padding: 30px 38px 66px;
          margin: 0 auto;
          background-color: #eee;
          border: 3px dotted rgba(0,0,0,0.1);  
          }

        .form-signin-heading {
          text-align:center;
          margin-bottom: 30px;
        }

        .form-control {
          position: relative;
          font-size: 16px;
          height: auto;
          padding: 10px;
        }

        input[type="text"] {
          margin-bottom: 0px;
          border-bottom-left-radius: 0;
          border-bottom-right-radius: 0;
        }

        input[type="password"] {
          margin-bottom: 20px;
          border-top-left-radius: 0;
          border-top-right-radius: 0;
        }

        .colorgraph {
          height: 7px;
          border-top: 0;
          background: #c4e17f;
          border-radius: 5px;
          background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
          background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
          background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
          background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        }

    </style>

  </head>

  <body>
    
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="contact">Help</a></li>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container-fluid">
        <div class="wrapper">
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">&nbsp;</div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">

                <div class="float_box column_div">
                    <fieldset>
                        <legend><i class="fa fa-sign-in fa-1x"></i> Login</legend>

                        <?php 
                                $user_login_form = array(
                                    'method' => 'post',
                                    'accept-charset' => 'utf-8',
                                    'id' => 'user_login_form',
                                    'name' => 'user_login_form',
                                    'role' => 'form',
                                    'autocomplete' => 'off'); 

                        //echo form_open('/login/',$user_login_form); ?>

                        <form action="#"  method="post" accept-charset="utf-8" id="user_login_form" name="user_login_form" role="form" autocomplete="off">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                             <?php //echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash()); ?>

                            <div class="form-group">
                                <label for="txtEmailAddress">Email address</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input autofocus="autofocus" pattern="[^ @]*@[^ @]*" type="email" class="form-control" name="txtEmailAddress" id="txtEmailAddress" placeholder="Enter a valid email address">
                                </div>
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                                <label for="txtPassword">Password</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input type="password" class="form-control" name="txtPassword" id="txtPassword" onpaste="return false;" placeholder="Password">
                                </div>                            
                                <span class="help-block"></span>
                            </div>

                            <div style="padding-top:20px;" class="row">
                                    <div class="col-md-2">
                                        <div id="login_data"></div>
                                    </div>
                                <div class="col-md-10">
                                    <div class="form-group pull-right">
                                        <div>
                                            <!-- disabled="disabled"  -->
                                            <!--<button name="btnSignin" id="btnSignin" type="submit" class="btn btn-primary ladda-button" data-style="expand-right" value="true"><span class="ladda-label"><i class="fa fa-sign-in"></i> Signin</span></button>-->
                                            <button name="btnSignin" id="btnSignin" type="submit" class="btn btn-primary" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Signing in.." value="true"><i class="fa fa-sign-in"></i> Signin</button>
                                            &nbsp;
                                            <!--<button name="btnReset" id="btnReset" type="reset" class="btn btn-danger ladda-button" data-style="expand-right" value="true"><span class="ladda-label"><i class="fa fa-trash-o"></i> Reset</span></button>-->
                                            <button name="btnReset" id="btnReset" type="reset" class="btn btn-danger" value="true"><i class="fa fa-trash-o"></i> Reset</button>
                                        </div>                        
                                    </div>            
                                </div>
                            </div>

                        </form>
                        <?php //echo form_close(); ?>
                    </fieldset>
                </div>

            </div>
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">&nbsp;</div>
        </div>
    </div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url(JS . "bootstrap.min.js"); ?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
