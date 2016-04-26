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
 * Compression Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Compression
 * @author		Sashi
 * @link		http://codeigniter.com/user_guide/libraries/cart.html
 */

class Encryption {


	var $CI;
	var $phpver = '';
	var $do_gzip_compress = FALSE;
	var $useragent = '';


	public function __construct(){
		$this->CI =& get_instance();

	    $this->phpver =  phpversion();
	    $this->useragent = (isset($_SERVER["HTTP_USER_AGENT"]) ) ? $_SERVER["HTTP_USER_AGENT"] : $HTTP_USER_AGENT;
        date_default_timezone_set('Asia/Kuala_Lumpur');
        //$this->CI->output->enable_profiler(TRUE);
	}

	/**
	 * Returns an encrypted & utf8-encoded
	 */
	public function encrypt($pure_string, $encryption_key) {
	    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
	    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
	    $encrypted_string = mcrypt_encrypt(MCRYPT_BLOWFISH, $encryption_key, utf8_encode($pure_string), MCRYPT_MODE_ECB, $iv);
	    return $encrypted_string;
	}

	/**
	 * Returns decrypted original string
	 */
	public function decrypt($encrypted_string, $encryption_key) {
	    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
	    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
	    $decrypted_string = mcrypt_decrypt(MCRYPT_BLOWFISH, $encryption_key, $encrypted_string, MCRYPT_MODE_ECB, $iv);
	    return $decrypted_string;
	}

	public function encrypt_decrypt($action, $string) {
		$output = false;

		$key = 'My strong random secret key';

		// initialization vector 
		$iv = md5(md5($key));

		if( $action == 'encrypt' ) {
		   $output = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, $iv);
		   $output = base64_encode($output);
		}
		else if( $action == 'decrypt' ){
		   $output = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($string), MCRYPT_MODE_CBC, $iv);
		   $output = rtrim($output, "");
		}
		return $output;
	}
}