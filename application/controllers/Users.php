<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Users controller
*/
class Users extends CI_Controller {

	public function login() {
		// var_dump($_SESSION);
		$this->data['custom_css'] = array('users/login_register.css');
		$this->data['custom_js_foot'] = array('users/login_register.js');

		$this->load->view('templates/header', $this->data);
		$this->load->view('users/login');
		$this->load->view('templates/footer');
	}

	public function login_do() {
		$credentials = $_POST['credentials'];
		if($this->users_model->login($credentials)){
			header("Location: http://localhost/chombo/index.php");	
		} else {
			header("Location: http://localhost/chombo/index.php/users/login");	
		}
	}

	public function register() {
		$this->data['custom_css'] = array('users/login_register.css');
		$this->data['custom_js_foot'] = array('users/login_register.js');

		$this->load->view('templates/header', $this->data);
		$this->load->view('users/register');
		$this->load->view('templates/footer');
	}

	public function register_do() {
		$credentials = $_POST['credentials'];
		if ($this->users_model->register($credentials)) {
			header("Location: http://localhost/chombo/index.php/users/login");	
		}
		else {
			header("Location: http://localhost/chombo/index.php/users/register");
		}
	}

	public function profile($user_id) {
		$this->data['user_data'] = $this->users_model->get_profile_data($user_id);

		$this->load->view('templates/header', $this->data);
		$this->load->view('users/profile');
		$this->load->view('templates/footer');
	}

	public function add_chombo() {
		
	}	
}