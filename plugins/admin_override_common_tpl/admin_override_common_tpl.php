<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_override_common_tpl {
	
	//display in plugin config page
	var $name = 'admin_override_common_tpl';
	//this array will be save into database and override when be loaded form database
	var $config = array(
		'sample_config_key'=>'sample_config_value'
	);
	
	/**
	 * the install function only run when installing the plugin
	 */
	public function install()
	{
		copy_directory(dirname(__FILE__).'/views',APPPATH.'views/plugin/'.$this->name);
	}
	
	/**
	 * the load function only run when the framework finish loading the plugin
	 */
	public function load()
	{
		
	}
	
	/**
	 * the uninstall function only run when uninstalling the plugin
	 */
	public function uninstall()
	{
		delete_files(APPPATH.'views/plugin/'.$this->name);
	}
}