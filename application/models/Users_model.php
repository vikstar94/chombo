<?php

/**
* model class for Users table
*/
class Users_model extends CI_Model {
	
	function __construct() {
		$this->load->database();
	}
	public function register($input) {
		$salt = $this->generate_code(20);
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
			$pass = $input['password'] . $row->salt;
			if ($row->password == hash("sha256", $pass)) {

				$this->db->where('id', $row->id);
				$this->db->update('users', array('active'=>1));
				return $row->id;
			}
		}

		return false;
	} 

	public function logout($user_id) {
		$this->db->where("id", $user_id);
		$this->db->update("users", array('active' => 0));
	}

	public function get_profile_data($user_id, $viewer) {
		$this->db->where('id', $user_id);
		$query = $this->db->get('users');
		$profile_data = $query->row_array();

		if (empty($profile_data)) return false;
		
		$query = $this->db->get('access_levels');
		foreach ($query->result() as $al) {
			$access_levels[$al->id] = $al->name;
		}

		$this->db->where('user_id',$user_id);
		$query = $this->db->get('user_to_chombo');

		$profile_data['chombos'] = array();
		foreach ($query->result() as $u2c) {
			$this->db->where('id', $u2c->chombo_id);
			$chombo = $this->db->get('chombos')->row();

			if ($u2c->owner == 1 && $user_id == $viewer) {
				$owner = 'You';
			} else {
				$this->db->select('user_id');
				$this->db->where('chombo_id',$u2c->chombo_id);
				$this->db->where('owner',1);
				$uid = $this->db->get('user_to_chombo')->row();

				$this->db->select('first_name','last_name')->get_compiled_select();
				$this->db->where('id',$uid->user_id);
				$un = $this->db->get('users')->row();

				$owner = $un->first_name . " " . $un->last_name;
			}

			$profile_data['chombos'][] = array(
				'id' => $chombo->id,
				'name' => $chombo->name,
				'title' => $chombo->title,
				'access_level' => $access_levels[$u2c->access_level_id],
				'owner' => $owner,
				'status' => $chombo->status,
				'sensors' => 'list of sensors',
				'actuators' => 'list of actuators',
			);
		}
		return $profile_data;
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
		return true;
	}

	//TODO:it have to be in separate helper class
	private function generate_code($length) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
}	