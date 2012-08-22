<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation {
	
	function __construct( $config = array() ){
	    parent::__construct($config);
	}

	function is_name($str){
		$CI =& get_instance();
		if(preg_match('/^[A-Z][a-z]+, [A-Z][a-z]+(?: [A-Z]{0,1})?$/', $str)){
			return true;
		} else{
			$CI->form_validation->set_message('is_name', 'The format of %s is Lastname, Firstname (MI) -- Turing, Alan C');
			return false;
		}
	}

	function max_items_array($arr, $num){
		$CI =& get_instance();
		if(count($arr) > $num){
			$CI->form_validation->set_message('max_items', "You may only list $num");
			return false;
		} else {
			return true;
		}
	}

	function is_year($year){
		$CI =& get_instance();
		if(strlen($year) !== 4){
			$CI->form_validation->set_message('is_year', '%s must be a 4 digit year -- 2012');
			return false;
		} else {
			return true;
		}
	}

	function is_title($str){
		$CI =& get_instance();
		$badcaps = false;
		if(strpos($str, ' Of ', 1) !== FALSE){ $badcaps = true; }
		if(strpos($str, ' The ', 1) !== FALSE){ $badcaps = true; }
		if(strpos($str, ' A ', 1) !== FALSE){ $badcaps = true; }



		if(preg_match('/[A-Z]/',$str[0]) && !$badcaps){
			return true;
		} else {
			$CI->form_validation->set_message('is_title', '%s must have its first word and proper nouns capitalized only');
			return false;
		}
	}

	function max_items_delim($str, $opts){
		$CI =& get_instance();
		$opts = explode('', $opts);
		$delim = $opts[0];
		$num = $opts[1];
		$keywords = explode($delim, $str);
		if(count($keywords) <= $num){
			return true;
		} else {
			$CI->form_validation->set_message('max_items_delim', 'You may only have 3 keywords');
			return false;
		}
	}
}
