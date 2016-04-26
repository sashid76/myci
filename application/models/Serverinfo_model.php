<?php

class Serverinfo_model extends CI_Model {

    private $CI;
    private $upload_path;
    private $thumbs_path;
    private $default_db = null;

    function __construct()
    {
        parent::__construct();
        $this->CI =& get_instance();

        $this->default_db = $this->CI->load->database('default', TRUE);
        //$this->default_db->CI->save_queries = FALSE;        
    }

    //cpu
    public function cpu_usage(){
        return $this->CI->serverinfo->cpu();
    }

    public function cpu_load(){
        $this->default_db->select('*');
        $this->default_db->order_by("id", "desc");
        $this->default_db->limit(30);

        $query = $this->default_db->get('cpu_load');


        if ($query->num_rows() > 0 )
        {
            return $query->result_array();
        } 
        $query->free_result(); 
    }
    
    public function cpu_record(){
        $insert = array(
            'nvalue' => $this->CI->serverinfo->cpu()
        );

        $this->default_db->insert('cpu_load', $insert);

        if($this->default_db->affected_rows() > 0){
            return TRUE;
             
        }else{
            return FALSE;
        }
    }        
    //cpu

    //memory
    public function memory_usage(){
        return $this->CI->serverinfo->memory();
    }

    public function memory_load(){
        $this->default_db->select('*');
        $this->default_db->order_by("id", "desc");
        $this->default_db->limit(30);

        $query = $this->default_db->get('memory_load');


        if ($query->num_rows() > 0 )
        {
            return $query->result_array();
        } 
        $query->free_result(); 
    }

    public function memory_record(){
        $percent = $this->serverinfo->memory(); 
        $usage_percent = $percent['percent'];

        $insert = array(
            'nvalue' => $usage_percent
        );

        $this->default_db->insert('memory_load', $insert);

        if($this->default_db->affected_rows() > 0){
            return TRUE;
             
        }else{
            return FALSE;
        }
    }     
    //memory

    //disk
    public function disk_usage($disk=false){
        if(!$disk){ $disk='./';}

        return $this->CI->serverinfo->disk($disk);
    }
    //disk

    //network    
    public function network_usage($eth=false){
        if(!$eth){ 
            $eth = "venet0";
        }else{
            $eth = "eth0";
        }

        return $this->CI->serverinfo->network($eth);
    }
    //network    
}
?>