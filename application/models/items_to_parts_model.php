<?php

/**
* model class for item_to_parts table
*/
class items_to_parts_model extends CI_Model {
	
	function __construct() {
		$this->load->database();
	}

	public function get_parts($item_id) {
		$this->db->where('item_id', $item_id);
		$query = $this->db->get('items_to_parts');
		return $query->result_array();

	}

	public function get_items($part_id) {
		$this->db->where('part_id', $part_id);
		$query = $this->db->get('items_to_parts');
		return $query->result_array();

	}
}