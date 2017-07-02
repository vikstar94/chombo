<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Chombos controller
*/
class Chombos extends CI_Controller
{
	
	public function __construct () {
		parent::__construct();
		$this->load->model('users_model');
		$this->load->model('chombos_model');
		$this->load->model('user_to_user_model');
		$this->load->model('vars_model');
	}

	public function view($chombo_id) {

		$this->users_model->logged_in();

		$this->data['chombo_data'] = $this->chombos_model->chombo_data($chombo_id);
		$this->data['google_api_key'] = $this->vars_model->get_var('google_api_key');

		$this->data['custom_css'] = array('theme.min.css', 'chrome.css');
		$this->data['custom_plugin_foot'] = array(
			// morris chart includes
			'raphael/raphael.min.js','morris/morris.min.js'
			// flot chart includes
			// 'flot/jquery.flot.min.js', 'flot/jquery.flot.resize.min.js', 'flot/jquery.flot.pie.min.js', 'flot/jquery.flot.categories.min.js', 'flot/jquery.flot.time.min.js', 'flot/jquery.flot.animator.min.js'
			);
		$this->data['custom_js_foot'] = array('chombos/morris-charts.js', 'chombos/google-maps.js');

		$this->load->view('templates/header', $this->data);
		$this->load->view('chombos/view_v3');
		$this->load->view('templates/footer');	
	}

	public function edit ($chombo_id) {

		$user_id = $this->users_model->logged_in();

		if (!$this->chombos_model->has_permission('edit', $chombo_id, $user_id)) 
			redirect($_SERVER['HTTP_REFERER']);

		$this->data['chombo_data'] = $this->chombos_model->chombo_data($chombo_id);

		$this->data['custom_css'] = array('theme.min.css', 'chrome.css');

		$this->load->view('templates/header', $this->data);
		$this->load->view('chombos/edit');
		$this->load->view('templates/footer');
	}

	public function permissions($chombo_id) {

		$user_id = $this->users_model->logged_in();

		if (!$this->chombos_model->has_permission('permissions_change', $chombo_id, $user_id))
			redirect($_SERVER['HTTP_REFERER']);

		$this->data['chombo_data'] = $this->chombos_model->chombo_data($chombo_id);
		$this->data['permited_users'] = $this->chombos_model->permited_users($chombo_id);
		$this->data['friends'] = $this->user_to_user_model->get_friends($user_id);

		$this->data['custom_css'] = array('theme.min.css', 'chrome.css');

		$this->load->view('templates/header', $this->data);
		$this->load->view('chombos/permissions');
		$this->load->view('templates/footer');
	}
}