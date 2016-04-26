<?php

define('REMOTE_VERSION', 'http://localhost/myci/version.txt');
define('VERSION', '1.0.1');
$script = file_get_contents(REMOTE_VERSION);
$version = VERSION;

	if($version == $script){
	    echo "<div class=success><p>You have the latest version! $version</p></div>";
	} else {
	    echo "<div class=error><p>Current version is $version. There is an update available! $script</p></div>";
	}
?>