<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Users controller
*/
class Users extends CI_Controller
{
	
	public function __construct() {
		parent::__construct();
		$this->load->model('users');
	}
}