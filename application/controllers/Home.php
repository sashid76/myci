<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

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

        $this->title = "Home";
        //$this->description = "description";
        //$this->keywords = "home1, home2";
        //$this->author = "author";
        //$this->copyright = "";

        $this->data['controllername'] = $this->uri->segment(1);
        /*
        $this->data['description'] = $this->seo->get_description();
        $this->data['keywords'] = $this->seo->get_keywords();
        */
        $this->data['page_title'] = $this->title;        

        //$this->flasher->success('Object Success');
        //$this->flasher->info('Object Info');
        
        Flasher::addInfo('Welcome to ' . $this->config->item('site_title'));
        Flasher::addSuccess('Static Success');
        Flasher::addWarning('Static Warning');
        Flasher::addError('Static Error');

        $controllername = $this->router->class;
        if (@file_exists(APPPATH."views/pages/{$controllername}/{$controllername}.php"))
        {
           $this->_render("pages/{$controllername}/{$controllername}.php",$renderData);
        }
    }

}