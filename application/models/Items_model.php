<?php

/**
 * Model lass for the items table
 */
class Items_model extends CI_Model {
	
	function __construct() {
		$this->load->database();
	}

	/**
	 * [get_chombo description]
	 * @param  boolean $name [description]
	 * @return [type]        [description]
	 */

	public function get_items($name = FALSE) {

		if ($slug === FALSE) {
			$query = $this->db->get('items');
			return $query->result_array();
		} 
		
		$query = $this->db->like('name', $name);
		return $query->result_array();
	}
}