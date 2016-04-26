<?php echo $basejs ?>

<div class="container-fluid">
    <div class="row-fluid">
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

        <?php if(!$this->mylibrary->isUserLogged()){ ?> 

            <div class="row">
                <div style="padding-top:60px;" class="col-lg-12 hidden-xs">&nbsp;</div>
            </div>

            <div style="padding-bottom:10px;" class="row">
                <div class="col-lg-4 col-md-4 col-sm-6"></div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div>Username : demo@aibd.org.my</div>
                    <div>Password&nbsp;&nbsp;: demo123</div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6"></div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">&nbsp;</div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <?php if(!$this->mylibrary->isUserLogged()){ ?>          
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
                    <?php } ?>            
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">&nbsp;</div>
            </div>

        <?php }else{ ?>

            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-6">
                    <?php if(isActive($pageName, "admin")){ ?>
                        <div class="float_box column_div">
                            <fieldset>
                                <legend>Admin Menu</legend>
                                    <div class="list-group">
                                      <a class="list-group-item" href="#"><i class="fa fa-users"></i>&nbsp; Add Group</a>
                                      <a class="list-group-item" href="#"><i class="fa fa-user-plus"></i>&nbsp; Add User</a>
                                      <a class="list-group-item" href="#"><i class="fa fa-database"></i>&nbsp; Check Database</a>
                                      <a class="list-group-item" href="#"><i class="fa fa-server"></i>&nbsp; Check Server</a>
                                    </div>                                    
                            </fieldset>
                        </div>
                    <?php }else{ ?>

                    <div class="float_box column_div">
                        <fieldset>
                            <legend>Quick Menu</legend>
                                <div class="list-group">
                                  <a class="list-group-item" href="#"><i class="fa fa-home fa-fw"></i>&nbsp; Home</a>
                                  <a class="list-group-item" href="#"><i class="fa fa-book fa-fw"></i>&nbsp; Library</a>
                                  <a class="list-group-item" href="#"><i class="fa fa-pencil fa-fw"></i>&nbsp; Applications</a>
                                  <a class="list-group-item" href="#"><i class="fa fa-cog fa-fw"></i>&nbsp; Settings</a>
                                </div>                                    
                        </fieldset>
                    </div>
                    <div class="float_box column_div">
                        <fieldset>
                            <legend>Statistics</legend>
                                <ul class="list-group">
                                    <li class="list-group-item"><span class="badge alert-info"><?php echo $this->mylibrary->count_rpcontact(); ?></span> Total Resource Person</li>
                                    <li class="list-group-item"><span class="badge alert-success">3</span> Warnings</li>
                                    <li class="list-group-item"><span class="badge alert-danger">3</span> Warnings</li>
                                    <li class="list-group-item"><span class="badge alert-warning">3</span> My Visit Log</li>
                                </ul>                    
                        </fieldset>
                    </div>
                    <?php } ?> 
                </div>
                <div class="col-lg-10 col-md-10 col-sm-6">
                    <?php echo $content_body ?>
                </div>
            </div>
        <?php } ?>

    
</div>
