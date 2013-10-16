<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends EX_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->data['addon_header'][] = '<link rel="stylesheet" href="/static/bootstrap/css/bootstrap.css">';
	    $this->data['addon_header'][] = '<link rel="stylesheet" href="/static/bootstrap/css/bootstrap-theme.css">';
        $this->data['addon_header'][] = '<link rel="stylesheet" href="/static/css/admin.css">';        
	    $this->data['addon_header'][] = '<script src="/static/bootstrap/js/bootstrap.js"></script>';
        $this->load->model('Admin_model');
        $this->load->language('admin');
    }
    
    /**
	 * Index Page for this controller.
	 */
	public function index()
	{
		// $this->load->view('welcome_message');
	}
    
    /**
     * Admin login
     */
    public function login()
    {
        
    }
    
    /**
     * Admin check login info
     */
    public function do_login()
    {
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'uassword', 'required');
        if ($this->form_validation->run() == FALSE || $this->Admin_model->check_login() == false){
            //print_r($this->form_validation->_error_messages);
            //exit;
            show_error(validation_errors(),'200','Error');
        } else {
            redirect('admin/index');
        }
    }
    
    /**
     * Admin logout 
     */
    public function logout()
    {
        
    }
    
    /**
     * Plugin list page
     */
    public function plugin_list()
    {
        
    }
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */