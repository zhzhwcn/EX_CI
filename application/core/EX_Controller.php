<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Extend Contorller
 */
class EX_Controller extends CI_Controller {

	var $data = array();
	
	public function __construct()
	{
		parent::__construct();
		//for SEO meta tags
		$this->data['meta'] = array('title'=>'','desc'=>'','keyword'=>'');
		//addon_header and addon_footer should be string items 
		//like base tag cnzz tag
		$this->data['addon_header'] = array();
		$this->data['addon_footer'] = array();
	}

}
// END EX_Controller class

/* End of file EX_Controller.php */
/* Location: ./application/core/EX_Controller.php */