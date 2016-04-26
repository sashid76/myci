<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		Sashi
 * @copyright	Copyright (c) 2013, Sashi, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Tools Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Tools
 * @author		Sashi
 * @link		http://codeigniter.com/user_guide/libraries/cart.html
 */

class Tools {

	var $CI;
	var $phpver = '';
	var $do_gzip_compress = FALSE;
	var $useragent = '';


	public function __construct(){
		$this->CI =& get_instance();

	    $this->phpver =  phpversion();
	    $this->do_gzip_compress = FALSE;
	    $this->useragent = (isset($_SERVER["HTTP_USER_AGENT"]) ) ? $_SERVER["HTTP_USER_AGENT"] : $HTTP_USER_AGENT;       
	}

	public function initialise(){
	   	error_reporting(E_ALL);
	    ini_set('display_errors','off');    
	    date_default_timezone_set('Asia/Kuala_Lumpur'); 
	}

    public function __get($var)
    {
       return get_instance()->$var;
    }

    public function show_profiler(){
		
    	$this->CI->output->enable_profiler(TRUE);
    }

    function pagerefresh() {
        //redirects the page to the current page 
        header('location:'.$SERVER['HTTPREFERER']); 
        flush(); 
        exit(); 
    } 

	function domain_exists($email, $record = 'MX'){
        list($user, $domain) = preg_split('/[\s@x]+/', $email);
        return checkdnsrr($domain, $record);


        //usage
        //if(domain_exists('user@davidwalsh.name')) {
        //  echo('This MX records exists; I will accept this email as valid.');
        //}
        //else {
        //  echo('No MX record exists;  Invalid email.');
        //}

	}

	function check_email_address($email) {
        // First, we check that there's one @ symbol, and that the lengths are right
        if (!preg_match("/^[^@]{1,64}@[^@]{1,255}$/", $email)) {
            // Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
            return false;
        }
        // Split it into sections to make life easier
        $email_array = explode("@", $email);
        $local_array = explode(".", $email_array[0]);
        for ($i = 0; $i < sizeof($local_array); $i++) {
            if (!preg_match("/^(([A-Za-z0-9!#$%&'*+\/=?^_`{|}~-][A-Za-z0-9!#$%&'*+\/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$/", $local_array[$i])) {
                return false;
            }
        }
        if (!preg_match("/^\[?[0-9\.]+\]?$/", $email_array[1])) { // Check if domain is IP. If not, it should be valid domain name
            $domain_array = explode(".", $email_array[1]);
            if (sizeof($domain_array) < 2) {
                return false; // Not enough parts to domain
            }
            for ($i = 0; $i < sizeof($domain_array); $i++) {
                if (!preg_match("/^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$/", $domain_array[$i])) {
                    return false;
                }
            }
        }

        return true;
    }

