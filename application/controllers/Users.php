<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Users controller
*/
class Users extends CI_Controller {

	public function login() {

		$this->data['custom_css'] = array('users/login_register.css');
		$this->data['custom_js_foot'] = array('users/login_register.js');

		$this->load->view('templates/header', $this->data);
		$this->load->view('users/login');
		$this->load->view('templates/footer');
	}

	public function login_do() {
		$credentials = $_POST['credentials'];
		if($user_id = $this->users_model->login($credentials)){
			$_SESSION['user'] = $user_id;
			redirect(base_url() . "index.php/users/profile/$user_id");	
		} else {
			redirect($_SERVER['HTTP_REFERER']);
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
			redirect(base_url() . "index.php/users/login");	
		}
		else {
			redirect(base_url() . "index.php/users/register");
		}
	}

	public function profile($user_id) {
		// cannot view profile data if not logged in
		if (empty($_SESSION['user'])) {
			redirect(base_url() . "index.php/users/login");
		}

		$this->data['profile_data'] = $this->users_model->get_profile_data($user_id, $_SESSION['user']);

		if ($this->data['profile_data'] === false) {
			redirect(base_url() . "index.php/errors/page_missing");
		}

		$this->data['custom_css'] = array('theme.min.css', 'chrome.css');

		$this->load->view('templates/header', $this->data);
		$this->load->view('users/profile');
		$this->load->view('templates/footer');
	}

	public function add_chombo() {
		if (empty($_POST)) {
			$this->load->view('templates/header', $this->data);
			$this->load->view('users/add_chombo');
			$this->load->view('templates/footer');
			return;
		}

		$code = $_POST['code'];
		$user_id = $_SESSION['user'];
		if ($this->users_model->add_chombo($code,$user_id)) {
			redirect(base_url() . "index.php/users/profile/$user_id");
		}
	}

	public function logout() {
		$user_id = $_SESSION['user'];
		$this->users_model->logout($user_id);
		unset($_SESSION['user']);

		redirect(base_url());
	}
}