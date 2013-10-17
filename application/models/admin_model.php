<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Admin Model
 */
class Admin_model extends CI_Model
{
    /**
     * 验证用户
     */
    public function check_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->db->select('admin_id,admin_pass')
                            ->from('admin')
                            ->where(array('admin_name'=>$username))->get();
        if($user->num_rows()){
            $row = $user->row_array();
            if(sha1(md5($password)) == $row['admin_pass']){
                $this->session->set_userdata(array(
                    'is_admin_login'=>1,
                    'admin_id'=>$row['admin_id']
                ));
                return true;
            } else {
                $this->form_validation->add_error(lang('admin_wrong_pass'));
                return false;
            }
        } else {
            $this->form_validation->add_error(lang('admin_no_user'));
            return false;
        }
    }
    
    /**
     * 插件列表
     */
    public function get_plugin_list()
    {
        $plugins = array();
        $plugin_folders = array();
        $db_res = $this->db->select('plugin_id,plugin_name,enabled,load_order')
                            ->from('plugins')->get()->result_array();
        foreach($db_res as $row){
            $plugins[$row['plugin_name']] = $row;
        }
        $this->load->helper('directory');
        $this->load->helper('file');
        $folder_res = directory_map($this->config->item('plugin_path'));
        foreach($folder_res as $file=>$files){
            if(!is_array($files)){
                continue;
            }
            $plugin_complate = true;
            if(($desc = read_file($this->config->item('plugin_path').'/'.$file.'/desc')) === false){
                $plugin_complate = false;
            }
            $plugin_folders[$file] = array('desc'=>($plugin_complate?$desc:lang('admin_plugin_incomplete')),'complate'=>$plugin_complate);
        }
        $db_keys = array_keys($plugins);
        $folder_keys = array_keys($plugin_folders);
        $new_plugins = array_diff($folder_keys,$db_keys);
        foreach($plugins as $plugin_name => $plugin_info){
            if((!isset($plugin_folders[$plugin_name]) || !$plugin_folders[$plugin_name]['complate']) && $plugin_info['enabled']){
                $this->db->update('plugins',array('enabled'=>0),array('plugin_id'=>$plugin_info['plugin_id']));
                $plugins[$plugin_name]['enabled'] = 0;
                $plugins[$plugin_name]['desc'] = lang('admin_plugin_file_missing');
            } else {
                $plugins[$plugin_name]['desc'] = $plugin_folders[$plugin_name]['desc'];
            }
        }
        foreach($new_plugins as $new_plugin_name){
            $plugins[$new_plugin_name] = array(
                'plugin_id'=>0,
                'plugin_name'=>$new_plugin_name,
                'enabled'=>0,
                'load_order'=>0,
                'desc'=>$plugin_folders[$new_plugin_name]['desc']
            );
        }
        return $plugins;
    }
}