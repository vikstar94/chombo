<?php

/**
* model class for Order_lines table
*/
class Order_lines_model extends CI_Model {
	
	function __construct() {
		$this->load->database();
	}
}