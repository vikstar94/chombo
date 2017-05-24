<?php

/**
* model class for Chombos table
*/
class Chombos_model extends CI_Model {
	
	public function chombo_data($chombo_id) {

		$this->db->where('id', $chombo_id);
		$query = $this->db->get('chombos');
		$chombo_data = $query->row_array();

		$this->db->where('chombo_id', $chombo_id);
		$query = $this->db->get('sensors');
		foreach ($query->result_array() as $sensor) {
			$chombo_data['sensors'][] = $sensor;
		}

		$this->db->where('chombo_id', $chombo_id);
		$query = $this->db->get('actuators');
		foreach ($query->result_array() as $actuator) {
			$chombo_data['actuators'][] = $actuator;

		}
		
		var_dump($chombo_data);
		die();
		return $chombo_data;
	}
}