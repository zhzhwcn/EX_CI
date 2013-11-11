<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// ------------------------------------------------------------------------

/**
 * EX_CodeIgniter File Helpers
 *
 * @package		EX_CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		zhzhwcn
 */

// ------------------------------------------------------------------------

/**
 * Copy Directory
 */
function copy_directory( $source, $destination ) 
{
	if ( is_dir( $source ) ) {
		@mkdir( $destination );
		$directory = dir( $source );
		while ( FALSE !== ( $readdirectory = $directory->read() ) ) {
			if ( $readdirectory == '.' || $readdirectory == '..' ) {
				continue;
			}
			$PathDir = $source . '/' . $readdirectory;
			if ( is_dir( $PathDir ) ) {
				copy_directory( $PathDir, $destination . '/' . $readdirectory );
				continue;
			}
			copy( $PathDir, $destination . '/' . $readdirectory );
		}

		$directory->close();
	}else {
		copy( $source, $destination );
	}
}