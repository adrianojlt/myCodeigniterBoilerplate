<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Controller extends MX_Controller {

	public function __construct() {

		parent::__construct();

		//if (!$this->ion_auth->is_admin()) redirect('Login/index');
	}
	
}
