<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		Sashi
 * @copyright	Copyright (c) 2013, Sashi, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Tools Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Tools
 * @author		Sashi
 * @link		http://codeigniter.com/user_guide/libraries/cart.html
 */

class Init {

	var $CI;
	var $phpver = '';
	var $useragent = '';
	var $default_db = null;

	public function __construct(){

		$this->CI =& get_instance();

	    $this->phpver =  phpversion();
	    $this->useragent = (isset($_SERVER["HTTP_USER_AGENT"]) ) ? $_SERVER["HTTP_USER_AGENT"] : $HTTP_USER_AGENT;
        date_default_timezone_set('Asia/Kuala_Lumpur');
        ini_set('max_execution_time', 300); //300 seconds = 5 minutes
        
        $this->default_db = $this->CI->load->database('default', TRUE);
        //$this->default_db->CI->save_queries = FALSE;        
	}

	public function initialise(){
	    date_default_timezone_set('Asia/Kuala_Lumpur'); 
	    setlocale(LC_MONETARY, 'ms_MY');
	    //setlocale(LC_MONETARY, 'en_MY');
	}

    public function show_profiler(){	
    	$this->CI->output->enable_profiler(TRUE);
    }

    public function get_config(){
		$this->default_db->select('*');
        $query = $this->default_db->get('config');
       
       	
        if($query->num_rows > 0){
            foreach ($query->result() as $row)
            {              
                $this->CI->session->set_userdata (array('site_title' => $row->site_title));
                $this->CI->session->set_userdata (array('site_url' => $row->site_url));
                $this->CI->session->set_userdata (array('site_description' => $row->site_description));
                $this->CI->session->set_userdata (array('site_keywords' => $row->site_keywords));
                $this->CI->session->set_userdata (array('site_author' => $row->site_author));
                $this->CI->session->set_userdata (array('site_author_email' => $row->site_author_email));
                $this->CI->session->set_userdata (array('site_version' => $row->site_version));
                $this->CI->session->set_userdata (array('site_copyright' => $row->site_copyright));
                $this->CI->session->set_userdata (array('site_last_update' => $row->site_last_update ));                
            }
        }   	
    }
}

/* End of file Tools.php */
/* Location: ./application/libraries/Tools.php */