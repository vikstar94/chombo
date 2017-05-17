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
			var_dump($row->salt, '��_�%j���3�#�%f��a�$�rӌ��j�', $_SESSION['salt']);
			die();
			var_dump($row->password,hash("sha256", $input['password'] . $row->salt));
			die();
			if ($row->password == hash("sha256", $pass)) {
				$_SESSION['user'] = $row->id;

				$this->db->where('id', $row->id);
				$this->db->update('users', array('active'=>1));
				return true;
			}	
		}
	return false;
	}
}	