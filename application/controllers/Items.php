<?php

/**
* Items controller
*/
class Items extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('items_model');
		$this->load->helper('url_helper');
	}
	
	public function index () {
		$this->data['items'] = $this->items_model->get_items();
		$this->data['title'] = 'All Items';

		$this->data['custom_css'] = array('theme.min.css', 'chrome.css', 'items/store.css');

		$this->load->view('templates/header', $this->data);
		$this->load->view('items/index');
		$this->load->view('templates/footer');
	}

	public function purchase_process() {

		$this->data['custom_css'] = array('theme.min.css', 'chrome.css');
		$this->data['custom_plugin_foot'] = array('bootstrap-wizard/jquery.bootstrap.wizard.min.js');
		$this->data['custom_js_foot'] = array('items/custom_product_wizzard.js');

		$this->load->view('templates/header', $this->data);
		$this->load->view('items/purchase_process');
		$this->load->view('templates/footer');
	}

	public function purchase () {
		// TODO: make it so it takes this id dynamically
		$item_id = 1;

		$user_id = $_SESSION['user'];
		if (empty($user_id)) {
			header('Location: http://localhost/chombo/index.php/users/login');
			return;
		} 
	
		// TODO: encapsulate in try ... catch use exceptions in the model
		if ($this->items_model->create_chombo($item_id, $user_id)) {
			header('Location: http://localhost/chombo/index.php/users/profile/' . $user_id);
			return;
		} else {
			header('Location: http://localhost/chombo/index.php/items/store');
			return;
		}
	}

	public function view($id) {
		$this->data['item'] = $this->items_model->get_items($id);
		$this->data['custom_css'] = array('items/pdp.css');

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