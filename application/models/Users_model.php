<?php

/**
* model class for Users table
*/
class Users_model extends CI_Model {
	
	function __construct() {
		$this->load->database();
	}
	public function register($input) {
		$salt = mcrypt_create_iv(32);
		$_SESSION['salt'] = $salt;
		$input['password'] = hash("sha256", $input['password'] . $salt);
		$input['created'] = date('Y-m-d H:i:s');
		$input['salt'] = $salt;

		$this->db->insert("users", $input);
		return true;
	}

	public function login($input) {
		$this->db->where("username", $input['username']);
		$query = $this->db->get("users");
		$row = $query->row();
		if (!empty($row)) {
			// $pass = $input['password'] . $row->salt;
			// if ($row->password == hash("sha256", $pass)) {
				$_SESSION['user'] = $row->id;

				$this->db->where('id', $row->id);
				$this->db->update('users', array('active'=>1));
				return true;
		}

		return false;
	}

	public function logout() {
		$this->db->where("id", $_SESSION['user']);
		$query = $this->db->update("users", array('active' => 0));
		unset($_SESSION['user']);
		return true;
	}

	public function get_profile_data($user_id) {
		$this->db->where('id', $user_id);
		$query = $this->db->get('users');
		$user = $query->row_array();

		if (empty($user)) return false;
		
		$this->db->where('user_id');
		$query = $this->db->get('user_to_chombo');

		foreach ($query->result() as $u2c) {
			$this->db->where('id', $u2c->chombo_id);
			$chombo = $this->db->get('chombos')->row_array();
			$user['chombos'][] = array(
				'name' => $chombo->name,
				'title' => $chombo->title,
				'access_level' => $u2c->access_level_id,
				'owner' => 'you',
				'status' => $chombo->status,
				'sensors' => 'list of sensors',
				'actuators' => 'list of actuators',
			);
		}
	}

	public function user_data() {
		if (isset($_SESSION['user'])) {
			$this->db->where("id", $_SESSION['user']);
			$query = $this->db->get('users');

			$row = $query->row();
			if (!empty($row)) {
				return $row;
			}
		}
		return false;
	}

	public function add_chombo($code, $user_id) {
		$this->db->where('code', $code);
		$query = $this->db->get('chombos');
		$chombo = $query->row();

		if (!empty($chombo)) {

			$this->db->insert('user_to_chombo', array(
				'user_id' => $user_id,
				'chombo_id' => $chombo->id,
				'access_level_id' => 1,
				'owner' => 1
			));
		}
	}
}	