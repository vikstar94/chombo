<?php

/**
* The model class of the vards table
*/
class vars_model extends CI_Model {
	
	function __construct() {
		$this->load->database();
	}

	public function get_var($name = NULL) {

		$this->db->select('value');
		$query = $this->db->get('vars');
		return (!empty($query->row())) ? $query->row()->value : NULL;
	}
}