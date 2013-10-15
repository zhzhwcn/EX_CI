<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * post_controller hook class
 */
class Post_ctrler{
	
	var $CI;
	
	public function __construct()
	{
		$this->CI = &get_instance();
		log_message('debug','post_controller hook class loaded');
	}
	
	public function show_layout()
	{
		log_message('debug','post_controller function show_layout begin running');
		$this->CI->load->view('layout',$this->CI->data);
		log_message('debug','show_layout finished');
	}
}