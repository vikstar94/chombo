<?php 

/**
 * Model lass for the item_actuators table
 */
class item_actuators_model extends CI_Model {
	
	function __construct() {
		$this->load->database();
	}
}
	public function get_actuators($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('item_actuators');
		return $query->result_array();
	}
 ?>