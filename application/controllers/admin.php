<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends EX_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->data['addon_header'][] = '<link rel="stylesheet" href="/static/bootstrap/css/bootstrap.css">';
	    $this->data['addon_header'][] = '<link rel="stylesheet" href="/static/bootstrap/css/bootstrap-theme.css">';
	    $this->data['addon_header'][] = '<script src="/static/bootstrap/js/bootstrap.js"></script>';
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