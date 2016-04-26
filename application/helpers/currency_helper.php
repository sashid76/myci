<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @desc Simple function to check if current page is equal to nav list element.
 *       This case return "active" as class name for the list element.
 * @param String $pageID
 * @param String $linkID
 * @return String/Null
 */

if(!function_exists('converter')){
	function converter($from_currency, $to_currency){
		//$from_currency = "USD";
		//$to_currency = "MYR";
		$url = 'http://www.webservicex.net/CurrencyConvertor.asmx/ConversionRate?FromCurrency='.$from_currency.'&ToCurrency='.$to_currency;
		$rate = simplexml_load_file($url);
		//echo 'Rate from '.$from_currency.' to '.$to_currency.' is: '.$rate[0];
		return $rate[0];
	}
}

	/*
	$from = "USD";
	$to = "MYR";
	$url = 'http://www.webservicex.net/CurrencyConvertor.asmx/ConversionRate?FromCurrency='.$from.'&ToCurrency='.$to;
	$rate = simplexml_load_file($url);
	echo 'Rate from '.$from.' to '.$to.' is: '.$rate[0];
	*/

/* End of file currency_helper.php */
/* Location: ./application/helpers/currency_helper.php */