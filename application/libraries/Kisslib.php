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

class Kisslib {
   
    var $CI;
    var $_KISS_DB = null;
    var $college_reg_no = null;
    var $student_status = null;
    var $subject_code = null;
    var $enrol_status = null;
    var $phpver = null;

    public function __construct(){
        //parent::__construct();
        
        $this->CI =& get_instance();

        $this->phpver =  phpversion();
        $this->college_reg_no = $this->CI->config->item('college_reg_number');
        $this->student_status = $this->CI->config->item('student_status');
        //$this->$subject_code = null;
        $this->_KISS_DB = $this->CI->load->database('kiss', TRUE);
        $this->_KISS_DB->save_queries = FALSE;
    }
}