<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mytools {

    var $CI;
    var $phpver = '';
    var $useragent = '';
    var $default_db = null;

    public function __construct(){

        $this->CI =& get_instance();

        $this->phpver =  phpversion();
        $this->useragent = (isset($_SERVER["HTTP_USER_AGENT"]) ) ? $_SERVER["HTTP_USER_AGENT"] : $HTTP_USER_AGENT;
        date_default_timezone_set('Asia/Kuala_Lumpur');
        ini_set('max_execution_time', 300); //300 seconds = 5 minutes
        
        $this->default_db = $this->CI->load->database('default', TRUE);
    }

	public function folderSize($path){
	    $size = 0;
		    foreach (glob(rtrim($path, '/').'/*', GLOB_NOSORT) as $each) {
		        $size += is_file($each) ? filesize($each) : folderSize($each);
		    }
	    return $this->byteFormat($size, $this->CI->config->item('folder_size_unit_of_measurement'), $this->CI->config->item('folder_size_decimal_places'));
	}

	/*
	public function folderSize($dir){
		$count_size = 0;
		$count = 0;
		$dir_array = scandir($dir);
		  foreach($dir_array as $key=>$filename){
		    if($filename!=".." && $filename!="."){
		       if(is_dir($dir."/".$filename)){
		          $new_foldersize = foldersize($dir."/".$filename);
		          $count_size = $count_size+ $new_foldersize;
		        }else if(is_file($dir."/".$filename)){
		          $count_size = $count_size + filesize($dir."/".$filename);
		          $count++;
		        }
		   }
		 }
		//return $count_size;
		return $this->byteFormat($count_size, $this->CI->config->item('folder_size_unit_of_measurement'), $this->CI->config->item('folder_size_decimal_places'));
	}
	*/

	/**
	 * Calculate the full size of a directory
	 *
	 * @author      Jonas John
	 * @version     0.2
	 * @link        http://www.jonasjohn.de/snippets/php/dir-size.htm
	 * @param       string   $DirectoryPath    Directory path
	 */
	public function CalcDirectorySize($DirectoryPath) {
	 
	    // I reccomend using a normalize_path function here
	    // to make sure $DirectoryPath contains an ending slash
	    // (-> http://www.jonasjohn.de/snippets/php/normalize-path.htm)
	 
	    // To display a good looking size you can use a readable_filesize
	    // function.
	    // (-> http://www.jonasjohn.de/snippets/php/readable-filesize.htm)
	 
	    $Size = 0;
	 
	    $Dir = opendir($DirectoryPath);
	 
	    if (!$Dir)
	        return -1;
	 
	    while (($File = readdir($Dir)) !== false) {
	 
	        // Skip file pointers
	        if ($File[0] == '.') continue; 
	 
	        // Go recursive down, or add the file size
	        if (is_dir($DirectoryPath . $File))            
	            $Size += CalcDirectorySize($DirectoryPath . $File . DIRECTORY_SEPARATOR);
	        else 
	            $Size += filesize($DirectoryPath . $File);        
	    }
	 
	    closedir($Dir);
	 
	    return $Size;
	}

	public function byteFormat($bytes, $unit = "", $decimals = 2) {
		$units = array('B' => 0, 'KB' => 1, 'MB' => 2, 'GB' => 3, 'TB' => 4, 'PB' => 5, 'EB' => 6, 'ZB' => 7, 'YB' => 8);

		$value = 0;
	
		if ($bytes > 0) {
			// Generate automatic prefix by bytes 
			// If wrong prefix given
			if (!array_key_exists($unit, $units)) {
				$pow = floor(log($bytes)/log(1024));
				$unit = array_search($pow, $units);
			}

				// Calculate byte value by prefix
				$value = ($bytes/pow(1024,floor($units[$unit])));
		}

		// If decimals is not numeric or decimals is less than 0 
		// then set default value
		if (!is_numeric($decimals) || $decimals < 0) {
			$decimals = 2;
		}

		// Format output
		return sprintf('%.' . $decimals . 'f '.$unit, $value);


		/* sample usage 
			echo byteFormat(4096, "B");
			echo byteFormat(8, "B", 2);
			echo byteFormat(1, "KB", 5);
			echo byteFormat(1073741824, "B", 0);
			echo byteFormat(1073741824, "KB", 0);
			echo byteFormat(1073741824, "MB");
			echo byteFormat(1073741824);
			echo byteFormat(1073741824, "TB", 10);
			echo byteFormat(1099511627776, "PB", 6);
		*/

		/* sample output 
			4096.00 B
			8.00 B
			0.00098 KB
			1073741824 B
			1048576 KB
			1024.00 MB
			1.00 GB
			0.0009765625 TB
			0.000977 PB
		*/
	}
}