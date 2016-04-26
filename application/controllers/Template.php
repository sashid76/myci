<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends MY_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('template_model');
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
        $this->data['page_title'] = $this->title;       

        //$this->data['country_details'] = $this->template_model->get_countries();
        //$this->data['session_id'] = $this->session->userdata('session_id');



           $this->load->library('email');

            $subject = 'This is a test';
            $message = '<p>This message has been sent for testing purposes.</p>';

            // Get full html:
            $body =
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset='.strtolower(config_item('charset')).'" />
    <title>'.html_escape($subject).'</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>
'.$message.'
</body>
</html>';
            // Also, for getting full html you may use the following internal method:
            //$body = $this->email->full_html($subject, $message);

            $result = $this->email
                ->from('spam@aibd.org.my')
                ->reply_to('spam@aibd.org.my')    // Optional, an account where a human being reads.
                ->to('sashi@aibd.org.my')
                ->subject($subject)
                ->message($body)
                ->send();

            //var_dump($result);
            //echo '<br />';
            //echo $this->email->print_debugger();

            //exit;

            if($result == 1){
                Flasher::addSuccess('Mail successfully sent.');
            }else{
                Flasher::addWarning('Could not send mail! Check email settings.');
            }

        $controllername = $this->router->class;
        if (@file_exists(APPPATH."views/pages/{$controllername}/{$controllername}.php"))
        {
           $this->_render("pages/{$controllername}/{$controllername}.php",$renderData);
        }
    }

}