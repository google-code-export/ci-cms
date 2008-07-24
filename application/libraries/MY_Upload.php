<?php

/**
 * CI-CMS Upload class overwrite
 *
 * This file is part of CI-CMS
 *
 *
 * @package   CI-CMS
 * @copyright 2008 Hery.serasera.org
 * @license   http://www.gnu.org/licenses/gpl.html
 * @version   $Id: MY_Language.php 204 2008-02-24 01:30:00Z zacharias@dynaknudsen.dk $
 */

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}


class MY_Upload extends CI_Upload
{
    /**
	 * Verify that the filetype is allowed
	 * using file extension instead of mime
	 *
	 * @access	public
	 * @return	bool
	 */	
	function is_allowed_filetype()
	{
		var_dump($this->file_ext);
		
		if (count($this->allowed_types) == 0 OR ! is_array($this->allowed_types))
		{
			$this->set_error('upload_no_file_types');
			return FALSE;
		}
			 	
		foreach ($this->allowed_types as $val)
		{
			if ("." . $val == $this->file_ext)
			{
				return TRUE;
			}	
		}
		
		return FALSE;
	}

}

?>