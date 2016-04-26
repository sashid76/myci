<?php

class Login_model extends CI_Model {

    private $CI;

    function __construct()
    {
        parent::__construct();
        $this->CI =& get_instance();
        $this->default_db = $this->load->database('default', TRUE);
        //$this->default_db->save_queries = FALSE;
    }

    function do_login($emailaddress, $password){
        //log_message('info', "rpdb_inside_do_login_start");

        $logger = $this->logging->get_logger('audit');
        $this->CI->session->set_userdata (array('current_password' => $password));

        $this->default_db->select('*');
        $this->default_db->from('users');
        $this->default_db->where('username',$emailaddress);
        $this->default_db->where('password',MD5($password));
       
        $query = $this->default_db->get();

        if($query->num_rows() > 0){

            foreach ($query->result() as $row){
                $this->CI->session->set_userdata (array('realname' => $row->name));
                $this->CI->session->set_userdata (array('username' => $row->username));
                $this->CI->session->set_userdata (array('uid' => $row->uid));
                $this->CI->session->set_userdata (array('is_first_login' => $row->is_first_login));
                $this->CI->session->set_userdata (array('access_level' => $row->access_level));
            }

            $isLoggedIn = array(
                'name'   => 'isLoggedIn',
                'value'  => TRUE,
                'expire' => time()+86500,
                'domain' => $_SERVER['SERVER_NAME'],
                'path' => '/',
                'prefix' => ''
            );
            $this->CI->input->set_cookie($isLoggedIn);

            $login_attempt = array(
                'name'   => 'login_attempt',
                'value'  => 'success',
                'expire' => -1,
                'domain' => $_SERVER['SERVER_NAME'],
                'path' => '/',
                'prefix' => ''
            );
            $this->CI->input->set_cookie($login_attempt);

            $this->CI->session->set_userdata (array('isLoggedIn' => TRUE));

            //log_message('info', "isLoggedIn:true");
            $some_data = array('isLoggedIn' => TRUE);
            $this_data = json_encode($some_data);
            $logger->info('info: ' . $this->session->userdata('realname') . ' successfully logged in.');
            return $this_data;
        }else{

            $isLoggedIn = array(
                'name'   => 'isLoggedIn',
                'value'  => FALSE,
                'expire' => time()+86500,
                'domain' => $_SERVER['SERVER_NAME'],
                'path' => '/',
                'prefix' => ''
            );
            $this->CI->input->set_cookie($isLoggedIn);

            $login_attempt = array(
                'name'   => 'login_attempt',
                'value'  => 'failed',
                'expire' => -1,
                'domain' => $_SERVER['SERVER_NAME'],
                'path' => '/',
                'prefix' => ''
            );
            $this->CI->input->set_cookie($login_attempt);

            $this->CI->session->set_userdata (array('isLoggedIn' => FALSE));

            //log_message('info', "isLoggedIn:false");
            $some_data = array('isLoggedIn' => FALSE);
            $this_data = json_encode($some_data);
            $logger->error('error: ' . $this->input->post('txtEmailAddress') . ' has entered wrong login credentials!');
            return $this_data;            
        }
        $query->free_result();
    }

    function is_user_exist($emailaddress){
        //log_message('info', "rpdb_inside_is_user_exist_start");
        $logger = $this->logging->get_logger('audit');
        
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
                'expire' => -1,
                'domain' => $_SERVER['SERVER_NAME'],
                'path' => '/',
                'prefix' => ''
            );
            $this->CI->input->set_cookie($login_attempt);
            $logger->warning('warning: ' . $emailaddress . ' invalid user!!');
            return FALSE;
        }
        $query->free_result();
    }

    function auditlog($action,$username){

        switch ($action) {
            case "INFO":
                $message = "Successful login attempt.";
                break;
            case "WARNING":
                $message = "Successful logout attempt.";
                break;
            case "ERROR":
                $message = "Unsuccessful login attempt!";
                break;
            case "SEVERE":
                $message = "Successfully changed password.";
                break;
            default:
                $message = "An unknown error has occured!";
        }
    }
}
?>