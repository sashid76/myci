<ul class="nav" >    	
    <li class="<?php echo isActive($pageName, "home") ?>"><a href="<?php echo base_url("home/index") ?>">Home</a></li>
    <li class="<?php echo isActive($pageName, "about") ?>"><a href="<?php echo base_url("/about/index") ?>">About</a></li>
    <li class="<?php echo isActive($pageName, "contact") ?>"><a href="<?php echo base_url("/contact/index") ?>">Contact</a></li>
    <li class="<?php echo isActive($pageName, "admin") ?>"><a href="<?php echo base_url("/admin/") ?>">Admin</a></li>
    <li class="<?php echo isActive($pageName, "help") ?>"><a href="<?php echo base_url("/help/") ?>">Help</a></li>
    <li class="<?php echo isActive($pageName, "logout") ?>"><a href="<?php echo base_url("/logout/") ?>">Logout</a></li>
</ul>