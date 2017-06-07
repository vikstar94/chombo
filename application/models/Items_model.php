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

	public function get_items($id = NULL) {
		if (!empty($id)) {
			$this->db->like('id', $id);
		} 
		
		$query = $this->db->get('items');
		return $query->result_array();
	}

	public function create_chombo($purchase_data, $user_id) {
		$this->db->where('id', $purchase_data['item_id']);
		$query = $this->db->get('items');
		$item = $query->row_array();

		$created = date('Y-m-d H:i:s');

		do {
			$code = $this->generate_code(20);
		} while($this->code_exist($code));

		$new_chombo['name'] = $item['name'].$item['id'];
		$new_chombo['title'] = $item['title'];
		$new_chombo['description'] = $item['description'];
		$new_chombo['created'] = $created;
		$new_chombo['code'] = $code;

		$this->db->insert('chombos', $new_chombo);
		

		$this->db->where('code', $code);
		$query = $this->db->get('chombos');
		$chombo = $query->row();

		foreach ($purchase_data['sensors'] as $sid) {
			$sensor_ids[] = $sid;
		}
		
		$this->db->where_in('id', $sensor_ids);
		$query = $this->db->get('item_sensors');

		foreach ($query->result() as $row) {
			$new_sensor['chombo_id'] = $chombo->id;
			$new_sensor['name'] = $row->name;
			$new_sensor['measurement_id'] = $row->measurement_id;
			$new_sensor['min_value'] = $row->min_value;
			$new_sensor['max_value'] = $row->max_value;
			$new_sensor['accuracy'] = $row->accuracy;
			$new_sensor['model'] = $row->model;

			$this->db->insert('sensors', $new_sensor);
		}

		foreach ($purchase_data['actuators'] as $aid) {
			$actuator_ids[] = $aid;
		}
		$this->db->where_in('id', $actuator_ids);
		$query = $this->db->get('item_actuators');

		foreach ($query->result() as $row) {
			$new_actuator['chombo_id'] = $chombo->id;
			$new_actuator['name'] = $row->name;
			$new_actuator['status'] = $row->status;
			$new_actuator['min_value'] = $row->min_value;
			$new_actuator['max_value'] = $row->max_value;
			$new_actuator['accuracy'] = $row->accuracy;
			$new_actuator['model'] = $row->model;

			$this->db->insert('actuators', $new_actuator);
		}

		return true;
	}

	private function generate_code($length) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	private function code_exist($code) {
		$this->db->where('code', $code);
		$query = $this->db->get('chombos');

		// found a code?
		if (!empty($query->row())) return true;
		return false;
	}
}