<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('upload_model');
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
        
        $this->title = "Upload";
        $this->data['page_title'] = $this->title;
        $this->data['my_local_ip_address'] = $this->input->ip_address();

        //$this->flasher->success('Object Success');
        //$this->flasher->info('Object Info');
        
        //Flasher::addInfo('Static Info');
        Flasher::addSuccess('Static Success');
        //Flasher::addWarning('Static Warning');
        //Flasher::addError('Static Error');

        /* Upload */
        if($this->input->post('userSubmit')){
            
            //Check whether user upload picture
            if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = 'uploads/cv/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx';
                $config['file_name'] = $_FILES['picture']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();



                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }
            
            //Prepare array of user data
            $userData = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'picture' => $picture
            );
            
            //Pass user data to model
            $insertUserData = $this->upload_model->insert($userData);
            
            //Storing insertion status message.
            if($insertUserData){
                $this->session->set_flashdata('success_msg', 'User data have been added successfully.');
            }else{
                $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
            }
        }

        $this->data['controllername'] = $this->uri->segment(1);
        $controllername = $this->router->class;
        if (@file_exists(APPPATH."views/pages/{$controllername}/{$controllername}.php"))
        {
           $this->_render("pages/{$controllername}/{$controllername}.php",$renderData);
        }
    }


}