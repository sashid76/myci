<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('is_https_on')){
    function is_https_on(){
        if ( ! isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on' ){
            return FALSE;
        }
        return TRUE;
    }
}

if(!function_exists('use_ssl')){
    function use_ssl($turn_on = TRUE){
        $url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

        if ( $turn_on ){
            if ( ! is_https_on() && $_SERVER['HTTP_HOST'] != 'localhost'){
                redirect('https://' . $url, 'location', 301 );
                exit;
            }
        }else{
            if ( is_https_on() ){
                redirect('http://' . $url, 'location', 301 );
                exit;
            }
        }
    }
}

/* End of file https_helper.php */
/* Location: ./application/helpers/https_helper.php */