<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
	
	//Page info
	protected $data = Array();
	protected $pageName = FALSE;
	protected $template = "main";
	protected $hasNav = TRUE;

	//Page contents
	protected $javascript = array();
	protected $css = array();
	protected $fonts = array();

	//Page Meta
    protected $title = FALSE;
    protected $url = FALSE;
    protected $description = FALSE;
    protected $keywords = FALSE;
    protected $author = FALSE;
    protected $author_email = FALSE;
    protected $version = FALSE;
    protected $copyright = FALSE;    
	
	function __construct()
	{	

		parent::__construct();
		$this->data["uri_segment_1"] = $this->uri->segment(1);
		$this->data["uri_segment_2"] = $this->uri->segment(2);
		
		$this->title = $this->config->item('site_title');
		$this->url = $this->config->item('site_url');
		$this->description = $this->config->item('site_description');
		$this->keywords = $this->config->item('site_keywords');
		$this->author = $this->config->item('site_author');
		$this->author_email = $this->config->item('site_author_email');
        $this->version = $this->config->item('site_version');
        $this->copyright = $this->config->item('site_copyright');      
        		
		$this->pageName = strToLower(get_class($this));
	}
	 	
	protected function _render($view,$renderData="FULLPAGE") {
        switch ($renderData) {
        case "AJAX"     :
            $this->load->view($view,$this->data);
        break;
        case "JSON"     :
            //echo json_encode($this->data);
        	$this->load->view($view,$this->data);        	
        break;
        case "FULLPAGE" :
        default         :

		//static
		$toTpl["javascript"] = $this->javascript;
		$toTpl["css"] = $this->css;
		$toTpl["fonts"] = $this->fonts;
		
		//meta
		$toTpl["title"] = $this->title;
		$toTpl["url"] = $this->url;
		$toTpl["description"] = $this->description;
		$toTpl["keywords"] = $this->keywords;
		$toTpl["author"] = $this->author;
		$toTpl["author_email"] = $this->author_email;
		$toTpl["author"] = $this->author;
		$toTpl["version"] = $this->version;
		$toTpl["copyright"] = $this->copyright;

		//data
		$toBody["content_body"] = $this->load->view($view,array_merge($this->data,$toTpl),true);
		
		//nav menu
		if($this->hasNav){
			$this->load->helper("nav");
			$toMenu["pageName"] = $this->pageName;
			$toHeader["nav"] = $this->load->view("template/nav",$toMenu,true);
		}

		$toHeader["basejs"] = $this->load->view("template/basejs",$this->data,true);		
		$toBody["header"] = $this->load->view("template/header",$toHeader,true);
		$toBody["footer"] = $this->load->view("template/footer",'',true);		
		$toTpl["body"] = $this->load->view("template/".$this->template,$toBody,true);		
		
		//render view
		$this->load->view("template/skeleton",$toTpl);
		break;
    }
	}
}
