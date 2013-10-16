<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EX_Form_validation extends CI_Form_validation {
	
	/**
	 * use this to add costom errors
	 */
	public function add_error($err = '')
	{
		if(!empty($err)){
			$this->_error_array[] = $err;
		}
	}
}