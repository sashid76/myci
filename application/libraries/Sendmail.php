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

class Sendmail {

	var $CI;
	var $phpver = '';
	var $useragent = '';

	public function __construct(){
		$this->CI =& get_instance();

	    $this->phpver =  phpversion();
	    $this->useragent = (isset($_SERVER["HTTP_USER_AGENT"]) ) ? $_SERVER["HTTP_USER_AGENT"] : $HTTP_USER_AGENT;
        date_default_timezone_set('Asia/Kuala_Lumpur');
        //$this->CI->output->enable_profiler(TRUE);
	}

	public function send_email($type, $from_mail = '', $from_user, $to_user, $bcc_user = '', $subject, $data){			

		// Email configuration
		$config = Array(
			'protocol' => $this->CI->config->item('oc_mail_protocol'),
			'smtp_host' => $this->CI->config->item('oc_mail_SMTP_host'),
			'smtp_port' => $this->CI->config->item('oc_mail_SMTP_port'),
			'smtp_user' => $this->CI->config->item('oc_mail_username'),
			'smtp_pass' => $this->CI->config->item('oc_mail_password'),
			'mailtype' => $this->CI->config->item('oc_mail_mailtype'),
			'charset' => $this->CI->config->item('oc_mail_charset'),
			'wordwrap' => $this->CI->config->item('oc_mail_wordwrap'),
			'validate' => $this->CI->config->item('oc_mail_validate')
		);	

		$gmail = Array(
		    'protocol' => $this->CI->config->item('gmail_protocol'),
		    'smtp_host' => $this->CI->config->item('gmail_SMTP_host'),
		    'smtp_port' => $this->CI->config->item('gmail_SMTP_port'),
		    'smtp_user' => $this->CI->config->item('gmail_SMTP_username'),
		    'smtp_pass' => $this->CI->config->item('gmail_SMTP_password'),
		    'mailtype'  => $this->CI->config->item('gmail_mailtype'), 
		    'charset'   => $this->CI->config->item('gmail_charset')
		);

		$this->CI->load->library('parser');

		if($type == 'verify'){
			$htmlMessage =  $this->CI->parser->parse('template/email/email_verify.php', $data, true);
		}else if($type == 'update'){
			$htmlMessage =  $this->CI->parser->parse('template/email/email_update.php', $data, true);
		}else if($type == 'moodle'){
			$htmlMessage =  $this->CI->parser->parse('template/email/email_moodle.php', $data, true);			
		}else if($type == 'contact'){
			$htmlMessage =  $this->CI->parser->parse('template/email/email_contact.php', $data, true);
		}else if($type == 'feedback'){
			$htmlMessage =  $this->CI->parser->parse('template/email/email_feedback.php', $data, true);
		}else if($type == 'test'){
			$htmlMessage =  $this->CI->parser->parse('template/email/test.php', $data, true);
		}	

		$this->CI->load->library('email');

		if (!$this->CI->config->item('is_gmail')){
			$this->CI->email->initialize($config);

            if($this->CI->session->userdata('message_type') == 'feedback'){
            	$from_mail = $this->CI->session->userdata('email_address');
            }else if($this->CI->session->userdata('message_type') == 'contact'){
            	$from_mail = $this->CI->session->userdata('email_address');
            }else{
				$from_mail = $this->CI->config->item('oc_sender');                	
            }
			
		}else{
			$this->CI->email->initialize($gmail);

            if($this->CI->session->userdata('message_type') == 'feedback'){
            	$from_mail = $this->CI->session->userdata('email_address');
            }else if($this->CI->session->userdata('message_type') == 'contact'){
            	$from_mail = $this->CI->session->userdata('email_address');
            }else{
				$from_mail = $this->CI->config->item('gmail_sender');
            }
		}		

		$this->CI->email->set_newline("\r\n");
		$this->CI->email->from($from_mail, $from_user);
		$this->CI->email->to($to_user);	

		if(!empty($bcc_user)){
			$this->CI->email->bcc($bcc_user);
		}
		
		$this->CI->email->set_newline("\r\n");
		$this->CI->email->subject($subject);
		$this->CI->email->message($htmlMessage);
			
		if($this->CI->email->send()){					
			return TRUE;
		}else{
			return FALSE;
			show_error($this->CI->email->print_debugger());
		}
	}

}

/* End of file Tools.php */
/* Location: ./application/libraries/Tools.php */