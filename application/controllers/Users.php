<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Users controller
*/
class Users extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('users_model');
	}

	public function login() {
		$this->data['custom_css'] = array('users/login_register.css');
		$this->data['custom_js_foot'] = array('users/login_register.js');

		$this->load->view('templates/header', $this->data);
		$this->load->view('users/login', $this->data);
		$this->load->view('templates/footer', $this->data);
	}

	public function register() {
		$this->data['custom_css'] = array('users/login_register.css');
		$this->data['custom_js_foot'] = array('users/login_register.js');

		$this->load->view('templates/header', $this->data);
		$this->load->view('users/register', $this->data);
		$this->load->view('templates/footer', $this->data);
	}
}