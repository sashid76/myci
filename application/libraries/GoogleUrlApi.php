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
 * Compression Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Compression
 * @author		Sashi
 * @link		http://codeigniter.com/user_guide/libraries/cart.html
 */

// Declare the class
class GoogleUrlApi {
	
	// Constructor
	function GoogleURLAPI($key,$apiURL = 'https://www.googleapis.com/urlshortener/v1/url') {
		// Keep the API Url
		$this->apiURL = $apiURL.'?key='.$key;
	}
	
	// Shorten a URL
	function shorten($url) {
		// Send information along
		$response = $this->send($url);
		// Return the result
		return isset($response['id']) ? $response['id'] : false;
	}
	
	// Expand a URL
	function expand($url) {
		// Send information along
		$response = $this->send($url,false);
		// Return the result
		return isset($response['longUrl']) ? $response['longUrl'] : false;
	}
	
	// Send information to Google
	function send($url,$shorten = true) {
		// Create cURL
		$ch = curl_init();
		// If we're shortening a URL...
		if($shorten) {
			curl_setopt($ch,CURLOPT_URL,$this->apiURL);
			curl_setopt($ch,CURLOPT_POST,1);
			curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode(array("longUrl"=>$url)));
			curl_setopt($ch,CURLOPT_HTTPHEADER,array("Content-Type: application/json"));
		}
		else {
			curl_setopt($ch,CURLOPT_URL,$this->apiURL.'&shortUrl='.$url);
		}
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		// Execute the post
		$result = curl_exec($ch);
		// Close the connection
		curl_close($ch);
		// Return the result
		return json_decode($result,true);
	}

	/*
	// Create instance with key
	$key = 'xhjkhzkhfuh38934hfsdajkjaf';
	$googer = new GoogleURLAPI($key);

	// Test: Shorten a URL
	$shortDWName = $googer->shorten("http://davidwalsh.name");
	echo $shortDWName; // returns http://goo.gl/i002

	// Test: Expand a URL
	$longDWName = $googer->expand($shortDWName);
	echo $longDWName; // returns http://davidwalsh.name
	*/

	/* return result number */
	function get_google_results($domain = 'website.come'){
		// get the result content
		$content = file_get_contents('http://www.google.com/search?q=site:'.$domain);

		// parse to get results
		$result = get_match('/Results <b>(.*)from/isU',$content);

		// split the results
		$split1 = explode('of about',$result);

		// return result
		return $split1[1] ? strip_tags($split1[1]) : 0;
	}

	/* helper: does the regex */
	function get_match($regex,$content){
		preg_match($regex,$content,$matches);
		return $matches[1];
	}

	/* do it! */
	//echo 'davidwalsh.name: '.get_google_results('davidwalsh.name'); // 164
	//echo 'digg.com: '.get_google_results('digg.com'); // 3,790,000
	//echo 'google.com: '.get_google_results('google.com'); // 19,300,000
	//echo 'cnn.com: '.get_google_results('cnn.com'); // 2,180,000
	//echo 'imdb.com: '.get_google_results('imdb.com'); // 19,000,000
	//echo 'dzone.com: '.get_google_results('dzone.com'); // 484,000
	//echo 'fark.com: '.get_google_results('fark.com'); // 7,390
	//echo 'some-domain-that-doesnt-exist.com: '.get_google_results('some-domain-that-doesnt-exist'); // 0

	/* returns the shortened url */
	function get_bitly_short_url($url,$login,$appkey,$format='txt') {
		$connectURL = 'http://api.bit.ly/v3/shorten?login='.$login.'&apiKey='.$appkey.'&uri='.urlencode($url).'&format='.$format;
		return curl_get_result($connectURL);
	}

	/* returns expanded url */
	function get_bitly_long_url($url,$login,$appkey,$format='txt') {
		$connectURL = 'http://api.bit.ly/v3/expand?login='.$login.'&apiKey='.$appkey.'&shortUrl='.urlencode($url).'&format='.$format;
		return curl_get_result($connectURL);
	}

	/* returns a result form url */
	function curl_get_result($url) {
		$ch = curl_init();
		$timeout = 5;
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}

	/* get the short url */
	//$short_url = get_bitly_short_url('http://davidwalsh.name/','davidwalshblog','xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');

	/* get the long url from the short one */
	//$long_url = get_bitly_long_url($short_url,'davidwalshblog','xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');	
}