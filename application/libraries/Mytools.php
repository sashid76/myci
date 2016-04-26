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