<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Dummy Controller for testing
*/
class Dummy extends CI_Controller {

	public function index() {
		$this->data['custom_css'] = array('style.css');
		$this->data['custom_js_foot'] = array('index.js');
		
		// $this->load->view('templates/header', $this->data);
		$this->load->view('external/index', $this->data);
		// $this->load->view('templates/header', $this->data);
	}
	
}