    function check_cache_engine($engine_name){        
         $this->CI->load->driver('cache');
        if($this->CI->cache->$engine_name->is_supported()){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    function db_size(){
        //connect to DB
        $objConnect = mysql_connect("localhost","root","") or die("Error Connecting to Database, <hr />Known issues:Database may be down or need to contact admin@mistonline.in");
         function getdbsize( $data ) { 
                // bytes
                if( $data < 1024 ) {
                   return $data . " bytes";
                }
                // kilobytes
                else if( $data < 1024000 ) {
                    return round( ( $data / 1024 ), 2 ) . "KB";
                }
                // megabytes
         
                else {       
                    return round( ( $data / 1024000 ), 2 ) . " MB";
                }
            }
           $dbname = 'mydatabase';
            mysql_select_db($dbname);
            $result = mysql_query("SHOW TABLE STATUS");
            $dbsize = 0;
            while( $row = mysql_fetch_array( $result ) ) { 
                $dbsize += $row[ "Data_length" ] + $row[ "Index_length" ];
                }
        echo "<p>The size of the database is ". getdbsize( $dbsize );
    }

    /*  OPTIMIZE ALL TABLES  */
    function optimize_database($dbconn) {
        $result = mysql_query('SHOW TABLES', $dbconn) or die('Cannot get tables');
        while($table = mysql_fetch_row($result)) {
            mysql_query('OPTIMIZE TABLE '.$table[0], $dbconn) or die('Cannot optimize '.$table[0]);
        }
    }    

    /* backup the db OR just a table */
    public function backup_tables($host,$user,$pass,$name,$tables = '*'){
        
        $link = mysql_connect($host,$user,$pass);
        mysql_select_db($name,$link);
        
        //get all of the tables
        if($tables == '*')
        {
            $tables = array();
            $result = mysql_query('SHOW TABLES');
            while($row = mysql_fetch_row($result))
            {
                $tables[] = $row[0];
            }
        }
        else
        {
            $tables = is_array($tables) ? $tables : explode(',',$tables);
        }
        
        //cycle through
        foreach($tables as $table)
        {
            $result = mysql_query('SELECT * FROM '.$table);
            $num_fields = mysql_num_fields($result);
            
            $return.= 'DROP TABLE '.$table.';';
            $row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
            $return.= "\n\n".$row2[1].";\n\n";
            
            for ($i = 0; $i < $num_fields; $i++) 
            {
                while($row = mysql_fetch_row($result))
                {
                    $return.= 'INSERT INTO '.$table.' VALUES(';
                    for($j=0; $j<$num_fields; $j++) 
                    {
                        $row[$j] = addslashes($row[$j]);
                        $row[$j] = ereg_replace("\n","\\n",$row[$j]);
                        if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
                        if ($j<($num_fields-1)) { $return.= ','; }
                    }
                    $return.= ");\n";
                }
            }
            $return.="\n\n\n";
        }
        
        //save file
        $handle = fopen('db-backup-'.time().'-'.(md5(implode(',',$tables))).'.sql','w+');
        fwrite($handle,$return);
        fclose($handle);

        //backup_tables('localhost','username','password','blog');
    }

    function format_bytes($bytes){
        $labels = array('B','KB','MB','GB','TB');
        for($x = 0; $bytes >= 1024 && $x < (count($labels) - 1); $bytes /= 1024, $x++);
        return(round($bytes, 2).' '.$labels[$x]);
    }

    /* creates a compressed zip file */
    function create_zip($files = array(),$destination = '',$overwrite = false) {
        //if the zip file already exists and overwrite is false, return false
        if(file_exists($destination) && !$overwrite) { return false; }
        //vars
        $valid_files = array();
        //if files were passed in...
        if(is_array($files)) {
            //cycle through each file
            foreach($files as $file) {
                //make sure the file exists
                if(file_exists($file)) {
                    $valid_files[] = $file;
                }
            }
        }
        //if we have good files...
        if(count($valid_files)) {
            //create the archive
            $zip = new ZipArchive();
            if($zip->open($destination,$overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
                return false;
            }
            //add the files
            foreach($valid_files as $file) {
                $zip->addFile($file,$file);
            }
            //debug
            //echo 'The zip archive contains ',$zip->numFiles,' files with a status of ',$zip->status;
            
            //close the zip -- done!
            $zip->close();
            
            //check to make sure the file exists
            return file_exists($destination);
        }
        else
        {
            return false;
        }

        /*
        $files_to_zip = array(
            'preload-images/1.jpg',
            'preload-images/2.jpg',
            'preload-images/5.jpg',
            'kwicks/ringo.gif',
            'rod.jpg',
            'reddit.gif'
        );
        //if true, good; if false, zip creation failed
        $result = create_zip($files_to_zip,'my-archive.zip');
        */
    }

    public function make_thumb($src, $dest, $desired_width) {

        /* read the source image */
        $source_image = imagecreatefromjpeg($src);
        $width = imagesx($source_image);
        $height = imagesy($source_image);
        
        /* find the "desired height" of this thumbnail, relative to the desired width  */
        $desired_height = floor($height * ($desired_width / $width));
        
        /* create a new, "virtual" image */
        $virtual_image = imagecreatetruecolor($desired_width, $desired_height);
        
        /* copy source image at a resized size */
        imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);
        
        /* create the physical thumbnail image to its destination */
        imagejpeg($virtual_image, $dest);
    }

    /* numeric, decimal passes */
    public function validate_numeric($variable) {
        return is_numeric($variable);
    }

    /* digits only, no dots */
    public function is_digits($element) {
        return !preg_match ("/[^0-9]/", $element);
    }

    public function validate_username($input,$pattern = '[^A-Za-z0-9]'){
        return !ereg($pattern,$input);
    }

    // whitelisting
    public function make_valid($input) { 
        return preg_replace('/[^A-Za-z0-9.,\(\)\s-]/',' ',$input); 
    }

    // array to xml
    /* print the contents of a url */
    public function print_r_xml($arr,$wrapper = 'data',$cycle = 1)
    {
        //useful vars
        $new_line = "\n";

        //start building content
        if($cycle == 1) { $output = '<?xml version="1.0" encoding="UTF-8" ?>'.$new_line; }
        $output.= tabify($cycle - 1).'<'.$wrapper.'>'.$new_line;
        foreach($arr as $key => $val)
        {
            if(!is_array($val))
            {
                $output.= tabify($cycle).'<'.htmlspecialchars($key).'>'.$val.'</'.htmlspecialchars($key).'>'.$new_line;
            }
            else
            {
                $output.= print_r_xml($val,$key,$cycle + 1).$new_line;
            }
        }
        $output.= tabify($cycle - 1).'</'.$wrapper.'>';

        //return the value
        return $output;
    }

    /* tabify */
    public function tabify($num_tabs)
    {
        for($x = 1; $x <= $num_tabs; $x++) { $return.= "\t"; }
        return $return;
    }

    // xml example
    /* test */
    /*
    $_POST = array(
                    'first_name'=>'David',
                    'last_name'=>'Walsh',
                    'url'=>'http://davidwalsh.name',
                    'languages'=>array('php','javascript','java','css'),
                    'title'=>'Web Developer',
                    'favorite_blogs'=>array('CSSTricks'=>'http://css-tricks.com','AJAXian'=>'http://ajaxian.com')
                );
    echo print_r_xml($_POST);
    */
}


//to safely serialize
//$safe_string_to_store = base64_encode(serialize($multidimensional_array));

//to unserialize...
//$array_restored_from_db = unserialize(base64_decode($encoded_serialized_string));



/* random sql records
SELECT product_id, title, description
FROM products
WHERE active = 1
AND stock > 0
ORDER BY RAND()
LIMIT 4
*/
/* End of file Tools.php */
/* Location: ./application/libraries/Tools.php */