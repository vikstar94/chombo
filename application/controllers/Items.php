<?php

/**
* Items controller
*/
class Items extends CI_Controllers {

	public function __construct() {
		parent::__construct();
		$this->load->model('items');
		$this->load->helper('url_helper');
	}
	
	public function index () {
		$data['items'] = $this->items_model->get_items();
		$data['title'] = 'All Items';

		$this->load->view('templates/header', $data);
		$this->load->view('items/index', $data);
		$this->load->view('templates/footer');
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