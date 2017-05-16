<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Home Controller
*/
class Home extends CI_Controller {

	public function index() {
		$this->data['custom_js_head'] = array('parallax.js');

		$this->load->view('templates/header', $this->data);
		$this->load->view('home', $this->data);
		$this->load->view('templates/footer', $this->data);
	}
	
}