<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Plugin extends EX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/plugin
	 *	- or -  
	 * 		http://example.com/index.php/welcome/plugin
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/plugin/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// $this->load->view('welcome_message');
	}
}

/* End of file plugin.php */
/* Location: ./application/controllers/plugin.php */