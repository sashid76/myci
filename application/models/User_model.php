<?php

class User_model extends CI_Model {

    private $CI;

    var $table = 'users';
    var $column = array('uid','name','username','access_level'); //set column field database for order and search
    var $order = array('uid' => 'asc'); // default order
 
    function __construct()
    {
        parent::__construct();
        $this->CI =& get_instance();
        $this->default_db = $this->load->database('default', TRUE);
        //$this->default_db->save_queries = FALSE;
    }


    public function _get_datatables_query(){
         
        $this->default_db->from($this->table);
 
        $i = 0;
     
        foreach ($this->column as $item) // loop column
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->default_db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->default_db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->default_db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column) - 1 == $i) //last loop
                    $this->default_db->group_end(); //close bracket
            }
            $column[$i] = $item; // set column array variable to order processing
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->default_db->order_by($column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->default_db->order_by(key($order), $order[key($order)]);
        }
    }

    public function get_datatables(){
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->default_db->limit($_POST['length'], $_POST['start']);
        $query = $this->default_db->get();
        return $query->result();
    }

    public function count_filtered(){
        $this->_get_datatables_query();
        $query = $this->default_db->get();
        return $query->num_rows();
    }
 
    public function count_all(){
        $this->db->from($this->table);
        return $this->default_db->count_all_results();
    }
}
?>