<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Chombos controller
*/
class Chombos extends CI_Controller
{
	
	public function __construct () {
		parent::__construct();
		$this->load->model('chombos_model');
	}

	public function view($chombo_id) {
		$this->data['chombo_data'] = $this->chombos_model->chombo_data($chombo_id);

		$this->load->view('templates/header', $this->data);
		$this->load->view('users/profile');
		$this->load->view('templates/footer');	
	}
}