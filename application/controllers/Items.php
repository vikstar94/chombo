<?php

/**
* Items controller
*/
class Items extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('items_model');
		$this->load->model('item_parts_model');
		$this->load->helper('url_helper');
	}
	
	public function index () {
		$this->data['items'] = $this->items_model->get_items();
		$this->data['parts'] = $this->item_parts_model->get_parts();
		
		$this->data['title'] = 'All Items';

		$this->data['custom_css'] = array('theme.min.css', 'chrome.css', 'style.csss');

		$this->load->view('templates/header', $this->data);
		$this->load->view('items/index');
		$this->load->view('templates/footer');
	}

	public function purchase_process() {
		if (empty($_POST) || empty($_POST['item_id'])) {
			header('Location: http://localhost/chombo/index.php');
			return;
		}

		$this->data['item_id'] = $_POST['item_id'];
		$this->data['parts'] = $this->item_parts_model->get_parts();
		$this->data['custom_css'] = array('theme.min.css', 'chrome.css');
		$this->data['custom_plugin_foot'] = array('bootstrap-wizard/jquery.bootstrap.wizard.min.js');
		$this->data['custom_js_foot'] = array('items/custom_product_wizzard.js');

		$this->load->view('templates/header', $this->data);
		$this->load->view('items/purchase_process');
		$this->load->view('templates/footer');
	}

	public function purchase () {
		$user_id = $_SESSION['user'];
		if (empty($user_id)) {
			header('Location: http://localhost/chombo/index.php/users/login');
			return;
		} 
	
		// TODO: encapsulate in try ... catch use exceptions in the model
		if ($this->items_model->create_chombo($_POST, $user_id)) {
			header('Location: http://localhost/chombo/index.php/users/profile/' . $user_id);
			return;
		} else {
			header('Location: http://localhost/chombo/index.php/items/store');
			return;
		}
	}

	public function view($id) {
		$this->data['item'] = $this->items_model->get_items($id)[0];
		$this->data['custom_css'] = array('theme.min.css', 'chrome.css', 'items/pdp.css');

		if (empty($this->data['item']))
		{
			show_404();
		}

		$this->data['title'] = $this->data['item']['title'];

		$this->load->view('templates/header', $this->data);
		$this->load->view('items/pdp');
		$this->load->view('templates/footer');
	}
	
}