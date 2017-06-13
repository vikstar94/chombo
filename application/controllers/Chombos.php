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

		$this->data['custom_css'] = array('theme.min.css', 'chrome.css');
		$this->data['custom_plugin_foot'] = array(
			// morris chart includes
			'raphael/raphael.min.js','morris/morris.min.js'
			// flot chart includes
			// 'flot/jquery.flot.min.js', 'flot/jquery.flot.resize.min.js', 'flot/jquery.flot.pie.min.js', 'flot/jquery.flot.categories.min.js', 'flot/jquery.flot.time.min.js', 'flot/jquery.flot.animator.min.js'
			);
		$this->data['custom_js_foot'] = array('chombos/morris-charts.js', 'chombos/google-maps.js');

		$this->load->view('templates/header', $this->data);
		$this->load->view('chombos/view_new');
		$this->load->view('templates/footer');	
	}
}