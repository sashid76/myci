<?php

class Changelog_model extends CI_Model {

    private $CI;
    
    var $table = 'changelog';

    function __construct()
    {
        parent::__construct();
        $this->CI =& get_instance();
        $this->default_db = $this->load->database('default', TRUE);
        //$this->default_db->save_queries = FALSE;
    }

    function get_changelog(){
        $this->default_db->select('date, maintainer, description, type');
        $this->default_db->from($this->table);
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

    public function count_all(){
        $this->default_db->select('*');
        $this->default_db->from($this->table);
        //$this->default_db->where('gender','Male');
       
        $query = $this->default_db->get();

        if($query->num_rows() > 0){            
            foreach ($query->result() as $row){
                return $query->num_rows();
            }
        }    
    }
}
?>