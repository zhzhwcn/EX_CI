<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/

$hook['post_controller_constructor'][] = array(
                                'class'    => 'Pre_ctrler',
                                'function' => 'init_plugins',
                                'filename' => 'Pre_ctrler.php',
                                'filepath' => 'hooks',
                                'params'   => array()
                                );
$hook['post_controller'][] = array(
                                'class'    => 'Post_ctrler',
                                'function' => 'show_layout',
                                'filename' => 'Post_ctrler.php',
                                'filepath' => 'hooks',
                                'params'   => array()
                                );
/* End of file hooks.php */
/* Location: ./application/config/hooks.php */