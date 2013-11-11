<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// ------------------------------------------------------------------------

/**
 * EX_CodeIgniter Plugin Helpers
 *
 * @package		EX_CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		zhzhwcn
 */

// ------------------------------------------------------------------------


function plugin_add_url($url = '',$class = null,$function = '')
{
	$CI =& get_instance();
    $CI->plugin_urls[$url] = array('class'=>$class,'function'=>$function);
}

function plugin_add_hook($hook = '',$class = null,$function = '',$order = 100)
{
	$CI =& get_instance();
    $CI->plugin_hooks[$hook][$order] = array('class'=>$class,'function'=>$function);
    ksort($CI->plugin_hooks[$hook]);
}

function plugin_run_hook($hook = '',$argv = array())
{
	$CI =& get_instance();
    foreach($CI->plugin_hooks[$hook] as $hook_array){
        try{
            $argv = $hook_array['class']->$hook_array['function']($argv);
        } catch(exception $e){}
    }
    return $argv;
}

function plugin_add_override_view($org_view = '' , $new_view = '')
{
    $CI =& get_instance();
    $CI->views_override[$org_view] = $new_view;
}

function load_plugin($plugin_name = '')
{
    if(empty($plugin_name)){
        return null;
    }
    log_message('debug','begin to load plugin '.$plugin_name);
    $CI =& get_instance();
    $plugin_class_file = $CI->config->item('plugin_path').'/'.$plugin_name.'/'.$plugin_name.'.php';
    $plugin_desc_file = $CI->config->item('plugin_path').'/'.$plugin_name.'/desc';
    if(file_exists($plugin_class_file)){
        include_once($plugin_class_file);
        $plugin = new $plugin_name();
        $plugin->desc = read_file($plugin_desc_file);
    } else {
        $CI->db->update('plugins',array('enabled'=>0),array('plugin_name'=>$plugin_name));
        log_message('debug','plugin file missed disable this and skip load');
        return null;
    }
    
    $plugin_conf_res = $CI->db->select('plugin_conf,enabled,load_order')
                                ->from('plugins')
                                ->where('plugin_name',$plugin_name)
                                ->get();
    
    if($plugin_conf_res->num_rows()){
        $row = $plugin_conf_res->row_array();
        $plugin->enabled = $row['enabled'];
        $plugin->load_order = $row['load_order'];
        $plugin->config = unserialize($row['plugin_conf']);
    } else {
        $plugin->enabled = 0;
        $plugin->load_order = 100;
    }
    log_message('debug',$plugin_name.'plugins loaded');
    return $plugin;
}