<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?>&nbsp;::&nbsp;<?php echo $this->config->item('org_short_name'); ?>&nbsp;::&nbsp;<?php echo $this->config->item('site_description'); ?></title>   
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="cache-control" content="max-age=3600" />
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">-->

    <meta name="description" content="<?php echo $this->config->item('site_description'); ?>">
    <meta name="keywords" content="<?php echo $this->config->item('site_keywords'); ?>">
    <meta name="author" content="<?php echo $this->config->item('site_author'); ?>">
    <meta name="author_email" content="<?php echo $this->config->item('site_author_email'); ?>">

    <meta property="og:title" content="<?php echo $title; ?>" /> 
    <meta property="og:site_name" content="<?php echo $this->config->item('site_title'); ?>" />
    <meta property="og:description" content="<?php echo $this->config->item('site_description'); ?>" />
    <meta property="og:url" content="<?php echo $this->config->item('site_url'); ?>" />
    <meta property="og:type" content="website" /> 

    <meta property="og:locale" content="en_GB" />
    <meta property="og:locale:alternate" content="en_US" />

    <meta property="og:image" content="assets/img/custom/aibd_logo.png" /> 
    <meta property="og:image:secure_url" content="assets/img/custom/aibd_logo.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="301" />
    <meta property="og:image:height" content="70" />

    <meta name="twitter:widgets:csp" content="on">

    <!-- dns prefetch & preconnect -->
    <link rel="preconnect" href="//www.google-analytics.com">    
    <link rel="preconnect" href="//google-analytics.com">
    <link rel="preconnect" href="//ajax.googleapis.com">
    <link rel="preconnect" href="//fonts.googleapis.com">
    <link rel="preconnect" href="//platform.twitter.com">
    <link rel="preconnect" href="//disqus.com">
    <link rel="preconnect" href="//maxcdn.bootstrapcdn.com">
    <link rel="preconnect" href="//cdn.datatables.net">
    <link rel="preconnect" href="//cdnjs.cloudflare.com">
    <link rel="preconnect" href="//cdn.rawgit.com">

    <link rel="dns-prefetch" href="//www.google-analytics.com">    
    <link rel="dns-prefetch" href="//google-analytics.com">
    <link rel="dns-prefetch" href="//ajax.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//platform.twitter.com">
    <link rel="dns-prefetch" href="//disqus.com">
    <link rel="dns-prefetch" href="//maxcdn.bootstrapcdn.com">
    <link rel="dns-prefetch" href="//cdn.datatables.net">
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="//cdn.rawgit.com">
    <!-- //dns prefetch & preconnect -->

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(CSS . "bootstrap.min.css"); ?>" rel="stylesheet">    
    <!-- //Bootstrap core CSS -->

    <!-- upload -->
    <link href="<?php echo base_url(CSS . "third-party/upload/bootstrap-fileupload.css"); ?>" rel="stylesheet">
    <!-- //upload -->

    <!-- font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link href="<?php echo base_url("assets/fonts/social_icons/css_sprite/css/apico-sprites.css"); ?>" rel="stylesheet">    
    <!--  //font -->

    <!-- datatables -->
    <!--
    <link href="http://datatables.net/release-datatables/extensions/Plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="http://www.datatables.net/release-datatables/extensions/TableTools/css/dataTables.tableTools.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.0.0/css/responsive.dataTables.min.css" rel="stylesheet">
    -->

    <!--
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/autofill/2.1.0/css/autoFill.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.1.0/css/buttons.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/colreorder/1.3.0/css/colReorder.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.2.0/css/fixedColumns.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.0/css/fixedHeader.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/keytable/2.1.0/css/keyTable.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.0.0/css/responsive.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowreorder/1.1.0/css/rowReorder.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/scroller/1.4.0/css/scroller.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.1.0/css/select.bootstrap.min.css"/>
    -->

    <link rel="stylesheet" type="text/css" href="assets/datatables/DataTables-1.10.11/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/datatables/AutoFill-2.1.1/css/autoFill.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="assets/datatables/Buttons-1.1.2/css/buttons.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/datatables/ColReorder-1.3.1/css/colReorder.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/datatables/FixedColumns-3.2.1/css/fixedColumns.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/datatables/FixedHeader-3.1.1/css/fixedHeader.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/datatables/KeyTable-2.1.1/css/keyTable.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/datatables/Responsive-2.0.2/css/responsive.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/datatables/RowReorder-1.1.1/css/rowReorder.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/datatables/Scroller-1.4.1/css/scroller.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/datatables/Select-1.1.2/css/select.bootstrap.min.css"/>    

    <!-- //datatables -->

    <!-- Datepicker -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Datepicker -->

    <!-- ladda -->
    <link rel="stylesheet" href="<?php echo base_url(CSS . "third-party/ladda/ladda-themeless.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url(CSS . "third-party/ladda/prism.css"); ?>">
    <!-- //ladda -->

    <!-- pace -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-corner-indicator.css">
    <!-- //pace -->

    <!-- formValidation -->
    <link rel="stylesheet" href="<?php echo base_url(CSS . "third-party/formValidation/formValidation.css"); ?>">
    <!-- //formValidation -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">

    <!-- rwd-table -->
    <link rel="stylesheet" href="<?php echo base_url(CSS . "third-party/rwd-table/rwd-table.min.css"); ?>">

    <!-- Toaster -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <style type="text/css">
        body {
            padding-top: 50px;
            padding-bottom: 0px;
        }

        div.DTTT { margin-bottom: 0.5em; float: right; }
        div.dataTables_wrapper { clear: both; }

        div.dataTables_filter {
            text-align: right;
            color: #5B92E5;
        }

        div.dataTables_filter label {
            font-weight: normal;
            white-space: nowrap;
            text-align: left;
        }

        div.dataTables_filter input {
            width: 16em;
            margin-left: 0.5em;
            display: inline-block;
            width: auto;
        }

        .modal-header {
            padding:9px 15px;
            border-bottom:1px solid #eee;
            background-color: #5B92E5;
            color: #ffffff;
            -webkit-border-top-left-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            -moz-border-radius-topleft: 5px;
            -moz-border-radius-topright: 5px;
             border-top-left-radius: 5px;
             border-top-right-radius: 5px;
         }

        .panel-heading .accordion-toggle:after {
            /* symbol for "opening" panels */
            font-family: 'Glyphicons Halflings';  /* essential for enabling glyphicon */
            content: "\e114";    /* adjust as needed, taken from bootstrap.css */
            float: right;        /* adjust as needed */
            color: grey;         /* adjust as needed */
        }
        .panel-heading .accordion-toggle.collapsed:after {
            /* symbol for "collapsed" panels */
            content: "\e080";    /* adjust as needed, taken from bootstrap.css */
        }

        div.alert-messages {
            position: fixed;
            top: 80px;
            left: 80%;
            right: 1%;
            z-index: 7000;
        }

        /* Gradient color1 - color2 - color1 */ 

        hr.style-one {
            border: 0; 
            height: 1px; 
            background: #333; 
            background-image: linear-gradient(to right, #ccc, #333, #ccc); 
        }

        /* Gradient transparent - color - transparent */ 

        hr.style-two {
            margin:-10px;
            border: 0; 
            height: 1px; 
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
        }

        hr.style-three {
            margin:-10px;
            border: 0; 
            height: 1px; 
            background-image: linear-gradient(to right, rgba(204, 204, 204, 0), rgba(255, 255, 255, 0.75), rgba(204, 204, 204, 0));
        }

        .breadcrumb {background: rgba(255, 255, 255, 0.99); border: 0px solid rgba(245, 245, 245, 1); border-radius: 10px; display: block;}
        .breadcrumb li {font-size: 14px;}
        .breadcrumb a {color: rgba(66, 139, 202, 1);}
        .breadcrumb a:hover {color: rgba(42, 100, 150, 1);}
        .breadcrumb>.active {color: rgba(153, 153, 153, 1);}
        .breadcrumb>li+li:before {color: rgba(204, 204, 204, 1); content: "\00bb\00a0";}
        
        @-moz-document url-prefix() {
          fieldset { display: table-cell; }
        }
                                   
    </style>

    <style type="text/css">
        #login-dp{
            min-width: 250px;
            padding: 14px 14px 0;
            overflow:hidden;
            background-color:rgba(255,255,255,.8);
        }
        #login-dp .help-block{
            font-size:12px    
        }
        #login-dp .bottom{
            background-color:rgba(255,255,255,.8);
            border-top:1px solid #ddd;
            clear:both;
            padding:14px;
        }
        #login-dp .social-buttons{
            margin:12px 0    
        }
        #login-dp .social-buttons a{
            width: 49%;
        }
        #login-dp .form-group {
            margin-bottom: 10px;
        }
        .btn-fb{
            color: #fff;
            background-color:#3b5998;
        }
        .btn-fb:hover{
            color: #fff;
            background-color:#496ebc 
        }
        .btn-tw{
            color: #fff;
            background-color:#55acee;
        }
        .btn-tw:hover{
            color: #fff;
            background-color:#59b5fa;
        }
        @media(max-width:768px){
            #login-dp{
                background-color: inherit;
                color: #fff;
            }
            #login-dp .bottom{
                background-color: inherit;
                border-top:0 none;
            }
        }

        .navbar-default .navbar-toggle:hover,
        .navbar-default .navbar-toggle:focus {
            background-color: #002E72;
        }

        .navbar-default .navbar-toggle {
            border-color: #002E72;
            background-color: #002E72;
        }

        .navbar-default .navbar-toggle .icon-bar {
            background-color: #ffffff;
        }

    </style>

