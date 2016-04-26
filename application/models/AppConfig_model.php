<?php

class AppConfig_model extends CI_Model {
 
    protected $table;

    public function __construct(){
        $this->table = 'appconfig';
    }

    public function get_configurations(){
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function update_config($data){
        $success = true;
    
        foreach($data as $key=>$value){
            if(!$this->save($key,$value)){
                $success=false;
                break;  
            }
        }
        return $success;
    }

    public function save($key,$value){
    
        $config_data=array(
        'key'=>$key,
        'value'=>$value
        );
    
        $this->db->where('key', $key);
        return $this->db->update('appconfig',$config_data); 
    }
}