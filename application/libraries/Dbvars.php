<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* Dbvars Library
* Simplifies storing variables in database, for example configuration variables.
* 
* You must create table first.
**/
/*

CREATE TABLE IF NOT EXISTS `config` (
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY  (`key`)
)

*/
/**
* Use:
*     $this->load->database();
*     $this->load->library('dbvars');
*     
* To set value: $this->dbvars->key = 'value';
* To get value:    $this->dbvars->key
* To check if the variable isset: $this->dbvars->__isset($key);
* To unset variable use: $this->dbvars->__unset($key);
* As of PHP 5.1.0 You can use isset($this->dbvars->key), unset($this->dbvars->key);
*
* @version: 0.1 (c) _andrew 27-03-2008
**/
class Dbvars {
    const TABLE = 'config';
    //Table where variables will be stored.
    
    //private $data;
    //private $CI;
    
    private $data;
    private $CI;
    private $default_db = null;

    function __construct(){
        //parent::__construct();
        date_default_timezone_set('Asia/Kuala_Lumpur');
        
        $this->CI =& get_instance();
        $this->phpver =  phpversion();

        $this->default_db = $this->CI->load->database('default', TRUE);
        $this->default_db->save_queries = FALSE;

        $query = $this->default_db->get(self::TABLE);
        foreach ($query->result() as $row){
               $this->data[$row->key] = unserialize($row->value);
        }
        $query->free_result();
    }

    function __get($key){
        return $this->data[$key];
    }
    
    function __set($key, $value){
        if (isset($this->data[$key])){
            $this->default_db->where('key', $key);
            $this->default_db->update(self::TABLE, array('value' => serialize($value)));
        } else {
            $this->default_db->insert(self::TABLE, array('key' => $key, 'value' => serialize($value)));
        }
        $this->data[$key] = $value;
    }
        
    /**  As of PHP 5.1.0  */
    function __isset($key) {
        return isset($this->data[$key]);
    }

    /**  As of PHP 5.1.0  */
    function __unset($key) {
        $this->default_db->delete(self::TABLE, array('key' => $key));    
        unset($this->data[$key]);
    }    
}