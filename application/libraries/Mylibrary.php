<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package     CodeIgniter
 * @author      Sashi
 * @copyright   Copyright (c) 2013, Sashi, Inc.
 * @license     http://codeigniter.com/user_guide/license.html
 * @link        http://codeigniter.com
 * @since       Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Tools Class
 *
 * @package     CodeIgniter
 * @subpackage  Libraries
 * @category    Tools
 * @author      Sashi
 * @link        http://codeigniter.com/user_guide/libraries/cart.html
 */

class Mylibrary {

    var $CI;
    var $phpver = '';
    var $useragent = '';
    var $default_db = null;

    public function __construct(){

        $this->CI =& get_instance();

        $this->phpver =  phpversion();
        $this->useragent = (isset($_SERVER["HTTP_USER_AGENT"]) ) ? $_SERVER["HTTP_USER_AGENT"] : $HTTP_USER_AGENT;
        date_default_timezone_set('Asia/Kuala_Lumpur');
        //$this->CI->output->enable_profiler(TRUE);
        ini_set('max_execution_time', 300); //300 seconds = 5 minutes
        
        $this->default_db = $this->CI->load->database('default', TRUE);
        //$this->default_db->CI->save_queries = FALSE;        
    }

    public function initialise(){
        date_default_timezone_set('Asia/Kuala_Lumpur'); 
        setlocale(LC_MONETARY, 'ms_MY');
        //setlocale(LC_MONETARY, 'en_MY');
    }

    public function isUserExist($username){

        $this->default_db->select('username');
        $this->default_db->from('users');
        $this->default_db->where('is_user_active',1);
        $this->default_db->where('username',$username);
       
        $query = $this->default_db->get();

        if($query->num_rows() > 0){            
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function isUserLogged(){
        if($this->CI->session->userdata('isExist') && $this->CI->session->userdata('isLoggedIn')){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function isFirstLogin($username){

        $this->default_db->select('username, is_first_login');
        $this->default_db->from('users');
        $this->default_db->where('is_first_login',1);
        $this->default_db->where('username',$username);
       
        $query = $this->default_db->get();

        if($query->num_rows() > 0){            
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function isACL($username){

        $this->default_db->select('username, access_level');
        $this->default_db->from('users');
        $this->default_db->where('username',$username);          
        $query = $this->default_db->get();

        if($query->num_rows() > 0){            

            foreach ($query->result() as $row){

                if($row->access_level == 'User') {
                    return "User";
                }else if($row->access_level == 'PM') {
                    return "PM";
                }else if($row->access_level == 'Admin') {
                    return "Admin";
                }
            }
        }else{
            return FALSE;
        }
    }


    /*-- Tools -- */

    function count_rpcontact(){

        $this->default_db->select('*');
        $this->default_db->from('rpcontact');
        //$this->default_db->where('gender','Male');
       
        $query = $this->default_db->get();

        if($query->num_rows() > 0){            
            foreach ($query->result() as $row){
                return $query->num_rows();
            }
        }
    }

    function getRealIP() {
        $headers = array ('HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'HTTP_VIA', 'HTTP_X_COMING_FROM', 'HTTP_COMING_FROM', 'HTTP_CLIENT_IP' );
     
        foreach ( $headers as $header ) {
            if (isset ( $_SERVER [$header]  )) {
            
                if (($pos = strpos ( $_SERVER [$header], ',' )) != false) {
                    $ip = substr ( $_SERVER [$header], 0, $pos );
                } else {
                    $ip = $_SERVER [$header];
                }
                $ipnum = ip2long ( $ip );
                if ($ipnum !== - 1 && $ipnum !== false && (long2ip ( $ipnum ) === $ip)) {
                    if (($ipnum - 184549375) && // Not in 10.0.0.0/8
                    ($ipnum  - 1407188993) && // Not in 172.16.0.0/12
                    ($ipnum  - 1062666241)) // Not in 192.168.0.0/16
                    if (($pos = strpos ( $_SERVER [$header], ',' )) != false) {
                        $ip = substr ( $_SERVER [$header], 0, $pos );
                    } else {
                        $ip = $_SERVER [$header];
                    }
                    return $ip;
                }
            }
            
        }
        return $_SERVER ['REMOTE_ADDR'];
    }

}

/* End of file Tools.php */
/* Location: ./application/libraries/Tools.php */