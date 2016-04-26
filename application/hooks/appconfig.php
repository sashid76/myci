<?php

  	//Loads configuration from database into global CI config
  	function load_config(){
    $CI =& get_instance();
    $appConfigOptions = $CI->AppConfig_model->get_configurations();
 
	    if($appConfigOptions){     
	        foreach($appConfigOptions as $appConfigOption){
	            $CI->config->set_item($appConfigOption->key,$appConfigOption->value);
	        }
	    }
  	}
?>