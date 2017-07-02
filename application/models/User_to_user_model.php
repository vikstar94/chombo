<?php

/**
* model class for User_to_user table
*/
class User_to_user_model extends CI_Model {
	
	function __construct() {
		$this->load->database();
	}

	public function add_friend() {

	}

	public function remove_friend() {

	}

	public function get_friends($user_id) {
		$this->db->join('users', 'users.id = user_to_user.friend_id');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get('user_to_user');

		return $query->result_array();
	}
}