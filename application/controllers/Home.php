<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Home Controller
*/
class Home extends CI_Controller {

	public function index() {
		$this->load->view('home');
	}

	public function edit() {
		// edit page
	}
}