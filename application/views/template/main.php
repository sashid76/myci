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

  <div class="row">
      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">

        <section class="panel panel-primary">
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

        <section class="panel panel-primary">
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

        <section class="panel panel-primary">
          <header class="panel-heading">
            <h3 class="panel-title">Statistics</h3>
            <span class="pull-right clickable"><i class="fa fa-chevron-circle-up"></i></span>
          </header>
          <div class="panel-body">
            <?php
              $this->data['my_local_ip_address'] = $this->input->ip_address();
              $this->data['photo_upload_directory_size'] = $this->mytools->folderSize($this->config->item('photo_upload_path'));
              $this->data['cv_upload_directory_size'] = $this->mytools->folderSize($this->config->item('cv_upload_path'));
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
                  <td>Total Resource Person</td>
                  <td class="pull-right"><span class="badge alert-info"><?php //echo $this->mylibrary->count_rpcontact(); ?></span></td>
                </tr>
                <tr>
                  <td>Image folder</td>
                  <td class="pull-right"><span class="badge alert-info"><?php echo  $this->data['photo_upload_directory_size']; ?></span></td>
                </tr>
                <tr>
                  <td>CV folder</td>
                  <td class="pull-right"><span class="badge alert-info"><?php echo $this->data['cv_upload_directory_size']; ?></span></td>
                </tr>                
              </tbody>
            </table>
         
          </div>
          <footer class="panel-footer">Statistics</footer>
        </section>

      </div>
      <div class="col-lg-10 col-md-8 col-sm-8 col-xs-12">
          <?php echo $content_body ?>
      </div>
  </div>
</div>