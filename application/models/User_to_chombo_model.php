<?php

/**
* model class for User_to_chombo table
*/
class User_to_chombo_model extends CI_Model {
	
	function __construct() {
		$this->load->database();
	}

	public function get_chombos_by_user($user_id) {
		$this->db->join('chombos', 'chombos.id = user_to_chombo.chombo_id');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get('user_to_chombo');

		return $query->result_array();
	}

	public function get_users_by_chombo($chombo_id) {
		$this->db->join('users', 'users.id = user_to_chombo.user_id');
		$this->db->where('chombo_id', $chombo_id);
		$query = $this->db->get('user_to_chombo');

		return $query->result_array();
	}
}