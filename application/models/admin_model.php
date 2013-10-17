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
}