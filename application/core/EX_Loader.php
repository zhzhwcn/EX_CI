<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EX_Loader extends CI_Loader {
	
	/**
	 * add quick disable some views feature
	 * to disable it , just put the view path into the $CI->disabled_views array
	 */
	public function view($view, $vars = array(), $return = FALSE)
	{
		$CI =& get_instance();
		if(in_array($view,$CI->disabled_views)){
			return '';
		}
		if(isset($CI->views_override[$view])){
			$view = $CI->views_override[$view];
		}
		return $this->_ci_load(array('_ci_view' => $view, '_ci_vars' => $this->_ci_object_to_array($vars), '_ci_return' => $return));
	}
}