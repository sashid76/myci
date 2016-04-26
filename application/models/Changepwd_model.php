<?php

class Changepwd_model extends CI_Model {

    private $CI;

    function __construct()
    {
        parent::__construct();
        $this->CI =& get_instance();
        $this->default_db = $this->load->database('default', TRUE);
        //$this->default_db->save_queries = FALSE;
    }

    function do_changepwd($newpassword, $confirmpassword){

        if($this->CI->session->userdata('current_password') != $confirmpassword){
            $data = array(
                    'password' => md5($confirmpassword),
                    'is_first_login' => 0
            );

            $this->default_db->where('uid', $this->CI->session->userdata('uid'));
            $this->default_db->update('users', $data);

            $this->CI->session->set_userdata (array('current_password' => $confirmpassword));
            $this->CI->session->set_userdata (array('isPasswordChanged' => TRUE));
            return TRUE;           
        }else{
            $this->CI->session->set_userdata (array('isPasswordChanged' => FALSE));
            return FALSE;
        }

    }

    function is_user_exist($emailaddress){
        //log_message('info', "rpdb_inside_is_user_exist_start");

        $this->default_db->select('username,password');
        $this->default_db->from('users');
        $this->default_db->where('username',$emailaddress);
       
        $query = $this->default_db->get();

        if($query->num_rows() > 0){            
            $this->CI->session->set_userdata (array('isExist' => TRUE));
            //log_message('info', "isExist:true");
            return TRUE;
        }else{
            $this->CI->session->set_userdata (array('isExist' => FALSE));
            //log_message('info', "isExist:false");

            $login_attempt = array(
                'name'   => 'login_attempt',
                'value'  => 'failed',
                'expire' => time()+86500,
                'domain' => $_SERVER['SERVER_NAME'],
                'path' => '/',
                'prefix' => ''
            );
            $this->CI->input->set_cookie($login_attempt);
                        
            return FALSE;
        }

        //log_message('info', "rpdb_inside_is_user_exist_end");        
    }
}
?>