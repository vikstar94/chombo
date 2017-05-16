<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Errors Controller
*/
class Errors extends CI_Controller {

	public function page_missing() {

		$this->data['heading'] = 'Oops, looks like we did not find what you were looking for!';
		$this->data['message'] = 'File not found!';

		$this->load->view('errors/html/error_404', $this->data);

	}
	
}