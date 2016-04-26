<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

function encrypt_text($value){
   if(!$value) return false;
 
   $crypttext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, 'SECURE_STRING_1', $value, MCRYPT_MODE_ECB, 'SECURE_STRING_2');
   return trim(base64_encode($crypttext));
}
 
function decrypt_text($value){
   if(!$value) return false;
 
   $crypttext = base64_decode($value);
   $decrypttext = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, 'SECURE_STRING_1', $crypttext, MCRYPT_MODE_ECB, 'SECURE_STRING_2');
   return trim($decrypttext);
}


/* End of file security_helper.php */
/* Location: ./application/helpers/security_helper.php */