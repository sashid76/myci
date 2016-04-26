<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Secure {

	var $CI;

	
	public function __construct(){
        //parent::__construct();
        
        $this->CI =& get_instance();

        $this->phpver =  phpversion();

        //$this->college_reg_no = $this->CI->config->item('college_reg_number');
        //$this->student_status = $this->CI->config->item('student_status');

        //$this->_KISS_DB = $this->CI->load->database('kiss', TRUE);
        //$this->_KISS_DB->save_queries = FALSE;
    }


    public function isLogged(){
        if($this->CI->session->userdata('isExist') && $this->CI->session->userdata('isLogged')){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function isEmailNull(){
        if($this->CI->session->userdata('emailAddress') == null){
            return TRUE;
        }else{
            return FALSE;
        }  
    }

    public function getSex(){
        if($this->CI->session->userdata('sex') == 'MALE'){
            return "Mr. ";
        }else{
            return "Ms. ";
        }         
    }

    public function getAge(){

    }

    public function getCampus(){

    }

    public function getCourseCode(){
        
    }
}