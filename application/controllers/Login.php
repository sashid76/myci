<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

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
        
        /*
        $this->data['config'] = $this->init->get_config();
                 
        $this->title = $this->session->userdata('site_title');
        $this->url = $this->session->userdata('site_url');
        $this->description = $this->session->userdata('site_description');
        $this->keywords = $this->session->userdata('site_keywords');
        $this->author = $this->session->userdata('site_author');    
        $this->author_email = $this->session->userdata('site_author_email');
        $this->version = $this->session->userdata('site_version');
        $this->copyright = $this->session->userdata('site_copyright');
        */
        
        $this->title = "Template";
        //$this->description = "description";
        //$this->keywords = "template1, template2";
        //$this->author = "author";
        //$this->copyright = "";

        $this->data['controllername'] = $this->uri->segment(1);
        /*
        $this->data['description'] = $this->seo->get_description();
        $this->data['keywords'] = $this->seo->get_keywords();
        */

        //$this->data['country_details'] = $this->template_model->get_countries();

        $controllername = $this->router->class;
        if (@file_exists(APPPATH."views/login.php"))
        {
           $this->load->view("login.php",$renderData);
        }
    }

}