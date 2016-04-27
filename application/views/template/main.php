<style type="text/css">
.clickable{
    cursor: pointer;   
}

.panel-heading span {
  margin-top: -20px;
  font-size: 15px;
}
</style>

<?php echo $basejs ?>
<div class="container-fluid">
  <div class="row">
      <div class="col-md-4 logo"></div>
      <div class="col-md-4 col-lg-offset-3">
          <div class="alert-messages text-center"></div>
      </div>
      <div class="col-md-1">
          <div class="pull-right" style="padding-top: 30px;">
              <div id="loadingMsg"></div>
          </div>
      </div>
  </div>

  <?php 
    if(!$this->mylibrary->isUserLogged()){
      //echo "not logged in!";
    }else{
      //echo "logged in";
    }
  ?>

  <div class="row">
      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">

        <section class="panel panel-primary box-shadow-demo z-depth-2">
          <header class="panel-heading">
            <h3 class="panel-title">Admin Menu</h3>
          </header>
          
            <div class="list-group">
              <a class="list-group-item" href="admin/adduser"><i class="fa fa-user-plus"></i>&nbsp; Add User</a>
              <a class="list-group-item" href="admin/addgroup"><i class="fa fa-users"></i>&nbsp; Add Group</a>                                      
              <!--
              <a class="list-group-item" href="#"><i class="fa fa-database"></i>&nbsp; Check Database</a>
              <a class="list-group-item" href="#"><i class="fa fa-server"></i>&nbsp; Check Server</a>
              -->
            </div>                                    
          
          <footer class="panel-footer">Admin Menu</footer>
        </section>

        <section class="panel panel-primary box-shadow-demo z-depth-2">
          <header class="panel-heading">
            <h3 class="panel-title">Quick Menu</h3>
          </header>
          
            <div class="list-group">
              <a class="list-group-item" href="home"><i class="fa fa-home fa-fw"></i>&nbsp; Home</a>
              <a class="list-group-item" href="search"><i class="fa fa-book fa-fw"></i>&nbsp; Search</a>
              <!--
              <a class="list-group-item" href="#"><i class="fa fa-book fa-fw"></i>&nbsp; Library</a>
              <a class="list-group-item" href="#"><i class="fa fa-pencil fa-fw"></i>&nbsp; Applications</a>
              <a class="list-group-item" href="#"><i class="fa fa-cog fa-fw"></i>&nbsp; Settings</a>
              -->
            </div>        
          
          <footer class="panel-footer">Quick Menu</footer>
        </section>

        <section class="panel panel-primary box-shadow-demo z-depth-2">
          <header class="panel-heading">
            <h3 class="panel-title">Statistics</h3>
            <span style="margin-left: 5px;" id="refresh1" class="pull-right"><i class="fa fa-refresh"></i></span>
            <span class="pull-right clickable"><i class="fa fa-chevron-circle-up"></i></span>
          </header>
          <div class="panel-body panel-refresh">
            <div class="refresh-container"><i class="refresh-spinner fa fa-spinner fa-spin fa-5x"></i></div>

            <?php
              $log_path = "var/www/html/myci/myci/logs/audit/";

              $this->data['my_local_ip_address'] = $this->input->ip_address();
              $this->data['log_path'] = $this->mytools->folderSize($log_path);
              $this->data['photo_path'] = $this->mytools->folderSize($this->config->item('photo_path'));
              $this->data['cv_path'] = $this->mytools->folderSize($this->config->item('cv_path'));              
            ?>

            <table cellpadding="0" cellspacing="0" width="100%">
              <tbody>
                <tr>
                  <td>My IP Address</td>
                  <td class="pull-right"><span class="badge alert-info"><?php echo $this->data['my_local_ip_address']; ?></span></td>
                </tr>
                <tr>
                  <td>PHP Version</td>
                  <td class="pull-right"><span class="badge alert-info"><?php echo phpversion(); ?></span></td>
                </tr>
                <tr>
                  <td>Codeigniter</td>
                  <td class="pull-right"><span class="badge alert-info"><?php echo CI_VERSION; ?></span></td>
                </tr>
                <tr>
                  <td>Total RP</td>
                  <td class="pull-right"><span class="badge alert-info"><?php //echo $this->mylibrary->count_rpcontact(); ?></span></td>
                </tr>
                <tr>
                  <td>Log path</td>
                  <td class="pull-right"><span class="badge alert-info"><?php echo  $this->data['log_path']; ?></span></td>
                </tr>
                <tr>
                  <td>Image path</td>
                  <td class="pull-right"><span class="badge alert-info"><?php echo  $this->data['photo_path']; ?></span></td>
                </tr>
                <tr>
                  <td>CV path</td>
                  <td class="pull-right"><span class="badge alert-info"><?php echo $this->data['cv_path']; ?></span></td>
                </tr>                
              </tbody>
            </table>
         
          </div>
          <footer class="panel-footer refresh-data">Statistics</footer>
        </section>

      </div>
      <div class="col-lg-10 col-md-8 col-sm-8 col-xs-12">
          <?php echo $content_body ?>
      </div>
  </div>
</div>