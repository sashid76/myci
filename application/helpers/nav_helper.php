<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @desc Simple function to check if current page is equal to nav list element.
 *       This case return "active" as class name for the list element.
 * @param String $pageID
 * @param String $linkID
 * @return String/Null
 */

if(!function_exists('isActive')){
	function isActive($pageID,$linkID){
	    if($pageID == $linkID){
	        return "active";
	    }
	}
}

/* End of file nav_helper.php */
/* Location: ./application/helpers/nav_helper.php */