<!-- Custom styles for this template -->
    <link href="<?php echo base_url(CSS . "sticky-footer.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url(CSS . "custom-datatable.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url(CSS . "custom.css"); ?>" rel="stylesheet">    
    <link href="<?php echo base_url(CSS . "plans.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url(CSS . "widgets.css"); ?>" rel="stylesheet">    
    <link href="<?php echo base_url(CSS . "multilevel-dropdown.css"); ?>" rel="stylesheet">
    <!-- //Custom styles for this template -->

    <!-- modernizr -->
    <script src="<?php echo base_url(JS . "libs/modernizr-2.6.2.min.js");?>"></script>
    <!-- //modernizr -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <!--<script src="assets/jsthird-party/html5shiv/html5shiv.js"></script>-->
      <!--<script src="assets/js/third-party/respond/respond.min.js"></script>-->
    <![endif]-->

    <!--[if lt IE 8]>
        <link href="assets/css/bootstrap-ie7.css" rel="stylesheet">
    <![endif]-->

    <!-- google font -->
    <!--
    <link href='https://fonts.googleapis.com/css?family=Margarine' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css' />
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
    <link href='https://fonts.googleapis.com/css?family=Quattrocento+Sans:400,700,400italic,700italic|Doppio+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Bowlby+One+SC' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Days+One|Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Exo:800' rel='stylesheet' type='text/css'>
    -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>    
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

    <style type="text/css" media="screen">
        body {
            font-family: 'Ubuntu', sans-serif;
        }

        /* dropdown over color */
        .dropdown-menu > li > a:hover,
        .dropdown-menu > li > a:focus {
          text-decoration: none;
          color: #002E72;
          background-color: #f5f5f5;
        }

        /* popover title color */
        .popover-title{
            color:#ffffff;         
        }

        /* popover close button */
        .popover-title .close{
            position: relative;
            bottom: 3px;
        }

        /* bs-callout */
        .bs-callout {
            padding: 20px;
            margin: 20px 0;
            border: 1px solid #eee;
            border-left-width: 5px;
            border-radius: 3px;
        }
        .bs-callout h4 {
            margin-top: 0;
            margin-bottom: 5px;
        }
        .bs-callout p:last-child {
            margin-bottom: 0;
        }
        .bs-callout code {
            border-radius: 3px;
        }
        .bs-callout+.bs-callout {
            margin-top: -5px;
        }
        .bs-callout-default {
            border-left-color: #777;
        }
        .bs-callout-default h4,
        .bs-callout-default a.alert-link {
            color: #777;
        }
        .bs-callout-primary {
            border-left-color: #428bca;
        }
        .bs-callout-primary h4,
        .bs-callout-primary a.alert-link {
            color: #428bca;
        }
        .bs-callout-info {
            border-left-color: #5bc0de;
        }
        .bs-callout-info h4,
        .bs-callout-info a.alert-link {
            color: #5bc0de;
        }
        .bs-callout-success {
            border-left-color: #5cb85c;
        }
        .bs-callout-success h4,
        .bs-callout-success a.alert-link {
            color: #5cb85c;
        }
        .bs-callout-warning {
            border-left-color: #f0ad4e;
        }
        .bs-callout-warning h4,
        .bs-callout-warning a.alert-link {
            color: #f0ad4e;
        }
        .bs-callout-danger {
            border-left-color: #d9534f;
        }
        .bs-callout-danger h4,
        .bs-callout-danger a.alert-link {
            color: #d9534f;
        }

        /* custom button - orange color */
        .btn-orange {
          background-color: #FFA500;
          border-color: #FFA500;
          color: #FFFFFF;
        }
        .btn-orange:hover,
        .btn-orange:focus,
        .btn-orange:active,
        .btn-orange.active {
          background-color: #e69500;
          border-color: #cc8400;
          color: #FFFFFF;
        }
        .btn-orange.disabled:hover,
        .btn-orange.disabled:focus,
        .btn-orange.disabled:active,
        .btn-orange.disabled.active,
        .btn-orange[disabled]:hover,
        .btn-orange[disabled]:focus,
        .btn-orange[disabled]:active,
        .btn-orange[disabled].active,
        fieldset[disabled] .btn-orange:hover,
        fieldset[disabled] .btn-orange:focus,
        fieldset[disabled] .btn-orange:active,
        fieldset[disabled] .btn-orange.active {
          background-color: #FFA500;
          border-color: #FFA500;
          color: #FFFFFF;
        }

        /* alert */
        .alert {
          border-radius: 0;
          -webkit-border-radius: 0;
          box-shadow: 0 1px 2px rgba(0,0,0,0.11);
          display: table;
          width: 100%;
        }

        .alert-white {
          background-image: linear-gradient(to bottom, #fff, #f9f9f9);
          border-top-color: #d8d8d8;
          border-bottom-color: #bdbdbd;
          border-left-color: #cacaca;
          border-right-color: #cacaca;
          color: #404040;
          padding-left: 61px;
          position: relative;
        }

        .alert-white.rounded {
          border-radius: 3px;
          -webkit-border-radius: 3px;
        }

        .alert-white.rounded .icon {
          border-radius: 3px 0 0 3px;
          -webkit-border-radius: 3px 0 0 3px;
        }

        .alert-white .icon {
          text-align: center;
          width: 45px;
          height: 100%;
          position: absolute;
          top: 0;
          left: 0;
          border: 1px solid #bdbdbd;
          padding-top: 15px;
        }


        .alert-white .icon:after {
          -webkit-transform: rotate(45deg);
          -moz-transform: rotate(45deg);
          -ms-transform: rotate(45deg);
          -o-transform: rotate(45deg);
          transform: rotate(45deg);
          display: block;
          content: '';
          width: 10px;
          height: 10px;
          border: 1px solid #bdbdbd;
          position: absolute;
          border-left: 0;
          border-bottom: 0;
          top: 50%;
          right: -6px;
          margin-top: -3px;
          background: #fff;
        }

        .alert-white .icon i {
          font-size: 20px;
          color: #fff;
          left: 12px;
          margin-top: -10px;
          position: absolute;
          top: 50%;
        }
        /*============ colors ========*/
        .alert-success {
          color: #3c763d;
          background-color: #dff0d8;
          border-color: #d6e9c6;
        }

        .alert-white.alert-success .icon, 
        .alert-white.alert-success .icon:after {
          border-color: #54a754;
          background: #60c060;
        }

        .alert-info {
          background-color: #d9edf7;
          border-color: #98cce6;
          color: #3a87ad;
        }

        .alert-white.alert-info .icon, 
        .alert-white.alert-info .icon:after {
          border-color: #3a8ace;
          background: #4d90fd;
        }


        .alert-white.alert-warning .icon, 
        .alert-white.alert-warning .icon:after {
          border-color: #d68000;
          background: #fc9700;
        }

        .alert-warning {
          background-color: #fcf8e3;
          border-color: #f1daab;
          color: #c09853;
        }

        .alert-danger {
          background-color: #f2dede;
          border-color: #e0b1b8;
          color: #b94a48;
        }

        .alert-white.alert-danger .icon, 
        .alert-white.alert-danger .icon:after {
          border-color: #ca452e;
          background: #da4932;
        }

        /* box shadow demo */
        .box-shadow-demo {
            background-color: #FFFFFF;
            height: 100%;
            width: 100%;
            margin-bottom: 10px auto;
        }
        .z-depth-1 {
            -webkit-box-shadow: 0 1px 4px 0 rgba(0,0,0,0.37);
            box-shadow: 0 1px 4px 0 rgba(0,0,0,0.37);
        }
        .z-depth-2 {
            -webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2),0 6px 10px 0 rgba(0,0,0,0.3);
            box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2),0 6px 10px 0 rgba(0,0,0,0.3);
        }
        .z-depth-3 {
            -webkit-box-shadow: 0 11px 7px 0 rgba(0,0,0,0.19),0 13px 25px 0 rgba(0,0,0,0.3);
            box-shadow: 0 11px 7px 0 rgba(0,0,0,0.19),0 13px 25px 0 rgba(0,0,0,0.3);
        }
        .z-depth-4 {
            -webkit-box-shadow: 0 14px 12px 0 rgba(0,0,0,0.17),0 20px 40px 0 rgba(0,0,0,0.3);
            box-shadow: 0 14px 12px 0 rgba(0,0,0,0.17),0 20px 40px 0 rgba(0,0,0,0.3);
        }
        .z-depth-5 {
            -webkit-box-shadow: 0 17px 17px 0 rgba(0,0,0,0.15),0 27px 55px 0 rgba(0,0,0,0.3);
            box-shadow: 0 17px 17px 0 rgba(0,0,0,0.15),0 27px 55px 0 rgba(0,0,0,0.3);
        }

        /* Panel refresh */
        .panel-refresh {
         height:250px;
         position:relative;
        }
         
        .refresh-container {
         position:absolute;
         top:0;
         right:0;
         background:rgba(200,200,200,0.25);
         width:100%;
         height:100%;
         display: none;
         text-align:center;
         z-index:4;
        }
        .refresh-spinner {
         padding: 30px;
         opacity: 0.8;
        }        

        /* toaster */
        .toast {
          background-color: #030303;
        }
        .toast-info {
          background-color: #3498db;
        }
        .toast-success {
          background-color: #51a351;
        }
        .toast-warning {
          background-color: #f39c12;
        }
        .toast-error {
          background-color: #e74c3c;
        }
        .toast-progress {
          position: absolute;
          left: 0;
          bottom: 0;
          height: 4px;
          background-color: #000000;
          opacity: 0.4;
          -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=40);
          filter: alpha(opacity=40);
        }

        /*
        #toast-container > .toast {
            background-image: none !important;
        }

        #toast-container > .toast:before {
            position: relative;
            font-family: FontAwesome;
            font-size: 24px;
            line-height: 18px;
            float: left;
            margin-left: -1em;
            color: #FFF;
            padding-right: 0.5em;
            margin-right: 0.5em;
        }

        #toast-container > .toast-warning:before {
            content: "\f003";
        }
        #toast-container > .toast-error:before {
            content: "\f001";
        }
        #toast-container > .toast-info:before {
            content: "\f005";
        }
        #toast-container > .toast-success:before {
            content: "\f002";
        }
        */                 
    </style>

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

  </head>
  <body>

    <div id="fb-root"></div>
    <script>
    /*
    (function(d, s, id) {     
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=668956136447768";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    */
    </script>

    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <!-- Wrap all page content here -->
    <div id="wrap">

    
    <!-- header -->
        <?php echo $header ?>
    <!-- /header -->
    <!-- social icon -->
        <div class="bs-old-docs" style="z-index:999; width:100%; background-color:#ffffff;" data-spy="affix" data-offset-top='50'>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2"><a href="<?php echo base_url("/home/") ?>"><img height="70px;" src="<?php echo base_url(); ?>assets/img/custom/aibd_logo.jpg" alt="logo" style="margin-bottom:7px; margin-top:7px;" /></a></div>
                    <div class="col-md-4 hidden-xs" style="margin-top:10px;">&nbsp;</div>
                    <div class="col-md-4" style="margin-top:10px;">
                    <!--<div style="padding-top: 10px;" id="notification"></div>-->
                    </div>
                    <div class="col-md-2 hidden-xs">
                        <ul class="list-inline pull-right apico">
                            <!--<li id="socials"></li>-->
                            <!--
                            <li>
                                <a href="#" role="button" class="btn btn-primary popover-test" data-placement="bottom" title="Like us on social media" data-content="Contents!">Like Us</a>
                            </li>
                            -->
                            <li><a href="https://www.facebook.com/Aibd" target="_NEW"><span id="social_facebook1" class="apico-black apico-facebook-square"></span></a></li>
                            <li><a href="https://twitter.com/Aibd" target="_NEW"><span id="social_twitter1" class="apico-black apico-twitter-square"></span></a></li>
                            <li><a href="http://www.linkedin.com/company/Aibd-" target="_NEW"><span id="social_linkedin1" class="apico-black apico-linkedin-square"></span></a></li>
                            <li><a href="#" target="_NEW"><span id="social_googleplus1" class="apico-black apico-google-plus-square"></span></a></li>
                            <li><a href="http://www.youtube.com/user/Aibd" target="_NEW"><span id="social_youtube1" class="apico-black apico-youtube-square"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <!-- /social icon -->

    <!-- body -->
        <?php echo $body ?>
    <!-- /body -->    

    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12"></div>
          <div class="col-lg-10 col-md-8 col-sm-8 col-xs-12"></div>
      </div>
    </div>

        <div class="modal fade" id="myEmailRPModal" tabindex="-1" role="dialog" aria-labelledby="myEmailRPModalLabel">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title" id="myEmailRPModalLabel"><i class="fa fa-sign-out"></i> Contact </h4>
                </div>
                <div class="modal-body">
                  <p>Contact form will appear here!</p>
                </div>
                <div class="modal-footer">                                    
                  <button id="btnEmailRP" type="button" class="btn btn-primary" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Sending email.." onclick="RPDB.send_email_rpcontact();"><i class="fa fa-sign-out"></i> Send Email</button>
                  <button id="btnCancelEmailRP" type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Cancel</button>
                </div>
              </div>
            </div>
        </div>

        <div class="modal fade" id="myEmailUserModal" tabindex="-1" role="dialog" aria-labelledby="myEmailUserModalLabel">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title" id="myEmailUserModalLabel"><i class="fa fa-sign-out"></i> Contact </h4>
                </div>
                <div class="modal-body">
                  <p>Contact form will appear here!</p>
                </div>
                <div class="modal-footer">                                    
                  <button id="btnEmailUser" type="button" class="btn btn-primary" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Sending email.." onclick="RPDB.send_email_user();"><i class="fa fa-sign-out"></i> Send Email</button>
                  <button id="btnCancelEmailUser" type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Cancel</button>
                </div>
              </div>
            </div>
        </div>

        <div class="modal fade" id="myLogoutModal" tabindex="-1" role="dialog" aria-labelledby="myLogutModalLabel">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title" id="myLogutModalLabel"><i class="fa fa-sign-out"></i> Logout Confirmation</h4>
                </div>
                <div class="modal-body">
                  <p>Do you want to logout now? <br/>All unsaved data will be permanently lost!</p>
                </div>
                <div class="modal-footer">                                    
                  <button id="btnLogout" type="button" class="btn btn-danger" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Logging out.." onclick="RPDB.logout();"><i class="fa fa-sign-out"></i> Logout</button>
                  <button id="btnCancelLogout" type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Cancel</button>
                </div>
              </div>
            </div>
        </div>

        <div class="modal fade" id="myHelpModal" tabindex="-1" role="dialog" aria-labelledby="myHelpModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myHelpModalLabel"><i class="fa fa-question-circle fa-1x"></i> Having Problem?</h4>
                </div>
                <div class="modal-body">

                    <div class="panel-group" id="accordion">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#Help_CollapseOne">
                              Check your username & password?
                            </a>
                          </h4>
                        </div>
                        <div id="Help_CollapseOne" class="panel-collapse collapse in">
                          <div class="panel-body">
                            <i class="fa fa-arrow-circle-right"></i> Username & password are case sensitive! i.e. (abc) is not as same as (ABC)<br>
                            <i class="fa fa-arrow-circle-right"></i> Make sure the {CAPS Lock} is not turned on by accident.<br>
                            <i class="fa fa-arrow-circle-right"></i> Make sure you're using the correct username & password.<br>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#Help_CollapseTwo">
                              Cookie & Javascript enabled?
                            </a>
                          </h4>
                        </div>
                        <div id="Help_CollapseTwo" class="panel-collapse collapse">
                          <div class="panel-body">
                            <i class="fa fa-arrow-circle-right"></i> Is cookie enabled? <a href="https://www.whatismybrowser.com/detect/are-cookies-enabled" target="_blank">Check here</a><br>
                            <i class="fa fa-arrow-circle-right"></i> Is Javascript enabled? <a href="https://www.whatismybrowser.com/detect/is-javascript-enabled" target="_blank">Check here</a><br>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#Help_CollapseThree">
                              Which internet browser is supported?
                            </a>
                          </h4>
                        </div>
                        <div id="Help_CollapseThree" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p>This application has been tested with the following web browsers.</p>
                            <i class="fa fa-firefox"></i> Mozilla Firefox<br>
                            <i class="fa fa-chrome"></i> Google Chrome<br>
                            <i class="fa fa-safari"></i> Safari - Apple Macintosh<br>
                            <i class="fa fa-opera"></i> Opera<br>                            
                            <i class="fa fa-internet-explorer"></i> Internet Explorer<br>
                            <br>
                            <i class="fa fa-arrow-circle-right"></i> Is the web browser in your computer up-to-date? <a href="https://www.whatismybrowser.com/" target="_blank">Check here</a>
                            <br><br>
                                <div class="float_box column_div">
                                    <fieldset>
                                        <legend>Your current web browser details</legend>

                                        <div id="browserDetails"></div>

                                        <script>
                                            var txt = "";
                                            txt += "<i class=\"fa fa-arrow-circle-right\"></i> Browser CodeName : " + navigator.appCodeName + "</br>";
                                            txt += "<i class=\"fa fa-arrow-circle-right\"></i> Browser Name : " + navigator.appName + "</br>";
                                            txt += "<i class=\"fa fa-arrow-circle-right\"></i> Browser Version : " + navigator.appVersion + "</br>";
                                            txt += "<i class=\"fa fa-arrow-circle-right\"></i> Cookies Enabled : " + navigator.cookieEnabled + "</br>";
                                            txt += "<i class=\"fa fa-arrow-circle-right\"></i> Browser Language : " + navigator.language + "</br>";
                                            txt += "<i class=\"fa fa-arrow-circle-right\"></i> Browser Online : " + navigator.onLine + "</br>";
                                            txt += "<i class=\"fa fa-arrow-circle-right\"></i> Platform : " + navigator.platform + "</br>";
                                            txt += "<i class=\"fa fa-arrow-circle-right\"></i> User-agent header : " + navigator.userAgent + "</br>";

                                            document.getElementById("browserDetails").innerHTML = txt;
                                        </script>

                                    </fieldset>
                                </div>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#Help_CollapseFour">
                              Which (OS) is supported?
                            </a>
                          </h4>
                        </div>
                        <div id="Help_CollapseFour" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p>This application has been tested on the following operating systems.</p>
                            <i class="fa fa-linux"></i> Linux (Ubuntu, Centos, OpenSUSE)<br>
                            <i class="fa fa-android"></i> Android<br>
                            <i class="fa fa-apple"></i> iOS - Apple Macintosh<br>
                            <i class="fa fa-windows"></i> Microsoft Windows<br>
                          </div>
                        </div>
                      </div>  
                    </div>

                </div>
                <div class="modal-footer">
                    <button id="btnCancelHelp" type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Close</button>
                </div>
              </div>
            </div>
        </div>

    </div>
    <a href="#" class="back-to-top">Back to Top</a>

    <!-- footer -->
        <?php echo $footer ?>
    <!-- //footer -->

    <!-- javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="<?php echo base_url(JS . "libs/underscore-min-1.5.0.js");?>"></script>
    <script src="<?php echo base_url(JS . "bootstrap.min.js"); ?>"></script>

    <script src="<?php echo base_url(JS . "script.js");?>"></script>

    <!-- bootstrap-add-clear -->
    <script src="<?php echo base_url(JS . "third-party/bootstrap-add-clear/bootstrap-add-clear.min.js"); ?>"></script>
    <!-- //bootstrap-add-clear -->


    <!-- upload -->
    <script src="<?php echo base_url(JS . "third-party/upload/bootstrap-fileupload.js"); ?>"></script>
    <!-- //upload -->

    <!-- cookies -->
    <script src="<?php echo base_url(JS . "third-party/cookies/jquery.cookies.2.2.0.js"); ?>"></script>
    <script src="<?php echo base_url(JS . "third-party/cookies/jquery.cookie.js"); ?>"></script>
    <!-- //cookies -->

    <!-- datatable -->
    <!--
    <script src="http://datatables.net/release-datatables/media/js/jquery.dataTables.js"></script>
    <script src="http://datatables.net/release-datatables/extensions/TableTools/js/dataTables.tableTools.js"></script>
    <script src="http://datatables.net/release-datatables/extensions/Plugins/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.0.0/js/dataTables.responsive.min.js"></script>
    -->

    <!--
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/autofill/2.1.0/js/dataTables.autoFill.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/autofill/2.1.0/js/autoFill.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.0/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.0/js/buttons.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.0/js/buttons.colVis.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.0/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.0/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.0/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/colreorder/1.3.0/js/dataTables.colReorder.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.0/js/dataTables.fixedColumns.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.0/js/dataTables.fixedHeader.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/keytable/2.1.0/js/dataTables.keyTable.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.0.0/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.0.0/js/responsive.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/rowreorder/1.1.0/js/dataTables.rowReorder.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/scroller/1.4.0/js/dataTables.scroller.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.1.0/js/dataTables.select.min.js"></script>
    -->

    <script type="text/javascript" src="assets/datatables/JSZip-2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="assets/datatables/pdfmake-0.1.18/build/pdfmake.min.js"></script>
    <script type="text/javascript" src="assets/datatables/pdfmake-0.1.18/build/vfs_fonts.js"></script>
    <script type="text/javascript" src="assets/datatables/DataTables-1.10.11/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="assets/datatables/DataTables-1.10.11/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/datatables/AutoFill-2.1.1/js/dataTables.autoFill.min.js"></script>
    <script type="text/javascript" src="assets/datatables/AutoFill-2.1.1/js/autoFill.bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/datatables/Buttons-1.1.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="assets/datatables/Buttons-1.1.2/js/buttons.bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/datatables/Buttons-1.1.2/js/buttons.colVis.min.js"></script>
    <script type="text/javascript" src="assets/datatables/Buttons-1.1.2/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="assets/datatables/Buttons-1.1.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="assets/datatables/Buttons-1.1.2/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="assets/datatables/ColReorder-1.3.1/js/dataTables.colReorder.min.js"></script>
    <script type="text/javascript" src="assets/datatables/FixedColumns-3.2.1/js/dataTables.fixedColumns.min.js"></script>
    <script type="text/javascript" src="assets/datatables/FixedHeader-3.1.1/js/dataTables.fixedHeader.min.js"></script>
    <script type="text/javascript" src="assets/datatables/KeyTable-2.1.1/js/dataTables.keyTable.min.js"></script>
    <script type="text/javascript" src="assets/datatables/Responsive-2.0.2/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="assets/datatables/Responsive-2.0.2/js/responsive.bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/datatables/RowReorder-1.1.1/js/dataTables.rowReorder.min.js"></script>
    <script type="text/javascript" src="assets/datatables/Scroller-1.4.1/js/dataTables.scroller.min.js"></script>
    <script type="text/javascript" src="assets/datatables/Select-1.1.2/js/dataTables.select.min.js"></script> 
    <!-- //datatable -->

    <!-- Datepicker -->
    <script src="<?php echo base_url(JS . "third-party/datepicker/moment-with-locales.js"); ?>"></script>
    <script src="<?php echo base_url(JS . "third-party/datepicker/bootstrap-datetimepicker.min.js"); ?>"></script>
    <!-- Datepicker -->

    <!-- pace -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <!-- //pace -->

    <!-- ladda -->
    <script src="<?php echo base_url(JS . "third-party/ladda/spin.min.js"); ?>"></script>
    <script src="<?php echo base_url(JS . "third-party/ladda/ladda.min.js"); ?>"></script>
    <script src="<?php echo base_url(JS . "third-party/ladda/prism.js"); ?>"></script>
    <!-- //ladda -->

    <!-- bootstrap dropdown hover -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-hover-dropdown/2.2.1/bootstrap-hover-dropdown.min.js"></script>    
    <!-- //bootstrap dropdown hover -->

    <!-- validation -->
    <script src="<?php echo base_url(JS . "third-party/validate/jquery.validate.min.js"); ?>"></script>
    <script src="<?php echo base_url(JS . "third-party/validate/additional-methods.js"); ?>"></script>
    <!-- //validation -->

    <!-- sparkline -->
    <script src="<?php echo base_url(JS . "third-party/sparkline/jquery.sparkline.js"); ?>"></script>
    <!-- //sparkline -->

    <!-- jstorage -->
    <script src="<?php echo base_url(JS . "third-party/json/jquery.json2.js"); ?>"></script>
    <script src="<?php echo base_url(JS . "third-party/jstorage/jstorage.js"); ?>"></script>
    <!-- //jstorage -->

    <!-- formValidation -->
    <script src="<?php echo base_url(JS . "third-party/formValidation/formValidation.js"); ?>"></script>
    <script src="<?php echo base_url(JS . "third-party/formValidation/framework/bootstrap.js"); ?>"></script>
    <!-- //formValidation -->

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>

    <!-- rwd-table -->
    <script src="<?php echo base_url(JS . "third-party/rwd-table/rwd-table.min.js"); ?>"></script>

    <!-- Toaster -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- custom-modal -->
    <script src="<?php echo base_url(JS . "custom/custom-modal.js"); ?>"></script>
    <!-- //custom-modal -->

    <script type="text/javascript">
        jQuery.noConflict()(function($){
            $(document).ready(function(){
    
                toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": true,
                  "progressBar": true,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }

                        <?php                           
                            $flash_messages = $this->flasher->get();
                            if(isset($flash_messages)){
                                if ($flash_messages === NULL) return NULL;
                                foreach($flash_messages as $key_type => $messages) :
                                    foreach ($messages as $message) :
                        ?>

                                    <?php 
                                        if($key_type == 'info'){
                                    ?>
                                            toastr.info('<?php echo $message; ?>.','Info<hr class="style-three" style="margin:1px;">')
                                    <?php
                                        }else if($key_type == 'success' ){
                                    ?>
                                            toastr.success('<?php echo $message; ?>.','Success<hr class="style-three" style="margin:1px;">')
                                    <?php
                                        }else if($key_type == 'warning' ){
                                    ?>
                                            toastr.warning('<?php echo $message; ?>.','Warning !<hr class="style-three" style="margin:1px;">')
                                    <?php
                                        }else if($key_type == 'error' ){
                                    ?>
                                            toastr.error('<?php echo $message; ?>.', 'Error !<hr class="style-three" style="margin:1px;">')
                                    <?php
                                        }
                                    ?>
                        <?php
                                    endforeach;
                                endforeach;
                                unset($flash_messages);
                                $this->flasher->clear();
                            }                           
                        ?>
            });
        });
    </script>

    <script type="text/javascript">
        /*
        jQuery.noConflict()(function($){
            $(document).ready(function(){
    
                toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": true,
                  "progressBar": true,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }
                toastr.info('Are you the 6 fingered man?')
                toastr.success('Have fun storming the castle!', 'Miracle Max Says')
                toastr.warning('My name is Inigo Montoya. You killed my father, prepare to die!')
                toastr.error('I do not think that word means what you think it means.', 'Inconceivable!')

            });
        });
        */
    </script>

    <script type="text/javascript">
        jQuery.noConflict()(function($){
            $(document).ready(function(){           

                $.fn.refreshMe = function(opts){
              
                    var $this = this,
                      defaults = {
                        ms:1500,
                        parentSelector:'.panel',
                        started:function(){},
                        completed:function(){}
                      },
                      settings = $.extend(defaults, opts);
              
                    var par = this.parents(settings.parentSelector);
                    var panelToRefresh = par.find('.refresh-container');
                    var dataToRefresh = par.find('.refresh-data');
                  
                    var ms = settings.ms;
                    var started = settings.started;       //function before timeout
                    var completed = settings.completed;   //function after timeout
                  
                    $this.click(function(){
                    $this.addClass("fa-spin");
                    panelToRefresh.show();
                   
                    if (dataToRefresh) {
                        started(dataToRefresh);
                    }
                    setTimeout(function(){
                    if (dataToRefresh) {
                        completed(dataToRefresh);
                    }
                        panelToRefresh.fadeOut(800);
                        $this.removeClass("fa-spin");
                    },ms);
                    return false;
                })//click
                  
                }/* end function refreshMe */

                  $('#refresh1').refreshMe({
                    started:function(ele){ele.html("Please wait..")},
                    completed:function(ele){ele.html("This is the new data after refresh..")}
                  });

                  $('#refresh2').refreshMe({
                    started:function(ele){ele.html("Please wait..")},
                    completed:function(ele){ele.html("This is the new data after refresh..")}
                  });

                window.setTimeout(function() {
                    $("#flasher-alert").fadeTo(500, 0).slideUp(500, function(){
                        $(this).remove(); 
                    });
                }, 4000);                               

            });
        });
    </script>

    <script type="text/javascript">
        jQuery.noConflict()(function($){
            $(document).on('click', '.panel-heading span.clickable', function(e){
                var $this = $(this);

                if(!$this.hasClass('panel-collapsed')) {
                    $this.parents('.panel').find('.panel-body').slideUp();
                    $this.addClass('panel-collapsed');
                    $this.find('i').removeClass('fa fa-chevron-circle-up').addClass('fa fa-chevron-circle-down');
                    $.cookie('mypanel', 'close', { expires: 30 });
                } else {
                    $this.parents('.panel').find('.panel-body').slideDown();
                    $this.removeClass('panel-collapsed');
                    $this.find('i').removeClass('fa fa-chevron-circle-down').addClass('fa fa-chevron-circle-up');
                    $.cookie('mypanel', 'open', { expires: 30 });
                }
            })
        });
    </script>
    
    <script type="text/javascript">
        jQuery.noConflict()(function($){
            $(document).ready(function(){
                $('[data-toggle="popover"]').popover({
                    placement : 'top',
                    html : true,
                    //trigger : 'hover',
                    title : 'User Info <a href="#" class="close" data-dismiss="alert">×</a>',
                    content : '<div class="media"><a href="#" class="pull-left"><img src="assets/img/custom/avatar-tiny.jpg" class="media-object" alt="Sample Image"></a><div class="media-body"><h4 class="media-heading">Jhon Carter</h4><p>Excellent Bootstrap popover! I really love it.</p></div></div>'
                });
                $(document).on("click", ".popover .close" , function(){
                    $(this).parents(".popover").popover('hide');
                });
            });
        });
    </script>

    <script type="text/javascript">
        jQuery.noConflict()(function($){
            $(document).ready(function(){

                $('#dob_picker').datetimepicker({                    
                    format: 'DD/MM/YYYY'
                });

                $('#project_start_date_picker').datetimepicker({                    
                    format: 'DD/MM/YYYY'
                });

                $('#project_end_date_picker').datetimepicker({                    
                    format: 'DD/MM/YYYY'
                });                
            });
        });
    </script>
        
    <script type="text/javascript">

        //-- Variables --//
        var rplist;
        var userlist;
        var grouplist;

        jQuery.noConflict()(function($){
             $(document).ready(function(){

                //Countryname && Countrydemonym
                $( "#countryname" ).on( "click", function() {
                  $("#countrydemonym").val($(this).find("option:selected").attr("value"));
                });

                $("#ddlPassport").change(function () {
                    if ($(this).val() == "Y") {
                        $("#dvPassport").show();
                    } else {
                        $("#dvPassport").hide();
                    }
                });

                $("#txtEmailAddress").addClear();
                $("#txtPassword").addClear();


                //rpcontactlist
                //Bfrtipl
                rplist = $('#rpcontactlist').DataTable({
                    "autoWidth": true,
                    "dom": "<'row'<'col-sm-4'l><'col-sm-4'B><'col-sm-4'f>>" +"<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                    "buttons": [
                        'copy', 'excel', 'pdf', 'print'
                    ],        
                    "responsive": true,
                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "order": [], //Initial no order.
             
                    // Load data for the table's content from an Ajax source
                    "ajax": {
                        "url": "<?php echo site_url('rp/get_rp_list')?>",
                        "type": "POST"
                    },
             
                    //Set column definition initialisation properties.
                    "columnDefs": [
                    {
                        "targets": [ -1 ], //last column
                        "orderable": false, //set not orderable
                    },
                    ],
                    //columnDefs: [ {
                    //    sortable: false,
                    //    "class": "index",
                    //    targets: 0
                    //} ],


                    //"fnCreatedRow": function (row, data, index) {
                    //    $('td', row).eq(0).html(index + 1);
                    //}
                });

                //userlist
                userlist = $('#userlist').DataTable({
                    "autoWidth": true,
                    "dom": "<'row'<'col-sm-4'l><'col-sm-4'B><'col-sm-4'f>>" +"<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                    "buttons": [
                        'copy', 'excel', 'pdf', 'print'
                    ],        
                    "responsive": true,
                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "order": [], //Initial no order.
             
                    // Load data for the table's content from an Ajax source
                    "ajax": {
                        "url": "<?php echo site_url('admin/listuser')?>",
                        "type": "POST"
                    },
             
                    //Set column definition initialisation properties.
                    "columnDefs": [
                    {
                        "targets": [ -1 ], //last column
                        "orderable": false, //set not orderable
                    },
                    ],
                    //columnDefs: [ {
                    //    sortable: false,
                    //    "class": "index",
                    //    targets: 0
                    //} ],


                    //"fnCreatedRow": function (row, data, index) {
                    //    $('td', row).eq(0).html(index + 1);
                    //}
                });

                //grouplist
                grouplist = $('#grouplist').DataTable({
                    "autoWidth": true,
                    "dom": "<'row'<'col-sm-4'l><'col-sm-4'B><'col-sm-4'f>>" +"<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                    "buttons": [
                        'copy', 'excel', 'pdf', 'print'
                    ],        
                    "responsive": true,
                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "order": [], //Initial no order.
             
                    // Load data for the table's content from an Ajax source
                    "ajax": {
                        "url": "<?php echo site_url('admin/listgroup')?>",
                        "type": "POST"
                    },
             
                    //Set column definition initialisation properties.
                    "columnDefs": [
                    {
                        "targets": [ -1 ], //last column
                        "orderable": false, //set not orderable
                    },
                    ],
                    //columnDefs: [ {
                    //    sortable: false,
                    //    "class": "index",
                    //    targets: 0
                    //} ],


                    //"fnCreatedRow": function (row, data, index) {
                    //    $('td', row).eq(0).html(index + 1);
                    //}
                });


                $("#btnRefreshRPList1").click(function() {
                    var $btn = $(this);
                    $btn.button('loading');
                    // Then whatever you actually want to do i.e. submit form
                    // After that has finished, reset the button state using
                        setTimeout(function () {
                            $btn.button('reset');                            
                    },  1000);
                });

                $("#btnRefreshRPList2").click(function() {
                    var $btn = $(this);
                    $btn.button('loading');
                    // Then whatever you actually want to do i.e. submit form
                    // After that has finished, reset the button state using
                        setTimeout(function () {
                            $btn.button('reset');                            
                    },  1000);
                });

                $("#btnRefreshUser").click(function() {
                    var $btn = $(this);
                    $btn.button('loading');
                    // Then whatever you actually want to do i.e. submit form
                    // After that has finished, reset the button state using
                        setTimeout(function () {
                            $btn.button('reset');                            
                    },  1000);
                });

                $("#btnRefreshGroup").click(function() {
                    var $btn = $(this);
                    $btn.button('loading');
                    // Then whatever you actually want to do i.e. submit form
                    // After that has finished, reset the button state using
                        setTimeout(function () {
                            $btn.button('reset');                            
                    },  1000);
                });

                function reload_table(){
                    table.ajax.reload(null,false); //reload datatable ajax
                }

                RPDB = {
                    add_new_user: function() {
                        $(location).attr('href','admin/adduser')
                    },
                    add_new_group: function() {
                        $(location).attr('href','admin/addgroup')
                    },
                    add_rp: function() {
                        $(location).attr('href','rp/add')
                    },
                    view_rp: function(rid) {
                        $(location).attr('href','rp/view/' + rid)
                    },                    
                    email_rpcontact: function(rid, firstname, lastname) {

                        //$('.modal-title').text('Contact ' + firstname + " " + lastname); // Set Title to Bootstrap modal title
                        $(".modal-header #myEmailRPModalLabel").text('Contact ' + firstname + " " + lastname);
                    },
                    email_user: function(gid, username) {

                        //$('.modal-title').text('Contact ' + firstname + " " + lastname); // Set Title to Bootstrap modal title
                        $(".modal-header #myEmailUserModalLabel").text('Contact ' + username);
                    },
                    send_email_rpcontact: function() {

                        $("#btnEmailRP").click(function() {
                            var $btn = $(this);
                            $btn.button('loading');
                            // Then whatever you actually want to do i.e. submit form
                            // After that has finished, reset the button state using
                                setTimeout(function () {
                                    //window.location.href = "logout/";
                                    $btn.button('reset');                            
                            },  1000);
                        });
                    },
                    send_email_user: function() {

                        $("#btnEmailUser").click(function() {
                            var $btn = $(this);
                            $btn.button('loading');
                            // Then whatever you actually want to do i.e. submit form
                            // After that has finished, reset the button state using
                                setTimeout(function () {
                                    //window.location.href = "logout/";
                                    $btn.button('reset');                            
                            },  1000);
                        });
                    },
                    refresh_rplist1: function() {
                        rplist.ajax.reload(null,false);
                    },
                    refresh_rplist2: function() {
                        rplist.ajax.reload(null,false);
                    },                    
                    refresh_userlist: function() {
                        userlist.ajax.reload(null,false);
                    },
                    refresh_grouplist: function() {
                        grouplist.ajax.reload(null,false);
                    },
                    logout: function() {

                        $("#btnLogout").click(function() {
                            var $btn = $(this);
                            $btn.button('loading');
                            // Then whatever you actually want to do i.e. submit form
                            // After that has finished, reset the button state using
                                setTimeout(function () {
                                    window.location.href = "logout/";
                                    $btn.button('reset');                            
                            },  1000);
                        });                        
                    }
                }

             });
        });
    </script>

    <script type="text/javascript">
        jQuery.noConflict()(function($){

            var formOne = function () {
                    var formData = $("#formOne").serialize();
                    
                    $.ajax({ 
                    url: '/ajax.php',
                    data: formData,
                    type: 'post',
                    complete: function(output) {
                        $('#formOneResults').html(output.responseText);
                    }
                    });                 
            };

            $(document).ready(function(){

                /*
                var table = $('#example').DataTable( {
                    lengthChange: false,
                    buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
                } );

                table.buttons().container()
                    .appendTo( '#example_wrapper .col-sm-6:eq(0)' );
                */

                $('#empTable').dataTable({
                        "responsive": true,
                        "processing": true,
                        "serverSide": false,                    
                        "ajax": "test.json",
                        "columns": [
                            {"data": "name"},
                            {"data": "designation"},
                            {"data": "office"},
                            {"data": "extension"},
                            {"data": "joining_date"},
                            {"data": "salary"}
                        ]
                });  

                /*
                $('#datatable-rpcontacttmp').DataTable( {
                        "processing": true,
                        "serverSide": true,                    
                        "ajax": "rpcontact.json",
                        "columns": [
                                    {"data": "number"},
                                    {"data": "title"},
                                    {"data": "name"},
                                    {"data": "nationality"},
                                    {"data": "search_tag"}
                                ]                        
                });
                */

                $('div.dataTables_filter input').attr('placeholder', 'Search...');

                
                var table = $('#datatable-rpcontactlist').DataTable({
                            "bProcessing": true, 
                            "responsive": true,
                            "colReorder": true,
                            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                            "dom": 'lBfrtipl',
                                    buttons: [
                                        'copyHtml5',
                                        'excelHtml5',
                                        'csvHtml5',
                                        'pdfHtml5',
                                        'print'
                                    ]                   
                });                

                var table = $('#datatable-example').DataTable({
                            "bProcessing": true, 
                            "responsive": true,
                            "colReorder": true,
                            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                            "dom": 'lBfrtipl',
                                    buttons: [
                                        'copyHtml5',
                                        'excelHtml5',
                                        'csvHtml5',
                                        'pdfHtml5',
                                        'print'
                                    ]
                });


                //var tt = new $.fn.dataTable.TableTools( table );                             
                //$( tt.fnContainer() ).insertBefore('div.dataTables_wrapper');
                
                //var tt = new $.fn.dataTable.TableTools( table );             
                //$( tt.fnContainer() ).insertAfter('div.info');



                $("#formOneBtn").on("click", function(e){
                        e.preventDefault();
                        formOne();
                });

            });
        });
    </script>

    <script type="text/javascript">
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

                window.myAlertMsg = function(type, message){
                    var icon;
                    var text;

                    if(type == 'info') {
                        icon = 'fa-info-circle';
                        text = 'Info';
                    }else if(type == 'success'){
                        icon = 'fa-check-circle';
                        text = 'Congratulation!';
                    }else if(type == 'warning'){
                        icon = 'fa-exclamation-circle';
                        text = 'Warning!';
                    }else if(type == 'danger'){
                        icon = 'fa-exclamation-triangle';
                        text = 'Error!';
                    }

                    var htmlAlert = '<div class="alert alert-' + type + ' fade in"><button type="button" class="close" data-dismiss="alert">&times;</button><i class="fa ' + icon + '"></i>&nbsp;&nbsp;<b>' + text + '</b> - ' + message + '</div>';

                    // Prepend so that alert is on top, could also append if we want new alerts to show below instead of on top.
                    $("#notification").prepend(htmlAlert);

                    // Since we are prepending, take the first alert and tell it to fade in and then fade out.
                    // Note: if we were appending, then should use last() instead of first()
                    $("#notification .alert").first().hide().fadeIn(200).delay(2000).fadeOut(1000, function () { $(this).remove(); });
                };


                //window.myAlertMsg('danger', 'message');

                //Cookies
                if($.cookies.test()){
                    //var mycookie = $.cookies.get('isLoggedIn', { path: strPath, domain: strHostname });
                    console.log('Cookies supported : Yes');                    
                    var mycookie = $.cookies.get('isLoggedIn', { path: strPath, domain: strHostname });
                    $("#mycookie").text(mycookie);

                    if(mycookie === null){                        

                        <?php if(!isActive($pageName, "login")){ ?>
                            //window.myAlertMsg('Warning', 'You are not logged in, <a href="<?php echo base_url('login'); ?>">login</a> now to use this application!');
                            //$('#notification').html('<div class="alert alert-warning fade in"><button type="button" class="close" data-dismiss="alert">&times;</button><strong><i class="fa fa-exclamation-circle"></i> Reminder!</strong> You are not logged in, <a href="<?php echo base_url('login'); ?>">login</a> now to use this application!</div>');
                        <?php }else{ ?>
                            window.myAlertMsg('warning', 'You are not logged in, login now to use this application!');
                            //$('#notification').html('<div class="alert alert-warning fade in"><button type="button" class="close" data-dismiss="alert">&times;</button><strong><i class="fa fa-exclamation-circle"></i> Reminder!</strong> You are not logged in, login now to use this application!</div>');
                        <?php } ?>
                        
                        console.log(mycookie);                        
                    }else if(mycookie == true){
                        //window.myAlertMsg('success', 'You have successfully logged into Resource Person Database. Every action on this site will be logged!');
                        //$('#notification').html('<div class="alert alert-success fade in"><button type="button" class="close" data-dismiss="alert">&times;</button><strong><i class="fa fa-check-circle"></i> Welcome!</strong> You have successfully logged into Resource Person Database. Every action on this site will be logged!</div></div>');
                        console.log(mycookie);
                    }else if(mycookie == false){
                        //window.myAlertMsg('danger', 'Unsuccessfull login attempt, please try again!');                        
                        //$('#notification').html('<div class="alert alert-danger fade in"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Warning!</strong> Invalid login attempt, please try again!</div>');
                        console.log(mycookie);
                    }
                    //console.log($.cookies.get('ci_session'));
                

                    var login_attempt = $.cookies.get('login_attempt');

                    if(login_attempt == 'failed'){
                        //window.myAlertMsg('danger', 'Unsuccessfull login attempt, please try again!');
                        //$('#notification').html('<div class="alert alert-danger fade in"><button type="button" class="close" data-dismiss="alert">&times;</button><strong><i class="fa fa-exclamation-circle"></i> Warning!</strong> Unsuccessful login attempt, please try again!</div>');
                        //$('#notification').html('<?php echo '<div class="alert alert-danger fade in"><button type="button" class="close" data-dismiss="alert">&times;</button><strong><i class="fa fa-exclamation-circle"></i> Warning!</strong> Invalid login attempt, please try again!</div>'; ?>');
                        $.removeCookie('login_attempt', { path: '/' });
                    }


                }

                $('form,input,select,textarea').attr("autocomplete", "off");

                $.getJSON(
                    '<?php echo site_url()?>/data.json', 
                    function(json) {
                        //alert("success");                   
                        console.log(json.sites.site[0].title);

                        console.log(json.socials.links[0].facebook);
                        console.log(json.socials.links[0].twitter);
                        console.log(json.socials.links[0].linkedin);
                        console.log(json.socials.links[0].youtube);
                        console.log(json.socials.links[0].gplus);

                    }).done(function(json) {
                        //alert("success");
                    }).fail(function(json) {
                        alert("error");
                    }).always(function(json) {
                        //alert("complete");
                    });



                /*
                $.getJSON('data.json', function(json) {
                    console.log(json.sites.site[0].title);

                    console.log(json.socials.links[0].facebook);
                    console.log(json.socials.links[0].twitter);
                    console.log(json.socials.links[0].linkedin);
                    console.log(json.socials.links[0].youtube);
                    console.log(json.socials.links[0].gplus);
                });
                */

                $.ajax({
                    beforeSend: function(jqXHR){
                        //$('#loadingMsg').html('<img src="http://ss2.olympia.edu.my/assets/img/loader/loader3.gif" />');
                        console.log("ajxStart")
                    },                 
                    type: "GET", 
                    url: "<?php echo site_url()?>/site.json",  
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

                            //console.log(jqXHR);

                            if (data.site.maintenance == true)
                            {
                                var url = "maintenance.php";    
                                $(location).attr('href',url);                            
                                //alert("site under maintenance now!")                            
                            }
                            else if(data.site.maintenance == false)
                            {   

                                //var url = "http://localhost/newci/home";    
                                //$(location).attr('href',url);                            

                                $("#title").append(" :: " + data.site.title + " :: " + data.site.name);
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
                        /*
                        if (textStatus !== null) {
                            //$("#ajaxcall1").html("Error: " + textStatus);
                        } else if (errorThrown !== null) {
                            //$("#ajaxcall1").html("Exception: " + errorThrown.message);
                        }
                        else {
                            alert("ERROR! Unable to load system settings," + errorThrown.message + "!");
                        }
                        */

                        if (jqXHR.status === 0) {
                            alert('Not connect.\n Verify Network.');
                        } else if (jqXHR.status == 404) {
                            alert('Requested page not found. [404]');
                        } else if (jqXHR.status == 500) {
                            alert('Internal Server Error [500].');
                        } else if (errorThrown === 'parsererror') {
                            alert('errorThrown JSON parse failed.');
                        } else if (errorThrown === 'timeout') {
                            alert('Time out error.');
                        } else if (errorThrown === 'abort') {
                            alert('Ajax request aborted.');
                        } else {
                            alert('Uncaught Error.\n' + jqXHR.responseText);
                        }

                        //console.log(jqXHR);

                    }                                      
                });

            });
        }); 
    </script>

    <!-- custom -->
    <script src="<?php echo base_url(JS . "custom/login.form.validation.js"); ?>"></script> 
    <script src="<?php echo base_url(JS . "custom/data.localstorage.js"); ?>"></script>
    <!-- //custom -->

    <style type="text/css">
        .jqstooltip { 
          position: absolute;
          left: 0px;
          top: 0px;
          visibility: hidden;
          background: rgb(0, 0, 0) transparent;
          background-color: rgba(0,0,0,0.6);
          filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
          -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
          color: white;
          font: 10px arial, san serif;
          text-align: left;
          white-space: nowrap;
          padding: 5px 50px 27px 10px;
          border: 1px solid white;
          z-index: 10000;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;  
        }

        .jqsfield {
          color: white;
          font: 10px arial, san serif;
          text-align: left;
        };
    </style>

    <!-- //sparkline -->

    <!-- //javascript -->

    <!-- javascript -->
    <script type="text/javascript">
        jQuery.noConflict()(function($){
            $(document).ready(function() {

                // floating top to page button
                var offset = 220;
                var duration = 500;
                jQuery(window).scroll(function() {
                    if (jQuery(this).scrollTop() > offset) {
                        jQuery('.back-to-top').fadeIn(duration);
                    } else {
                        jQuery('.back-to-top').fadeOut(duration);
                    }
                });
                
                jQuery('.back-to-top').click(function(event) {
                    event.preventDefault();
                    jQuery('html, body').animate({scrollTop: 0}, duration);
                    return false;
                })

            });
        });
    </script>

    <script type="text/javascript">
        jQuery.noConflict()(function($){


            var funcOne = function(){
                alert("funcOne");
            }


            $(document).ready(function(){  

                //sparkline
                var myvalues = [10,8,5,7,4,4,1,5,65,5,22,32,100.3];
                $('.dynamicsparkline').sparkline(myvalues);

                // Composite line charts, the second using values supplied via javascript
                $('#compositeline').sparkline('html', { fillColor: false, changeRangeMin: 0, chartRangeMax: 10 });
                $('#compositeline').sparkline([4,1,5,7,9,9,8,7,6,6,4,7,8,4,3,2,2,5,6,7], { composite: true, fillColor: false, lineColor: 'red', changeRangeMin: 0, chartRangeMax: 10 });

                // external link icon
                $("a").filter(function() {
                    return this.hostname && this.hostname !== location.hostname;
                }).addClass('external-link');                

                // popover
                $('.popover-test').popover({ html : true });

                // disqus show/hide panel
                var togglePanel = function() {
                    $('.adv-toggle-buttons > a').each(function() { $(this).toggle(); });
                    $.cookie('isOpen', $('#button_close').is(':visible'), { expires: 9999 })
                    if($('#button_open').is(':visible'))
                        $('.adv-unit-options').fadeOut('slow');
                    else
                        $('.adv-unit-options').fadeIn('slow');
                }

                $('.adv-toggle-buttons a').click(togglePanel);
                // If the isOpen cookie is set and true, toggle panel once to open it. 
                if($.cookie('isOpen') === 'true') togglePanel();






                // image upload
                $('#image-file-name').change(function() {
                    //alert($('#image-file-name').val());
                });

                // progress bar
                $('.js-loading-bar').modal({
                    backdrop: 'static',
                    show: false
                }).on('shown.bs.modal', function( event ) {

                    var $bar = $(event.target).find('.progress-bar'),
                        _wait = function() {       
                            setTimeout(function() {
                              if($bar.is(':visible')){ 
                                   $bar.addClass('animate');
                               }else{
                                  console.log('not ready'); 
                                  _wait();
                               }
                            },0);       
                        };                  
                    _wait();                  
                });

                $('#load').click(function() {
                    var $modal = $('.js-loading-bar'),
                        $bar = $modal.find('.progress-bar');
                  
                        $modal.modal('show');

                    setTimeout(function() {
                        $modal.modal('hide'); 
                        $bar.removeClass('animate');
                        //$modal.modal('hide');        
                  }, 1500);
                });

                // pace indicator
                paceOptions = {
                  ajax: true, // disabled
                  document: true, // disabled
                  eventLag: false, // disabled
                  elements: {
                    selectors: ['.my-page']
                  }
                };

                $('.js-activated').dropdownHover().dropdown();

                $('.accordion').on('show hide', function (n) {
                    $(n.target).siblings('.accordion-heading').find('.accordion-toggle i').toggleClass('icon-minus-sign icon-plus-sign', 200);
                });

                $("#username").bind('keyup', function(e) {
                    if (e.which >= 97 && e.which <= 122) {
                        var newKey = e.which - 32;
                        // I have tried setting those
                        e.keyCode = newKey;
                        e.charCode = newKey;
                    }

                    $("#username").val(($("#username").val()).toUpperCase());
                });

                $("#social_facebook1, #social_facebook2").mouseover(function(){
                    $(this).removeClass().addClass("apico-color apico-facebook-square");
                }).mouseout(function(){
                    $(this).removeClass().addClass("apico-black apico-facebook-square");       
                });

                $("#social_twitter1, #social_twitter2").mouseover(function(){
                    $(this).removeClass().addClass("apico-color apico-twitter-square");
                }).mouseout(function(){
                    $(this).removeClass().addClass("apico-black apico-twitter-square");       
                });

                $("#social_linkedin1, #social_linkedin2").mouseover(function(){
                    $(this).removeClass().addClass("apico-color apico-linkedin-square");
                }).mouseout(function(){
                    $(this).removeClass().addClass("apico-black apico-linkedin-square");       
                });

                $("#social_googleplus1, #social_googleplus2").mouseover(function(){
                    $(this).removeClass().addClass("apico-color apico-google-plus-square");
                }).mouseout(function(){
                    $(this).removeClass().addClass("apico-black apico-google-plus-square");       
                });

                $("#social_youtube1, #social_youtube2").mouseover(function(){
                    $(this).removeClass().addClass("apico-color apico-youtube-square");
                }).mouseout(function(){
                    $(this).removeClass().addClass("apico-black apico-youtube-square");       
                });                             

            });
        }); 
    </script>

    <script type="text/javascript">
        jQuery.noConflict()(function($){
            $(document).ready(function(){

                //adv-unit-options

                /*
                setInterval(function(){
                    $('.disqus-news-feed').load('disqus-news-feed.html');
                }, 1000);
                */

                //$("#button_open").click(function () {
                //    $("#disqus-news-feed").load('http://localhost/newci/disqus-news-feed.html');
                //    //alert('test');
                //});

                //setInterval(disqusNewsFeed, 1000);
                
                //function disqusNewsFeed(){
                    //$('#disqus-news-feed').load('http://localhost/newci/disqus-news-feed.html');
                    
                    /*
                    $.ajax({ 
                        type: "GET", 
                        url: "http://localhost/newci/disqus-news-feed.html",  
                        dataType: "html",
                        timeout: 10000,                  
                        success: function(data) {
                            $("#disqus-news-feed").html(data);
                        },
                        error: function(data){
                            $("#disqus-news-feed").html("Error!");
                        }                  
                    });
                    */
                //}
                

            });
        }); 
    </script>

    <script type="text/javascript">
        // Bind normal buttons
        /*
        Ladda.bind('input[type=submit]');
        Ladda.bind('div:not(.progress-demo) button', { timeout: 2000 } );
        */

        // Bind progress buttons and simulate loading progress
        /*
        Ladda.bind( '.progress-demo button', {
            callback: function( instance ) {
                var progress = 0;
                var interval = setInterval( function() {
                    progress = Math.min( progress + Math.random() * 0.1, 1 );
                    instance.setProgress( progress );

                    if( progress === 1 ) {
                        instance.stop();
                        clearInterval( interval );
                    }
                }, 200 );
            }
        } );
        */

        // You can control loading explicitly using the JavaScript API
        // as outlined below:

        // var l = Ladda.create( document.querySelector( 'button' ) );
        // l.start();
        // l.stop();
        // l.toggle();
        // l.isLoading();
        // l.setProgress( 0-1 );
    </script>
    <!-- //javascript -->

    <script type="text/javascript">
        function downloadJSAtOnload() {
            var element = document.createElement("script");
            element.src = "assets/js/custom/defer.js";
            document.body.appendChild(element);
        }

        if (window.addEventListener)
        window.addEventListener("load", downloadJSAtOnload, false);
        else if (window.attachEvent)
        window.attachEvent("onload", downloadJSAtOnload);
        else window.onload = downloadJSAtOnload;
    </script>

    <script type="text/javascript">
        console.log("Page load took " + (Date.now() - start) + "milliseconds");

        if (Modernizr.localstorage) {
          // window.localStorage is available!
          //alert('true');
        } else {
          // no native support for HTML5 storage :(
          // maybe try dojox.storage or a third-party solution
          //alert('false');
        }

    </script>

    <script type="text/javascript">
        jQuery.noConflict()(function($){
            $(document).ready(function() {
                $('#defaultForm').formValidation();
            }); 
        });
    </script>   

    <script type="text/javascript">
        jQuery.noConflict()(function($){
            $(document).ready(function() {
                $('#change_password_form').formValidation();
               
                $("#btnReset").click(function() {
                    window.showAndDismissAlert('info', 'Saved Successfully!');
                });

                /*$('#btnChangePassowrd').click(function(e) {
                  e.preventDefault();
                  $.smkAlert({
                    text: 'Alert type "success"',
                    type: 'success',
                    position:'top-left'
                  });
                });*/

                $(window).unload(function() {
                   //$.cookies.del('login_attempt');
                   //$.cookies.del('isLoggedIn');
                });
                
            }); 
        });
    </script>

    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
  </body>
</html>