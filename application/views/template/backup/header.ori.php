<!-- navbar -->
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle ladda-button" data-style="expand-right" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://localhost/ci304/home">RP Database</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            
                     
            
            <?php if($this->mylibrary->isUserLogged()){ ?>
              <li class="<?php echo isActive($pageName, "home") ?>"><a href="<?php echo base_url("/home/") ?>"><i class="fa fa-home"></i> Home</a></li>
              <li class="<?php echo isActive($pageName, "contact") ?>"><a href="<?php echo base_url("/contact/") ?>"><i class="fa fa-bullhorn"></i> Contact</a></li>             
              <li class="<?php echo isActive($pageName, "about") ?>"><a href="<?php echo base_url("/about/") ?>"><i class="fa fa-sticky-note"></i> About</a></li>
              
              <?php if($this->mylibrary->isACL($this->session->userdata('username')) == 'Admin'){ ?>
                <li class="<?php echo isActive($pageName, "admin") ?>"><a href="<?php echo base_url("/admin/") ?>"><i class="fa fa-key"></i> Admin</a></li>          
              <?php } ?>
            <?php } ?>

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
          
          <ul class="nav navbar-nav navbar-right">
            <?php if($this->mylibrary->isUserLogged()){ ?>
            <?php //echo base_url("/logout/") ?>
            <li class="<?php echo isActive($pageName, "logout") ?>"><a href="#" data-toggle="modal"  data-target="#myLogoutModal"><i class="fa fa-sign-out"></i> Logout</a></li>
            <?php } ?>
          </ul>
          
        </div><!-- /.navbar-collapse -->

      </div>
    </div>
  </div>
<!-- /navbar -->

  <div class="container-fluid">
      <div class="row-fluid">
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6"></div>
          <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6"></div>
      </div>
  </div>
