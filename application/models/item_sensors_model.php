<?php 

/**
 * Model lass for the item_sensors table
 */
class item_sensors_model extends CI_Model {
	
	function __construct() {
		$this->load->database();
	}
}
public function get_sensors($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('item_sensors');
		return $query->result_array();
	}
 ?>