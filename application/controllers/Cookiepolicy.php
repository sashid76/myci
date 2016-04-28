<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cookiepolicy extends MY_Controller {

    public function __construct() {
        parent::__construct();

    }

    public function index($renderData = ""){	

        //if(!$this->mylibrary->isUserLogged()){            
        //    redirect('login');
        //}else{
        //    if($this->mylibrary->isFirstLogin($this->session->userdata('username'))){
        //        redirect('changepwd');
        //    }else{
        //        //redirect('home');    
        //    }
        //}

        $this->title = "Cookie Policy";
        $this->data['controllername'] = $this->uri->segment(1);
        $this->data['page_title'] = $this->title;        
      
            if(!$this->mylibrary->isUserLogged()){
              Flasher::addWarning('Welcome to ' . $this->config->item('site_title') . " Kindly proceed to login now!");
            }else{
              Flasher::addSuccess('Welcome to ' . $this->config->item('site_title'));
            }

        $controllername = $this->router->class;
        if (@file_exists(APPPATH."views/pages/{$controllername}/{$controllername}.php"))
        {
           $this->_render("pages/{$controllername}/{$controllername}.php",$renderData);
        }
    }

}