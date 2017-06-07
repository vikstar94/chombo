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

		$this->data['custom_css'] = array('items/pdp.css');

		$this->load->view('templates/header', $this->data);
		$this->load->view('items/pdp');
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

	public function view ($name) {
		$data['item'] = $this->items_model->get_items($name);

		if (empty($data['item']))
		{
			show_404();
		}

		$data['title'] = $data['item']['title'];

		$this->load->view('templates/header', $data);
		$this->load->view('items/view', $data);
		$this->load->view('templates/footer');
	}
	
}