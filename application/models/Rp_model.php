<?php

class Rp_model extends CI_Model {

    private $CI;

    function __construct()
    {
        parent::__construct();
        $this->CI =& get_instance();
        $this->default_db = $this->load->database('default', TRUE);
        //$this->default_db->save_queries = FALSE;
    }

    function get_countries(){
        $this->default_db->select('demonym, countryName');
        $this->default_db->from('countries');
        $this->db->order_by('id', 'ASC');

        $query = $this->default_db->get();
        //echo $this->default_db->last_query();
        
        if($query->num_rows() > 0){
            foreach ($query->result() as $row){
                $data[] = $row;
            }          
            return $data;
        }        
        $query->free_result();
    }

    function get_title(){
        $this->default_db->select('title');
        $this->default_db->from('title');
        $this->db->order_by('title', 'ASC');

        $query = $this->default_db->get();
        //echo $this->default_db->last_query();
        
        if($query->num_rows() > 0){
            foreach ($query->result() as $row){
                $data[] = $row;
            }          
            return $data;
        }        
        $query->free_result();
    }         
}
?>