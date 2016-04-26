<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class SEO {

	var $CI;

	public function __construct(){
		$this->CI =& get_instance();

	    $this->phpver =  phpversion();
	    $this->do_gzip_compress = FALSE;
	    $this->useragent = (isset($_SERVER["HTTP_USER_AGENT"]) ) ? $_SERVER["HTTP_USER_AGENT"] : $HTTP_USER_AGENT;       
	}

	/*
	if (!function_exists('google_analytics'))
	{
		public function google_analytics($account){
			$code = "<script src='http://www.google-analytics.com/ga.js' type='text/javascript'>";
			$code .= '<script type="text/javascript">';
			$code .= ' try{ ';
			$code .= ' var pageTracker = _gat._getTracker("'.$account.'"); ';
			$code .= ' pageTracker._trackPageview(); ';
			$code .= ' } catch(err) {} ';
			$code .= '</script>';
			 
			return $code;
		}
	}
	*/

	public function get_description(){
		return $this->CI->config->item('site_description');
	}

	public function get_keywords(){
		return $this->CI->config->item('site_keywords');
	}

}