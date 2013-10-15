<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * pre_controller hook class
 */
class Pre_ctrler{
	
	public function __construct()
	{
		log_message('debug','pre_controller hook class loaded');
	}
	
	public function init_plugins()
	{
		log_message('debug','pre_controller function init_plugins begin running');
		$CI =& get_instance();
		$CI->disabled_views = array();
		$CI->plugins = array();
		$CI->plugin_hooks = array();
		$CI->plugin_urls = array();
		log_message('debug','plugins loaded');
	}
}