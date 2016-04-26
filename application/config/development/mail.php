<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['aibd_protocol'] = 'smtp';
$config['aibd_smtp_host'] = 'mx1.aibd.org.my';
$config['aibd_smtp_port'] = '25';
$config['aibd_smtp_user'] = 'sashi@aibd.org.my'; //change this
$config['aibd_smtp_pass'] = 'jackass33'; //change this
$config['aibd_mailtype'] = 'html';        
$config['aibd_charset'] = 'iso-8859-1';
$config['aibd_wordwrap'] = TRUE;
$config['aibd_validate'] = TRUE;
$config['aibd_newline'] = "\r\n"; //use double quotes to comply with RFC 822 standard

/*
$config['oc_mail_protocol'] = 'sendmail';
$config['oc_mail_SMTP_host'] = 'raffles.olympia.edu.my';
$config['oc_mail_SMTP_port'] = 2008;
$config['oc_mail_username'] = 'sender';
$config['oc_mail_password'] = 'sharwo0905';
$config['oc_mail_mailtype'] = 'html';
$config['oc_mail_charset'] = 'iso-8859-1';
$config['oc_mail_wordwrap'] = TRUE;
$config['oc_mail_validate'] = TRUE;
$config['oc_sender'] = 'sender@raffles.olympia.edu.my';

$config['gmail_protocol'] = 'smtp';
$config['gmail_SMTP_host'] = 'ssl://smtp.googlemail.com';
$config['gmail_SMTP_port'] = 465;
$config['gmail_SMTP_username'] = 'olympia.college.ict@gmail.com';
$config['gmail_SMTP_password'] = 'super_tiger.1101';
$config['gmail_mailtype'] = 'html';
$config['gmail_charset'] = 'iso-8859-1';
$config['gmail_sender'] = 'olympia.college.ict@gmail.com';

$config['is_gmail'] = FALSE;
*/

/* End of file mail.php */
/* Location: ./application/config/development/mail.php */