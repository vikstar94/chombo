<?php

/**
* model class for Chombos table
*/
class Chombos_model extends CI_Model {

	function __construct() {
		$this->load->database();
		$this->load->model('user_to_chombo_model');
	}
	
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

		return $chombo_data;
	}

	/**
	 * check if the user has a certain permission
	 * 
	 * @param  string  	$type      	the name of the permission 
	 * @param  int  	$chombo_id 	id of the chombo
	 * @param  int  	$user_id   	id of the user
	 * @return boolean            	
	 *
	 * list of permissions:
	 * - edit
	 * -  
	 */
	public function has_permission($type, $chombo_id, $user_id) {
		if (in_array($type, array('edit', 'permissions_change'))) {

			// check if the user has a permission to edit 
			// the info about the chombo

			return true;
		}

		return false;
	}

	public function permited_users($chombo_id) {
		return $this->user_to_chombo_model->get_users_by_chombo($chombo_id);
	}
}