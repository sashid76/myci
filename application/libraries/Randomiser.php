<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
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
 * Randomiser Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Tools
 * @author		Randomiser
 * @link		http://codeigniter.com/user_guide/libraries/cart.html
 */
class Randomiser {

    public function __construct() {
        
    }

    function get_random_number($min = 0, $max = 100) {
        return rand($min, $max);
    }

    function get_random_string_from_list($list_of_words) {
        return $list_of_words[rand(0, sizeof($list_of_words) - 1)];
    }

    function get_random_string($length=6, $characters = "ABCDEFGHIJKLMNOPRQSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_") {
        $num_characters = strlen($characters) - 1;
        $return = '';
        while (strlen($return) < $length) {
            $return.= $characters[mt_rand(0, $num_characters)];
        }
        return $return;
    }

    function random_float($min, $max) {
        return ($min + lcg_value() * (abs($max - $min)));
    }

    function get_random_hex_color($values = 'abcdef0123456789', $length=6) {
        $num_characters = strlen($characters) - 1;
        while (strlen($code) < $length) {
            $return.= $characters[mt_rand(0, $num_characters)];
        }
        return '#' . $return;
    }

    function get_random_file($dir) {
        while (false !== ($file = readdir($dir))) {
            $files[] = $file;
        }
        return $files[rand(0, sizeof($files) - 1)];
    }

    function randomString($length) {
        //take all the numbers,small letter,capital letters
        $original_string = array_merge( range('a','z'), range('A', 'Z'),range(0,9));
        //make a string from the characters
        $original_string = implode("", $original_string);
        //shuffle the string and take the sub string from the given length
        return substr(str_shuffle($original_string), 0, $length);
    }

}

/* End of file Randomiser.php */
/* Location: ./application/libraries/Randomiser.php */