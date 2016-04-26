<!-- navbar -->
  
    <div class="container-fluid">
      <div class="row">
        <div class="navbar navbar-default navbar-fixed-top">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle ladda-button" data-style="expand-right" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $this->config->item('site_url'); ?>"><?php echo $this->config->item('site_title'); ?></a>
            <!--<img alt="Brand" src="http://www.logoeps.net/wp-content/uploads/2013/06/stackoverflow_logo.jpg" style="height: 30px; display: inline-block; margin-top: -5px">-->
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <!--<div class="collapse navbar-collapse navbar-ex1-collapse">-->
          <div class="collapse navbar-collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav">
              
                       
              
                <li class="<?php echo isActive($pageName, "home") ?>"><a href="<?php echo base_url("/home/") ?>"><i class="fa fa-home"></i> Home</a></li>
                <li class="<?php echo isActive($pageName, "contact") ?>"><a href="<?php echo base_url("/contact/") ?>"><i class="fa fa-bullhorn"></i> Contact</a></li>             
                <li class="<?php echo isActive($pageName, "about") ?>"><a href="<?php echo base_url("/about/") ?>"><i class="fa fa-sticky-note"></i> About</a></li>
                

                  <li class="<?php echo isActive($pageName, "admin") ?>"><a href="<?php echo base_url("/admin/") ?>"><i class="fa fa-key"></i> Admin</a></li>          

              <li class="dropdown">
                <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown"><i class="fa fa-wrench"></i> Tools <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="https://html5test.com/" target="_blank"><i class="fa fa-html5"></i> HTML5 Test</a></li>
                  <li><a href="https://www.whatismybrowser.com/" target="_blank"><i class="fa fa-firefox"></i> Browser Tester</a></li>
                </ul>
              </li>

              <li class="<?php echo isActive($pageName, "help") ?>"><a href="#" data-toggle="modal" data-target="#myHelpModal"><i class="fa fa-question-circle"></i> Help</a></li>


              <li class="dropdown">
                <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Multi Level Dropdown<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Level 1</a></li>
                  <li class="dropdown-submenu"> <a tabindex="-1" href="#">More options</a>
                      <ul class="dropdown-menu">
                          <li><a tabindex="-1" href="#">Level 2</a></li>
                          <li class="dropdown-submenu"> <a href="#">More..</a>
                              <ul class="dropdown-menu">
                                  <li><a href="#">Level 3</a></li>
                                  <li><a href="#">Level 3</a></li>
                                  <li class="dropdown-submenu"> <a href="#">More..</a>
                                      <ul class="dropdown-menu">
                                          <li><a href="#">Level 4</a></li>
                                          <li><a href="#">Level 4</a></li>
                                          <li class="dropdown-submenu"> <a href="#">More..</a>
                                              <ul class="dropdown-menu">
                                                  <li><a href="#">Level 5</a>
                                                  </li>
                                                  <li><a href="#">Level 5</a>
                                                  </li>
                                              </ul>
                                          </li>

                                      </ul>
                                  </li>
                              </ul>
                          </li>
                          <li><a href="#">Level 2</a></li>
                          <li><a href="#">Level 2</a></li>
                      </ul>
                  </li>
                  <li><a href="#">Level 1</a></li>
                </ul>
              </li>
            </ul>

            <ul class="nav navbar-nav navbar-right" style="margin-right:5px;">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-sign-in"></i> Login <span class="caret"></span></a>
                <ul id="login-dp" class="dropdown-menu">
                  <li>
                     <div class="row">
                        <div class="col-md-12">
                          Login via
                          <div class="social-buttons">
                            <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                            <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                          </div>
                                          or
                           <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                              <div class="form-group">
                                 <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                              </div>
                              <div class="form-group">
                                 <label class="sr-only" for="exampleInputPassword2">Password</label>
                                 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                       <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                              </div>
                              <div class="form-group">
                                 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                              </div>
                              <div class="checkbox">
                                 <label>
                                 <input type="checkbox"> keep me logged-in
                                 </label>
                              </div>
                           </form>
                        </div>
                        <div class="bottom text-center">
                          New here ? <a href="#"><b>Join Us</b></a>
                        </div>
                     </div>
                  </li>
                </ul>
              </li>
              <li class="<?php echo isActive($pageName, "logout") ?>"><a href="#" data-toggle="modal"  data-target="#myLogoutModal"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>

            <form class="navbar-form navbar-right" role="search" action="#" method="get" id="search-form" name="search-form">
              <div class="input-group col-sm-12 col-xs-12">
                  <input type="text" class="form-control" placeholder="Search Tag, i.e. Consultant, Training" id="query" name="query" value="">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-orange"><span class="fa fa-search"></span></button>
                  </div>
              </div>
            </form>


            
          </div><!-- /.navbar-collapse -->
        </div>
      </div>
    </div>
  
<!-- /navbar -->

  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12"></div>
          <div class="col-lg-10 col-md-8 col-sm-8 col-xs-12"></div>
      </div>
  </div>
