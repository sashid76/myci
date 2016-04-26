<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Uploader extends MY_Controller {

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
        
        $this->title = "Uploader";
        $this->data['page_title'] = $this->title;
        $this->data['my_local_ip_address'] = $this->input->ip_address();

        /* Upload */
        $config['upload_path'] = $this->config->item('photo_upload_path');
        //$config['upload_path'] = $this->config->item('cv_upload_path');
        $config['allowed_types'] = $this->config->item('photo_upload_allowed_type');
        //$config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = '100';
        $config['max_width']  = '0';
        $config['max_height']  = '0';
     
        $this->load->library('upload', $config);
     
        if(!is_dir($config['upload_path'])){
            mkdir($config['upload_path'], 0755, TRUE);
        }
     
        if (!$this->upload->do_upload('filename')){
            $error = array('error' => $this->upload->display_errors());          
            for ($i = 0; $i <  count($error); $i++) {
                $key=key($error);
                $val=$error[$key];
                    if ($val<> ' '){
                       Flasher::addError($val);
                    }
                next($error);
            }
        }
        else{
            $upload_data = $this->upload->data();
            $data['upload_data'] = $upload_data;
     
            $source_img = $upload_data['full_path'];    //Defining the Source Image
            $new_img = $upload_data['file_path'] . $upload_data['raw_name'].'_thumb'.$upload_data['file_ext'];  //Defining the Destination/New Image
     
            $data['source_image'] = $new_img;
     
            $this->create_thumb_gallery($upload_data, $source_img, $new_img, 250, 200);  //Creating Thumbnail for Gallery which keeps the original

            $this->data['uploaded'] = 'true';
            Flasher::addSuccess('File Successfully uploaded');
        }                  

        $this->data['controllername'] = $this->uri->segment(1);
        $controllername = $this->router->class;
        if (@file_exists(APPPATH."views/pages/{$controllername}/{$controllername}.php"))
        {
           $this->_render("pages/{$controllername}/{$controllername}.php",$renderData);
        }
    }

    function create_thumb_gallery($upload_data, $source_img, $new_img, $width, $height){
        //Copy Image Configuration
        $config['image_library'] = 'gd2';
        $config['source_image'] = $source_img;
        $config['create_thumb'] = FALSE;
        $config['new_image'] = $new_img;
        $config['quality'] = '100%';
     
        $this->load->library('image_lib');
        $this->image_lib->initialize($config);
     
        if ( ! $this->image_lib->resize() ){
            echo $this->image_lib->display_errors();
        }
        else{
            //Images Copied
            //Image Resizing Starts
            $config['image_library'] = 'gd2';
            $config['source_image'] = $source_img;
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = TRUE;
            $config['quality'] = '100%';
            $config['new_image'] = $source_img;
            $config['overwrite'] = TRUE;
            $config['width'] = $width;
            $config['height'] = $height;
            $dim = (intval($upload_data['image_width']) / intval($upload_data['image_height'])) - ($config['width'] / $config['height']);
            $config['master_dim'] = ($dim > 0)? 'height' : 'width';
     
            $this->image_lib->clear();
            $this->image_lib->initialize($config);
     
            if ( ! $this->image_lib->resize()){
                echo $this->image_lib->display_errors();
            }
            else{
                //echo 'Thumnail Created';
                return true;
            }
        }
    }

    function crop(){
        if($this->input->post('x',TRUE)){
            $X = $this->input->post('x');
            $Y = $this->input->post('y');
            $W = $this->input->post('w');
            $H = $this->input->post('h');
            $source = $this->input->post('source_image');
            echo $source;
     
            $config['image_library'] = 'gd2';
            $config['source_image'] = $source_img;
            $config['new_image'] = $source_img;
            $config['quality'] = '100%';
            $config['maintain_ratio'] = FALSE;
            $config['width'] = $width;
            $config['height'] = $height;
            $config['x_axis'] = $x_axis;
            $config['y_axis'] = $y_axis;
     
            $this->image_lib->clear();
            $this->image_lib->initialize($config); 
     
            if (!$this->image_lib->crop()){
                echo $this->image_lib->display_errors();
            }
            else{
                echo 'Cropped Perfectly';
            }
        }
    }

}