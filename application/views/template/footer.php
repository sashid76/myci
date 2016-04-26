<footer style="border-top: 1px solid #cccccc;">
  <div class="container-fluid">
    <div class="row">

      <div class="widgets">

        <div class="col-md-3">
          <div class="fwidget">
            
            <h4>Contact</h4>
              <p>Nullam justo nunc, dignissim at convallis posuere, sodales eu orci. </p>
              <hr />
              <i class="icon-home"></i> &nbsp; 123, Some Area
              <hr />
              <i class="icon-phone"></i> &nbsp; +239-3823-3434
              <hr />
              <i class="icon-envelope-alt"></i> &nbsp; <a href="mailto:#">someone@company.com</a>
              <hr />

              <ul class="list-inline bs-docs-social-buttons apico">
                  <li><a href="https://www.facebook.com/OlympiaCollege" target="_NEW"><span id="social_facebook2" class="apico-black apico-facebook-square"></span></a></li>
                  <li><a href="https://twitter.com/OlympiaCollege" target="_NEW"><span id="social_twitter2" class="apico-black apico-twitter-square"></span></a></li>
                  <li><a href="http://www.linkedin.com/company/olympia-college-sdn-bhd-" target="_NEW"><span id="social_linkedin2" class="apico-black apico-linkedin-square"></span></a></li>
                  <li><a href="#" target="_NEW"><span id="social_googleplus2" class="apico-black apico-google-plus-square"></span></a></li>
                  <li><a href="http://www.youtube.com/user/MyOlympiaCollege" target="_NEW"><span id="social_youtube2" class="apico-black apico-youtube-square"></span></a></li>
              </ul>
          </div>
        </div>

        <div class="col-md-3">
          <div class="fwidget">
            <h4>Categories</h4>
            <ul>
              <li><a href="#">Condimentum - Condimentum gravida</a></li>
              <li><a href="#">Etiam at - Condimentum gravida</a></li>
              <li><a href="#">Fusce vel - Condimentum gravida</a></li>
              <li><a href="#">Vivamus - Condimentum gravida</a></li>
              <li><a href="#">Pellentesque - Condimentum gravida</a></li>
              <li><a href="#">Fusce vel - Condimentum gravida</a></li>
            </ul>
          </div>
        </div>        

        <div class="col-md-3">
          <div class="fwidget">
            
            <h4>Subscribe</h4>
            <p>Duis leo risus, condimentum ut posuere ac, vehicula luctus nunc.  Quisque rhoncus, a sodales enim arcu quis turpis.</p>
            <p>Enter you email to Subscribe</p>
            
            <form class="form-inline" role="form">
              <div class="form-group">
                <input type="text" class="form-control" id="subscribe" placeholder="Subscribe...">
              </div>
              <br><br>
              <button type="submit" class="btn btn-danger">Subscibe</button>
            </form>

          </div>
        </div>

        <div class="col-md-3">
          <div class="fwidget">
            <h4>Recent Posts</h4>
            <ul>
              <li><a href="#">Sed eu leo orci, condimentum gravida metus</a></li>
              <li><a href="#">Etiam at nulla ipsum, in rhoncus purus</a></li>
              <li><a href="#">Fusce vel magna faucibus felis dapibus facilisis</a></li>
              <li><a href="#">Vivamus scelerisque dui in massa</a></li>
              <li><a href="#">Pellentesque eget adipiscing dui semper</a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="copy">
          <p><?php echo $this->config->item('site_copyright'); ?>
        <?php $fromYear = 1976; $thisYear = (int)date('Y'); echo $fromYear . (($fromYear != $thisYear) ? ' - ' . $thisYear : '');?> - <a href="#"><?php echo $this->config->item('org_name'); ?></a> - <a href="index.html">Home</a> | <a href="aboutus.html">About Us</a> | <a href="faq.html">FAQ</a> | <a href="contactus.html">Contact Us</a> | <a href="changelog">Change Log</a></p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="copy">
          <div class=pull-right>
            Last Updated : <?php echo $this->config->item('site_lastupdate'); ?> - Version <?php echo $this->config->item('site_version'); ?>
          </div>          
        </div>
      </div>      
    </div>
    <div class="clearfix"></div>
  </div>
</footer>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="float_box column_div">
          Time taken to render this page: <?php echo $this->benchmark->elapsed_time(); ?>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <div class="float_box column_div">
          Memory consumed: <?php echo $this->benchmark->memory_usage(); ?>
      </div>
    </div>
  </div>
</div>