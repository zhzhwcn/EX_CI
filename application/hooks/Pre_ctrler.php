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
		$CI->views_override = array();
		$CI->plugins = array();
		$CI->plugin_hooks = array();
		$CI->plugin_urls = array();
        //$CI->output->enable_profiler(TRUE);
        $plugins = $CI->db->order_by('load_order','DESC')->get_where('plugins','enabled = 1')->result_array();
        foreach($plugins as $row){
            $CI->plugins[$row['plugin_name']] = load_plugin($row['plugin_name']);
            if($CI->plugins[$row['plugin_name']]){
                $CI->plugins[$row['plugin_name']]->load();
            }
        }
        
		log_message('debug','plugins loaded');
	}
}